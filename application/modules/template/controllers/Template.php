<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Template extends MX_Controller
{
	function __construct() {
		parent::__construct();
	}
	
	public function commonHeader()
	{
		$this->load->view('template/common-header');
	}
	public function adminHeader()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
	}
	public function footer()
	{
		$this->load->view('template/footer');
	}
	public function commonFooter()
	{
		$this->load->view('template/common-footer');
	}
}