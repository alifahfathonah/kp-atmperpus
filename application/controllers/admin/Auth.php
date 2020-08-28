<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index()
	{
		$this->load->library('session');
		
		if($this->session->userdata('login') == TRUE){
            redirect('admin/dashboard_admin');
		}
		else{
			$this->load->view('admin/login');
		}
	}

	public function cobaLogin(){
		if($this->input->method(TRUE) == 'POST' && !empty($_POST)){
			$in['username'] = $this->input->post('username');
			$in['password'] = $this->input->post('password');

			$this->AuthModel->cek($in);
		} 
	}
}
