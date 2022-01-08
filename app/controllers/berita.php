<?php


class Berita extends Controller{
    public function index(){
        $data['judul']= 'Berita';
        $data['rum']= $this->model('mahasiswa_model2')->getAllMahasiswa();
       $this->view('templates/header', $data);
       $this->view('berita/index', $data);
       $this->view('templates/footer');
    }

    public function beli(){
        $data['judul']= 'Berita';
        $data['rum']= $this->model('mahasiswa_model2')->getAllMahasiswa();
       $this->view('templates/header', $data);
       $this->view('berita/beli', $data);
       $this->view('templates/footer');
    }
}