<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class superadmin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('message', 'swal("Ops!", "Anda harus login sebagai superadmin", "warning");');
            redirect('auth');
        }
    }

	public function index()
	{
        $this->load->model('M_data');
        $data = array(
			'jumlahpengaduan' => $this->M_data->jumlahpengaduan(),
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
		$this->load->view('superadmin/index');
		$this->load->view('template/footer');
		$this->load->view('template/js');
	}

    public function akun()
    {
        $this->load->model('M_data');
        $data = array(
            'alluser' => $this->M_data->user12(),
        );

        $data['page_title'] = 'Akun Admin dan Pimpinan';
        $data['title'] = 'DISDUKCAPIL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('superadmin/akun/index', $data);
        $this->load->view('template/footer');
        $this->load->view('template/js');
    }

    public function akunuser()
    {
        $this->load->model('M_data');
        $data = array(
            'alluser' => $this->M_data->user3(),
        );

        $data['page_title'] = 'Akun User';
        $data['title'] = 'DISDUKCAPIL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('superadmin/akun/akunuser', $data);
        $this->load->view('template/footer');
        $this->load->view('template/js');
    }

    public function add_akun()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['page_title'] = 'Tambah Akun';
            $data['title'] = 'DISDUKCAPIL';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template/meta', $data);
            $this->load->view('template/navbar');
            $this->load->view('template/sidebar');
            $this->load->view('superadmin/akun/add', $data);
            $this->load->view('template/footer');
            $this->load->view('template/js');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'nik' => htmlspecialchars($this->input->post('nik', true)),
                'contact' => htmlspecialchars($this->input->post('contact', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => htmlspecialchars($this->input->post('role_id', true)),
                'is_active' => htmlspecialchars($this->input->post('is_active', true)),
                'image' => 'default.jpg'
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Registrasi berhasil");');
            redirect('superadmin/akun');
        }
    }

    public function edit_akun()
    {
        $input =  $this->input->get('id', TRUE);
        $this->load->model('M_data');
        $data = array(
            'edit' => $this->db->get_where('user', ['id' => $input])->row_array(),
        );

        $data['page_title'] = 'Edit Akun';
        $data['title'] = 'DISDUKCAPIL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('superadmin/akun/edit', $data);
        $this->load->view('template/footer');
        $this->load->view('template/js');
    }

    public function update_akun()
    {
        $p = $this->input->post();
        $data = [
            'id'               => $p['id'],
            'nama'                    => $p['nama'],
            'nik'                    => $p['nik'],
            'contact'                    => $p['contact'],
            'email'                    => $p['email'],
            'role_id'               => $p['role_id'],
            'is_active'              => $p['is_active'],
        ];

        $this->db->trans_start();
        $this->db->update('user', $data, ['id' => $p['id']]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "Data berhasil diupdated");');
        redirect('superadmin/akun');
    }

    public function delete_akun($id)
    {
        $this->db->trans_start();
        $this->db->delete('user', ['id' => $id]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "Data berhasil dihapus);');
        redirect('superadmin/akun');
    }

    public function pengaduan()
    {
        $this->load->model('M_data');
        $data = array(
            'allpengaduan' => $this->M_data->allpengaduan(),
        );

        $data['page_title'] = 'Data Pengaduan';
        $data['title'] = 'DISDUKCAPIL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('pengaduan/index', $data);
        $this->load->view('template/footer');
        $this->load->view('template/js');
    }

    public function update_pengaduan()
    {
        $p = $this->input->post();
        $data = [
            'id_pengaduan'               => $p['id_pengaduan'],
            's_pengaduan'                    => $p['s_pengaduan'],
            'reason'                    => $p['reason'],
        ];

        $this->db->trans_start();
        $this->db->update('pengaduan', $data, ['id_pengaduan' => $p['id_pengaduan']]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "data berhasil diupdated!");');
        redirect('superadmin/pengaduan');
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
        $this->session->set_flashdata('message', 'swal("Berhasil!", "Data berhasil dihapus);');
        redirect('superadmin/pengaduan');
    }

    public function report()
    {
        $this->load->model('M_data');
        $data = array(
            'allpengaduan' => $this->M_data->allpengaduan(),
        );

        $data['page_title'] = 'Panel Report Pengaduan';
        $data['title'] = 'DISDUKCAPIL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('pengaduan/report', $data);
        $this->load->view('template/footer');
        $this->load->view('template/js');
    }

    public function tbl1()
    {
        $this->load->model('M_data');
        $data = array(
            'allpengaduan' => $this->M_data->pengaduandalamproses(),
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
            'allpengaduan' => $this->M_data->pengaduanditanggapi(),
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
            'allpengaduan' => $this->M_data->pengaduanselesai(),
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