<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot extends CI_Controller {

	public function forgot_password()
	{
		$this->load->view('staff-area/forgot-password');
	}

	public function otp()
	{
		$this->load->view('staff-area/otp');
	}

	public function reset_password()
	{
		$this->load->view('staff-area/reset-password');
	}
}
