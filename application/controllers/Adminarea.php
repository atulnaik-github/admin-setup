<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminarea extends MY_Controller {

	public function index()
	{
		$this->adminBackend('adminarea/landing-page');
	}

	public function dashboard()
	{
		$this->adminBackend('adminarea/dashboard');
	}

	public function change_password()
	{
		$this->adminBackend('adminarea/change-password');
	}
}
