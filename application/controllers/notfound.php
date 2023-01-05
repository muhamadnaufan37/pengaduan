<?php
defined('BASEPATH') or exit('No direct script access allowed');

class notfound extends CI_Controller
{
	function index()
	{
		$data['page_title'] = 'Not Found';
		$this->load->view('404', $data);
	}
}