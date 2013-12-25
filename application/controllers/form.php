<?php
class Form extends CI_Controller
{
	public function _construct()
	{
		parent::_construct();
	}
	public function index()
	{
		$this->load->view('form_view');
	}
	public function process()
	{
		$this->load->view('success_view');
	}
}
?>