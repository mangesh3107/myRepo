<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vmmonitor extends CI_Controller {

	public function index()
	{
		$this->lang->load('vmm', $this->config->item('language'));
		$this->load->view('vmmonitor_home');
	}
}