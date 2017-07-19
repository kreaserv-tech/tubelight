<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct() {

        parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->library('session');
    }

	public function old_index()
	{
		$this->load->view('index');
	}

	public function old_login()
	{
		$from = $this->input->post('from');
		$social_id = $this->input->post('social_id');
	    $username = $this->input->post('username');
	    $birthday = $this->input->post('birthday');
	    $email = $this->input->post('email');
	    $profile = $this->input->post('profile');

	    $created_date = Date('Y/m/d h:i:s');


	    $checksql = "SELECT * FROM `tbl_user` WHERE `social_id` = ".$social_id;
	    $result = $this->db->query($checksql);

	    if($result->num_rows()>0){

	    	$arr = array(
	    		'status' => 'success',
	    	);

	    	$this->session->set_userdata('users_data', $result->row());
	    	echo json_encode($arr);
	    	exit();

	    }

	    $sql = "INSERT INTO `tbl_user`(`from`,`social_id`, `username`,`birthday`,`email`, `profile`, `created_date`) VALUES ('$from','$social_id','$username','$birthday','$email','$profile','$created_date')";
	    
	    if($this->db->query($sql)){

	    	$arr = array(
	    		'status' => 'success',
	    	);

	    	$insert_id = $this->db->insert_id();

	    	$this->db->where("user_id ", $insert_id);
	    	$users_data = $this->db->get("tbl_user")->row();
	    	$this->session->set_userdata('users_data', $users_data);

	    	echo json_encode($arr);
	    	exit();

	    } else {

	    	$arr = array(
	    		'status' => 'failed',
	    	);
	    	echo json_encode($arr);
	    	exit();

	    }
	}

	public function old_homePage() {

		if (!$this->session->userdata('users_data')) {
			$this->load->view('index');
		} else {
			$this->load->view('home');
		}
	}

	public function old_leaderboard()
	{	
		$sql = "SELECT f.`user_id`, f.`username`, f.`profile`, max(s.`points`) as points FROM `tbl_user` f join `tbl_leaderboard` s on f.`user_id` = s.`user_id` group by f.`social_id` order by max(s.`points`) desc";

		$query = $this->db->query($sql);
		$arr['data'] = $query->result();


		$this->load->view('leaderboard',$arr);

	}

	public function old_update()
	{	
		$social_id = $this->session->userdata('users_data')->social_id;
		$name = $this->input->post('name');
	    $mobile = $this->input->post('mobile');
	    $birthday = $this->input->post('birthday');
	    $email = $this->input->post('email');

		$sql = "UPDATE `tbl_user` SET `username`='$name', `created_date`= '$created_date', `mobile`='$mobile',`birthday`='$birthday',`email`='$email' Where `social_id`= '$social_id'";

		if($this->db->query($sql)){
	    	$arr = array(
	    		'status' => 'success',
	    	);

	    	$this->db->where("social_id ", $social_id);
	    	$users_data = $this->db->get("tbl_user")->row();
	    	$this->session->set_userdata('users_data', $users_data);

	    	echo json_encode($arr);
	    	exit();


	    }else{

	    	$arr = array(
	    		'status' => 'failed',
	    	);

	    	echo json_encode($arr);
	    	exit();

	    }

	}

	public function old_profile()
	{
		if (!$this->session->userdata('users_data')) {
			$this->load->view('index');
		} else {
	    	$this->db->where("social_id ", $this->session->userdata('users_data')->social_id);
	    	$users_data = $this->db->get("tbl_user")->row();
	    	$this->session->set_userdata('users_data', $users_data);

			$this->load->view('profile');
		}
	}

	public function old_quiz()
	{
		$this->load->view('quiz');
	}

	public function closed()
	{
		$this->load->view('closed');
	}

	public function winner()
	{
		$this->load->view('winner');
	}

	// public function insert_score() {


	// 	$score = $this->input->post('score');
	// 	$que_no = $this->input->post('que_no');
	// 	$user_id = $this->session->userdata('users_data')->user_id;


	// 	// $this->db->where('user_id', $user_id);
	// 	// $user = $this->db->get('tbl_leaderboard');

	// 	$data = array(
	// 			'user_id' => $user_id,
	// 			'points' => $score,
	// 			'que_no' => $que_no,
	// 			'ip_address' => $_SERVER['REMOTE_ADDR'],
	// 		);

	// 	$this->db->insert('tbl_leaderboard', $data);

	// 	// if ($user->num_rows() > 0) {
	// 	// 	$this->db->where('user_id', $user_id);
	// 	// 	$this->db->update('tbl_leaderboard', $data);
	// 	// } else {
	// 	// }

 //    	$arr = array(
 //    		'status' => 'success',
 //    	);

 //    	echo json_encode($arr);
	// }

	public function old_insert_score() {

		$created_date = Date('Y/m/d h:i:s');

		$ipaddress = '';

	    if (getenv('HTTP_CLIENT_IP'))
	        $ipaddress = getenv('HTTP_CLIENT_IP');
	    else if(getenv('HTTP_X_FORWARDED_FOR'))
	        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
	    else if(getenv('HTTP_X_FORWARDED'))
	        $ipaddress = getenv('HTTP_X_FORWARDED');
	    else if(getenv('HTTP_FORWARDED_FOR'))
	        $ipaddress = getenv('HTTP_FORWARDED_FOR');
	    else if(getenv('HTTP_FORWARDED'))
	       $ipaddress = getenv('HTTP_FORWARDED');
	    else if(getenv('REMOTE_ADDR'))
	        $ipaddress = getenv('REMOTE_ADDR');
	    else
	        $ipaddress = 'UNKNOWN';

		$questionanswerList = array(

			 "1" => "2",
			 "2" => "1",
			 "3" => "1",
			 "4" => "1",
			 "5" => "3",
			 "6" => "4",
			 "7" => "2",
			 "8" => "1",
			 "9" => "2",
			"10" => "1",
			"11" => "1",
			"12" => "2",
			"13" => "1",
			"14" => "4",
			"15" => "1",
			"16" => "3",
			"17" => "3",
			"18" => "4",
			"19" => "4",
			"20" => "4",
			"21" => "3",
			"22" => "3",
			"23" => "4",
			"24" => "1",
			"25" => "2",
			"26" => "1",
			"27" => "2",
			"28" => "3",
			"29" => "1",
			"30" => "1",
			"31" => "1",
			"32" => "3",
			"33" => "1",
			"34" => "2",
			"35" => "1",
			"36" => "1",
			"37" => "3",
			"38" => "3",
			"39" => "2",
			"40" => "2",
			"41" => "4",
			"42" => "1",
			"43" => "3",
			"44" => "4",
			"45" => "2",
			"46" => "1",
			"47" => "2",
			"48" => "3",
			"49" => "4",

		);

		$user_id = $this->session->userdata('users_data')->user_id;

		// $user_id = $this->input->post('user_id');

		$questionNumber = $this->input->post('id');
		$answer = $this->input->post('val');


		$sql = "SELECT  `id` ,  `user_id` , `points`,  `que_no` ,  `ip_address` ,  `created_date` 
				FROM  `tbl_leaderboard` 
				WHERE  `user_id` = '$user_id' order by `points` desc limit 1";


		$query = $this->db->query($sql);


		// if($query->num_rows() > 0){
		// 		echo "true";
		// }else{
		// 		echo "false";
		// }
		// exit();


		if($questionanswerList[$questionNumber] == $answer){

			if ($query->num_rows() > 0) {

				$points = $query->row()->points;
				$points += 10;

				$sql = "UPDATE `tbl_leaderboard` SET `que_no`= '$questionNumber', `created_date`= '$created_date',  `ip_address`= '$ipaddress', `points`= '$points' WHERE `user_id` = ".$user_id;

				$query = $this->db->query($sql);

		    	$arr = array(
		    		'status' => 'success',
		    	);

		    	echo json_encode($arr);

			} else {


				$points = 10;

				$sql = "INSERT INTO `tbl_leaderboard`(`user_id`, `points`,`ip_address`,`que_no`,`created_date`) VALUES ('$user_id','$points','$ipaddress','$questionNumber','$created_date')";

				$query = $this->db->query($sql);

		    	$arr = array(
		    		'status' => 'success',
		    	);

		    	echo json_encode($arr);
			}


			$sql = "INSERT INTO `tbl_demo_leaderboard`(`user_id`, `ip_address`, `que_no`, `ans`, `status`, `points`,`created_date`) VALUES ('$user_id','$ipaddress','$questionNumber','$answer','correct','$points','$created_date')";

			$query = $this->db->query($sql);


		}else{

			if ($query->num_rows() > 0) {

				$points = $query->row()->points;

				if ($points > 0) {
					$points = $points-10;
				}

				$sql = "UPDATE `tbl_leaderboard` SET `que_no`= '$questionNumber', `created_date`= '$created_date',  `ip_address`= '$ipaddress', `points`= '$points' WHERE `user_id` = ".$user_id;

				$query = $this->db->query($sql);

		    	$arr = array(
		    		'status' => 'failed',
		    		'msg' => 'incorrect',
		    	);

		    	echo json_encode($arr);

			} else {


				$points = 0;

				$sql = "INSERT INTO `tbl_leaderboard`(`user_id`, `points`,`ip_address`,`que_no`,`created_date`) VALUES ('$user_id','$points','$ipaddress','$questionNumber','$created_date')";

				$query = $this->db->query($sql);

		    	$arr = array(
		    		'status' => 'failed',
		    		'msg' => 'incorrect',

		    	);

		    	echo json_encode($arr);
			}


			$sql = "INSERT INTO `tbl_demo_leaderboard`(`user_id`, `ip_address`, `que_no`, `ans`, `status`, `points`,`created_date`) VALUES ('$user_id','$ipaddress','$questionNumber','$answer','incorrect','$points','$created_date')";

			$query = $this->db->query($sql);

		}

	}
	
	public function old_get_ip(){
		print_r($_SERVER['REMOTE_ADDR']);
		echo date('Y-m-d h:i:s');
	}
}
