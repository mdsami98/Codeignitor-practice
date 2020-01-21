<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}

	public function registerForm(){
		//load Model for queries
	$this->load->model('queries');
	//Calling queries function
	$loadRoles = $this->queries->getRoles();

	$this->load->view('register', [
		'loadRoles' =>$loadRoles,
	]);


	}

	public function store(){
		$this->form_validation->set_rules(
			'username', 'Username',
			'required|min_length[5]|max_length[12]',
			array(
				'required'      => 'You have not provided %s.',
				'is_unique'     => 'This %s already exists.'
			)
		);

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('role_id', 'Role Type', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if ($this->form_validation->run() == TRUE){
			$data = $this->input->post();

			$data['password'] = sha1($this->input->post('password'));
			$data['confirm_password'] = sha1($this->input->post('confirm_password'));

			//load Model for queries
			$this->load->model('queries');
			//Calling function

			if ($this->queries->registerAll($data)){

			}else{

			}



		} else {
			$this->registerForm();
		}



	}

}
