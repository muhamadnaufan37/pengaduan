<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('role_id') != '3') {
            $this->session->set_flashdata('message', 'swal("Ops!", "Anda harus login sebagai User", "warning");');
            redirect('auth');
        }
    }

	public function index()
	{
        $this->load->model('M_data');
        $data = array(
            'allpengaduan' => $this->M_data->allpengaduanuser(),
			'jumlahall' => $this->M_data->jumlahalluser(),
			'jumlah0' => $this->M_data->jumlah0user(),
			'jumlah1' => $this->M_data->jumlah1user(),
			'jumlah2' => $this->M_data->jumlah2user(),
        );

		$data['page_title'] = 'dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/meta', $data);
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar', $data);
		$this->load->view('user/index');
		$this->load->view('template/footer');
		$this->load->view('template/js');
	}

    public function pengaduan()
    {
        $this->load->model('M_data');
        $data = array(
            'allpengaduan' => $this->M_data->allpengaduanuser(),
        );

        $data['page_title'] = 'Panel Pengaduan';
        $data['title'] = 'DISDUKCAPIL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('pengaduan/index', $data);
        $this->load->view('template/footer');
        $this->load->view('template/js');
    }

    public function add_pengaduan()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('nik', 'nik', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['page_title'] = 'Panel Tambah Pengaduan';
            $data['title'] = 'DISDUKCAPIL';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template/meta', $data);
            $this->load->view('template/navbar');
            $this->load->view('template/sidebar');
            $this->load->view('pengaduan/add', $data);
            $this->load->view('template/footer');
            $this->load->view('template/js');
        } else {

            $this->load->library('upload');
            $dataInfo = array();
            $files = $_FILES;
            $cpt = count($_FILES['images']['name']);
            for($i=0; $i<$cpt; $i++)
            {           
                $_FILES['images']['name']= $files['images']['name'][$i];
                $_FILES['images']['type']= $files['images']['type'][$i];
                $_FILES['images']['tmp_name']= $files['images']['tmp_name'][$i];
                $_FILES['images']['error']= $files['images']['error'][$i];
                $_FILES['images']['size']= $files['images']['size'][$i];    

                $this->upload->initialize($this->set_upload_pic());
                $this->upload->do_upload('images');
                $dataInfo[] = $this->upload->data();
            }

            $data = [
                'image' => $dataInfo[0]['file_name'],
                'id_user' => htmlspecialchars($this->input->post('id_user', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'nik' => htmlspecialchars($this->input->post('nik', true)),
                'jenis_pengaduan' => htmlspecialchars($this->input->post('jenis_pengaduan', true)),
                'pengaduan' => htmlspecialchars($this->input->post('pengaduan', true))
            ];

            $this->db->insert('pengaduan', $data);
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Account has been created!", "success");');
            redirect('user/pengaduan');
        }
    }

    private function set_upload_pic()
    {
        //upload an image options
        $config = array();
        $config['upload_path'] = './assets/images/pengaduan/';
        $config['allowed_types'] = 'png|jpg';
        $config['max_size']      = '2048';
        $config['overwrite']     = FALSE;

        return $config;
    }

    public function edit_pengaduan()
    {
        $input =  $this->input->get('id_pengaduan', TRUE);
        $this->load->model('M_data');
        $data = array(
            'edit' => $this->db->get_where('pengaduan', ['id_pengaduan' => $input])->row_array(),
        );

        $data['page_title'] = 'Edit pengaduan';
        $data['title'] = 'DISDUKCAPIL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('pengaduan/edit', $data);
        $this->load->view('template/footer');
        $this->load->view('template/js');
    }

    public function delete_pengaduan($id_pengaduan)
    {
        $this->db->trans_start();
        $this->db->delete('pengaduan', ['id_pengaduan' => $id_pengaduan]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "Data has been deleted!", "success");');
        redirect('user');
    }

    public function tbl1()
    {
        $this->load->model('M_data');
        $data = array(
            'allpengaduan' => $this->M_data->allpengaduanuser(),
        );

        $data['page_title'] = 'Panel Pengaduan Dalam Proses';
        $data['title'] = 'DISDUKCAPIL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('pengaduan/index', $data);
        $this->load->view('template/footer');
        $this->load->view('template/js');
    }

    public function tbl2()
    {
        $this->load->model('M_data');
        $data = array(
            'allpengaduan' => $this->M_data->allpengaduanuser(),
        );

        $data['page_title'] = 'Panel Pengaduan Dalam Proses';
        $data['title'] = 'DISDUKCAPIL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('pengaduan/index', $data);
        $this->load->view('template/footer');
        $this->load->view('template/js');
    }

    public function tbl3()
    {
        $this->load->model('M_data');
        $data = array(
            'allpengaduan' => $this->M_data->allpengaduanuser(),
        );

        $data['page_title'] = 'Panel Pengaduan Dalam Proses';
        $data['title'] = 'DISDUKCAPIL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('pengaduan/index', $data);
        $this->load->view('template/footer');
        $this->load->view('template/js');
    }
}