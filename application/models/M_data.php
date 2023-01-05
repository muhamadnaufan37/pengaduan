<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_data extends CI_Model
{

    function alluser()
    {
        $this->db->select('*');
        $this->db->from('user');
        return $this->db->get()->result_array();
    }
	
	function user12()
	{
		$this->db->select('*');
		$this->db->from('user');
		$role= array('1', '2');
		$this->db->where_in('role_id', $role);
        return $this->db->get()->result_array();
	}

    function user3()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_id', '3');
        return $this->db->get()->result_array();
    }

    function allpengaduan()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        return $this->db->get()->result_array();
    }

    function jumlahpengaduan()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        return $this->db->get()->num_rows();
    }

    function jumlahall()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->where('s_pengaduan');
        return $this->db->get()->num_rows();
    }

    function jumlah0()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->where('s_pengaduan', '0');
        return $this->db->get()->num_rows();
    }

    function jumlah1()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->where('s_pengaduan', '1');
        return $this->db->get()->num_rows();
    }

    function jumlah2()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->where('s_pengaduan', '2');
        return $this->db->get()->num_rows();
    }

    function allpengaduanuser()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->where('id_user', $this->session->userdata('id'));
        return $this->db->get()->result_array();
    }

    function jumlahalluser()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->where('id_user', $this->session->userdata('id'));
        return $this->db->get()->num_rows();
    }

    function jumlah0user()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->where('s_pengaduan', '0', $this->session->userdata('id'));
        return $this->db->get()->num_rows();
    }

    function jumlah1user()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->where('s_pengaduan', '1', $this->session->userdata('id'));
        return $this->db->get()->num_rows();
    }

    function jumlah2user()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->where('s_pengaduan', '2', $this->session->userdata('id'));
        return $this->db->get()->num_rows();
    }

    function jumlahpengktp()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->where('jenis_pengaduan', 'E-KTP');
        return $this->db->get()->num_rows();
    }

    function jumlahpengkk()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->where('jenis_pengaduan', 'KARTU KELUARGA');
        return $this->db->get()->num_rows();
    }

    function jumlahpengakte()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->where('jenis_pengaduan', 'AKTA KELAHIRAN');
        return $this->db->get()->num_rows();
    }

    function jumlahpenglain()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->where('jenis_pengaduan', 'LAINNYA');
        return $this->db->get()->num_rows();
    }

    function pengaduandalamproses()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->where('s_pengaduan', '0');
        return $this->db->get()->result_array();
    }

    function pengaduanditanggapi()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->where('s_pengaduan', '1');
        return $this->db->get()->result_array();
    }

    function pengaduanselesai()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->where('s_pengaduan', '2');
        return $this->db->get()->result_array();
    }

    function hari($hari)
    {

        switch ($hari) {
            case 'Sun':
                $hari_ini = "Minggu";
                break;

            case 'Mon':
                $hari_ini = "Senin";
                break;

            case 'Tue':
                $hari_ini = "Selasa";
                break;

            case 'Wed':
                $hari_ini = "Rabu";
                break;

            case 'Thu':
                $hari_ini = "Kamis";
                break;

            case 'Fri':
                $hari_ini = "Jumat";
                break;

            case 'Sat':
                $hari_ini = "Sabtu";
                break;

            default:
                $hari_ini = "Tidak di ketahui";
                break;
        }

        return $hari_ini;
    }

    function bulan($bulan)
    {

        switch ($bulan) {
            case '1':
                $bulan_ini = "I";
                break;

            case '2':
                $bulan_ini = "II";
                break;

            case '3':
                $bulan_ini = "III";
                break;

            case '4':
                $bulan_ini = "IV";
                break;

            case '5':
                $bulan_ini = "V";
                break;

            case '6':
                $bulan_ini = "VI";
                break;

            case '7':
                $bulan_ini = "VII";
                break;

            case '8':
                $bulan_ini = "VIII";
                break;

            case '9':
                $bulan_ini = "IX";
                break;

            case '10':
                $bulan_ini = "X";
                break;

            case '11':
                $bulan_ini = "XI";
                break;

            case '12':
                $bulan_ini = "XII";
                break;

            default:
                $bulan_ini = "Tidak di ketahui";
                break;
        }

        return $bulan_ini;
    }

    function tgl_indo($tanggal)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);

        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun

        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    }
}
