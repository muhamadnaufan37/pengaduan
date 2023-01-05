<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('message', 'swal("Ops!", "Anda harus login sebagai Admin", "warning");');
            redirect('auth');
        }
    }

	public function index()
	{
        $this->load->model('M_data');
        $data = array(
			'jumlahpengaduan' => $this->M_data->jumlahpengaduan(),
			'jumlahpengktp' => $this->M_data->jumlahpengktp(),
			'jumlahpengkk' => $this->M_data->jumlahpengkk(),
			'jumlahpengakte' => $this->M_data->jumlahpengakte(),
			'jumlahpenglain' => $this->M_data->jumlahpenglain(),
			'jumlahall' => $this->M_data->jumlahall(),
			'jumlah0' => $this->M_data->jumlah0(),
			'jumlah1' => $this->M_data->jumlah1(),
			'jumlah2' => $this->M_data->jumlah2(),
        );

		$data['page_title'] = 'dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/meta', $data);
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/index');
		$this->load->view('template/footer');
		$this->load->view('template/js');
	}

    public function report()
    {
        $this->load->model('M_data');
        $data = array(
            'allpengaduan' => $this->M_data->allpengaduan(),
        );

        $data['page_title'] = 'Report Pengaduan';
        $data['title'] = 'DISDUKCAPIL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('pengaduan/report', $data);
        $this->load->view('template/footer');
        $this->load->view('template/js');
    }
}