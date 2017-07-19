<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hauth extends CI_Controller {

	public function index()
	{
		$this->load->view('hauth/home');
	}

	public function login($provider)
	{
		$this->load->library('HybridAuthLib');
		log_message('debug', "controllers.HAuth.login($provider) called");

		try
		{
			log_message('debug', 'controllers.HAuth.login: loading HybridAuthLib');
			// $this->load->library('HybridAuthLib');

			if ($this->hybridauthlib->providerEnabled($provider))
			{
				log_message('debug', "controllers.HAuth.login: service $provider enabled, trying to authenticate.");
				$service = $this->hybridauthlib->authenticate($provider);

				if ($service->isUserConnected())
				{
					log_message('debug', 'controller.HAuth.login: user authenticated.');

					$user_profile = $service->getUserProfile();

					// log_message('info', 'controllers.HAuth.login: user profile:'.PHP_EOL.print_r($user_profile, TRUE));

					$data['user_profile'] = $user_profile;

					$from = 'twitter';
					$social_id = $user_profile->displayName;
				    $username = $user_profile->firstName.' '.$user_profile->lastName;
				    $birthday = $user_profile->birthDay;
				    $email = $user_profile->email;
				    $profile = $user_profile->photoURL;
				    $created_date = Date('Y/m/d h:i:s');

				    $this->load->library('session');

				    $checksql = "SELECT * FROM `tbl_user` WHERE `social_id` = '".$social_id."'";
				    $result = $this->db->query($checksql);

				    if($result->num_rows()>0){
				    	$this->session->set_userdata('users_data', $result->row());
				    	redirect('index.php/home/homePage');
				    	exit();
				    }

				    $sql = "INSERT INTO `tbl_user`(`from`,`social_id`, `username`,`birthday`,`email`, `profile`, `created_date`) VALUES ('$from','$social_id','$username','$birthday','$email','$profile','$created_date')";

				    if($this->db->query($sql)){
				    	$insert_id = $this->db->insert_id();

				    	$this->db->where("user_id ", $insert_id);
				    	$users_data = $this->db->get("tbl_user")->row();

				    	$this->session->set_userdata($users_data);
				    	$this->session->set_userdata('users_data', $users_data);

				    	redirect('index.php/home/homePage');
				    	exit();
				    }else{
				    	redirect('home');
				    	exit();
				    }
					// $this->load->view('hauth/done',$data);
				}
				else // Cannot authenticate user
				{
					show_error('Cannot authenticate user');
				}
			}
			else // This service is not enabled.
			{
				log_message('error', 'controllers.HAuth.login: This provider is not enabled ('.$provider.')');
				show_404($_SERVER['REQUEST_URI']);
			}
		}
		catch(Exception $e)
		{
			$error = 'Unexpected error';
			switch($e->getCode())
			{
				case 0 : $error = 'Unspecified error.'; break;
				case 1 : $error = 'Hybriauth configuration error.'; break;
				case 2 : $error = 'Provider not properly configured.'; break;
				case 3 : $error = 'Unknown or disabled provider.'; break;
				case 4 : $error = 'Missing provider application credentials.'; break;
				case 5 : log_message('debug', 'controllers.HAuth.login: Authentification failed. The user has canceled the authentication or the provider refused the connection.');
				         //redirect();
				         if (isset($service))
				         {
				         	log_message('debug', 'controllers.HAuth.login: logging out from service.');
				         	$service->logout();
				         }
				         show_error('User has cancelled the authentication or the provider refused the connection.');
				         break;
				case 6 : $error = 'User profile request failed. Most likely the user is not connected to the provider and he should to authenticate again.';
				         break;
				case 7 : $error = 'User not connected to the provider.';
				         break;
			}

			if (isset($service))
			{
				$service->logout();
			}

			log_message('error', 'controllers.HAuth.login: '.$error);
			show_error('Error authenticating user.');
		}
	}

	public function endpoint()
	{

		log_message('debug', 'controllers.HAuth.endpoint called.');
		log_message('info', 'controllers.HAuth.endpoint: $_REQUEST: '.print_r($_REQUEST, TRUE));

		if ($_SERVER['REQUEST_METHOD'] === 'GET')
		{
			log_message('debug', 'controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.');
			$_GET = $_REQUEST;
		}

		log_message('debug', 'controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.');
		require_once APPPATH.'/third_party/hybridauth/index.php';

	}
}

/* End of file hauth.php */
/* Location: ./application/controllers/hauth.php */
