<?php

class Main extends CI_Controller
{
    public function tampilMahasiswa() {
        $this->load->model('mainModel');
        $data['title'] = "Tampil Mahasiswa";
        $data['list']  = $this->mainModel->listAnggota()->result();
        $this->load->view("tampilMahasiswa", $data);
    }

    public function tambahMahasiswa() {
        $this->load->model('mainModel');
        $data['title'] = "Tambah Mahasiswa";
        $data['listKelas'] = $this->mainModel->listKelas()->result();
        $this->load->view("tambahMahasiswa", $data);
    }

    public function inputMahasiswa() {
        $data = array(
            "nama_mahasiswa" => $this->input->post('nama_mahasiswa'),
            "alamat"         => $this->input->post('alamat'),
            "jenis_kelamin"  => $this->input->post('jenis_kelamin'),
            "id_kelas"       => $this->input->post('kelas')
        );

        $this->db->insert('mahasiswa', $data);
		redirect('main/tampilMahasiswa');
    }

    public function editMahasiswa($id_mahasiswa) {
        $this->load->model('mainModel');
        $where = array(
			'id_mahasiswa' => $id_mahasiswa
            );
            $data['title'] = "Edit Mahasiswa";
        $data['mahasiswa'] = $this->mainModel->editMahasiswa($where, 'mahasiswa')->row_array();
        $data['kelas']     = $this->db->get('kelas')->result();
        $this->load->view("editMahasiswa", $data);
    }

    public function updateMahasiswa() {
        $this->load->model('mainModel');
        $data = array(
            "nama_mahasiswa" => $this->input->post('nama_mahasiswa'),
            "alamat"         => $this->input->post('alamat'),
            "jenis_kelamin"  => $this->input->post('jenis_kelamin'),
            "id_kelas"       => $this->input->post('kelas')
        );
        $where = array(
			'id_mahasiswa' => $this->input->post('id_mahasiswa')
            );
        
            $this->mainModel->updateMahasiswa($where, $data, 'mahasiswa');
            redirect('main/tampilMahasiswa');
    }

    public function hapusMahasiswa($id_mahasiswa) {
		$this->load->model('mainModel');
		$where = array(
			'id_mahasiswa' => $id_mahasiswa
			);
		$this->mainModel->hapusMahasiswa($where, 'mahasiswa');
		redirect('main/tampilMahasiswa');
    }

    public function tampilKelas() {
        $this->load->model('mainModel');
        $data['title'] = "Daftar Kelas";
        $data['list']  = $this->mainModel->listKelas()->result();
        $this->load->view("tampilKelas", $data);
    }

    public function daftarKelas($id_kelas) {
        $where = array(
			'id_kelas' => $id_kelas
            );
        $this->load->model('mainModel');
        $data['title'] = "Rincian Kelas";
        $data['kelas'] = $this->mainModel->daftarKelas($where, 'kelas')->row_array();
        $data['dosen'] = $this->mainModel->daftarDosen($where, 'dosen')->row_array();
        $data['matakuliah'] = $this->mainModel->daftarMatakuliah($where, 'matakuliah')->row_array();
        $data['mahasiswa'] = $this->mainModel->daftarMahasiswa($where)->result();
        $this->load->view("tampilDaftar", $data);
    }
}


?>