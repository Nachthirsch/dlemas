<?php
class Siswa_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert() {
        $data = array(
            'nama_siswa' => $this->input->post('nama_siswa'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama')
        );


        $this->db->insert('siswa', $data);
    }

        public function get_all() {
            return $this->db->get('siswa')->result_array();
        }
    
        public function delete($id) {
           return $this->db->delete('siswa', array('id' => $id));
        }

        public function update($id, $data) {
            $this->db->where('id', $id);
            return $this->db->update('siswa', $data);
        }



        public function get_by_id($id) {
            return $this->db->get_where('siswa', array('id' => $id))->row_array();
        }
    }



