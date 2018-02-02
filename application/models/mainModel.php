<?php

class MainModel extends CI_Model
{
    public function listAnggota() {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('kelas', 'mahasiswa.id_kelas = kelas.id_kelas');
        $this->db->order_by('mahasiswa.id_mahasiswa', 'ASC');
        $data = $this->db->get();
        return $data;
    }

    public function listKelas() {
		$this->db->select('*');
		$this->db->from('kelas');
		$data = $this->db->get();
		return $data;
    }
    
    public function editMahasiswa($where, $table) {
		return $this->db->get_where($table, $where);
    }
    
    public function updateMahasiswa($where, $data, $tabel) {
        $this->db->where($where);
		$this->db->update($tabel, $data);
    }

    public function hapusMahasiswa($where, $table) {
		$this->db->where($where);
		$this->db->delete($table);
    }
    
    public function daftarKelas($where, $table) {
        return $this->db->get_where($table, $where);
    }

    public function daftarDosen($where, $table) {
        return $this->db->get_where($table, $where);
    }

    public function daftarMatakuliah($where, $table) {
        return $this->db->get_where($table, $where);
    }

    public function daftarMahasiswa($where) {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->where($where);
        $data = $this->db->get();
        return $data;
    }
}


?>