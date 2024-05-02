<?php
class Siswa extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('siswa_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    
    public function index() {
        $data['menu'] = $this->siswa_model->get_all();
        $this->load->view('homepage', $data);
    }

    public function create() {
        $data['menu'] = $this->siswa_model->get_all();
        $this->load->view('input_siswa', $data);
    }

    public function input() {
        $this->siswa_model->insert($this->input->post());
        redirect('siswa/index');
    }

    public function store() {
        $data = array(
            'nama_siswa' => $this->input->post('nama_siswa'),
            'NIS' => $this->input->post('NIS'),
            'kelas' => $this->input->post('kelas'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama')
        );

        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('nis', 'nis', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('input_siswa');
        } else {
            $this->siswa_model->insert($data);
            redirect('siswa/hasil');
        }
    }

    public function edit($id) {
        $data['siswa'] = $this->siswa_model->get_by_id($id);
        $this->load->view('edit', $data);
    }

    public function update($id) {
        $this->siswa_model->update($id, $this->input->post());
        redirect('siswa/hasil');
    }

    public function delete($id) {
        $this->siswa_model->delete($id);
        redirect('siswa/hasil');
    }

    public function hasil() {
        $data['siswa'] = $this->siswa_model->get_all();
        $this->load->view('hasil', $data);
    }
}