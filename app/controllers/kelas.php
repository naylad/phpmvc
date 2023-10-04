<?php 

class Kelas extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Kelas';
        $data['kelas'] = $this->model('Kelas_model')->getAllKelas();
        $this->view('templates/header', $data);
        $this->view('kelas/index', $data);
        $this->view('templates/footer');
    }


    public function detail($id)
    {
        $data['judul'] = 'Detail Kelas';
        $data['kelas'] = $this->model('Kelas_model')->getKelasById($id);
        $this->view('templates/header', $data);
        $this->view('kelas/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
       if( $this->model('Kelas_model')->tambahDataKelas($_POST) > 0 ) {
        header('Location: ' . BASEURL . '/kelas');
        exit;
       }
    }


}