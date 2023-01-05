<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
        $this->load->model('M_data');
        $data = array(
			'jumlahpengaduan' => $this->M_data->jumlahpengaduan(),
			'jumlahpengktp' => $this->M_data->jumlahpengktp(),
			'jumlahpengkk' => $this->M_data->jumlahpengkk(),
			'jumlahpengakte' => $this->M_data->jumlahpengakte(),
			'jumlahpenglain' => $this->M_data->jumlahpenglain(),
        );

		$this->load->view('home/index', $data);
	}
}