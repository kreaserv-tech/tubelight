<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

	function __construct()
	{
		parent::__construct();		
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin())
		{	
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function index()
	{
		$this->load->view('admin/dashboard');
	}

	function _example_output($output = null)
	{
		$this->load->view('admin/dashboard',$output);    
	}
	 
	// function users()
	// {
	// 	$output = $this->grocery_crud->render();
	// 	$this->_example_output($output);

	// }

	function users()
	{
		$sql = "SELECT * FROM `tbl_user` WHERE 1";
		$query = $this->db->query($sql);
		$row['user'] = $query->result();
		$this->_example_output($row);


	}

	function leaderboard()
	{

		$sql = "SELECT f.`user_id`, f.`username`, f.`profile`, max(s.`points`) as points FROM `tbl_user` f join `tbl_leaderboard` s on f.`user_id` = s.`user_id` group by f.`social_id` order by max(s.`points`) desc";
		
		$query = $this->db->query($sql);
		$row['leaderboard'] = $query->result();
		$this->_example_output($row);

	}

}
