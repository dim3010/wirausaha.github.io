<?php

class Home extends Controller{
    public function index(){
       
       
       $data['judul']= 'home';
       $data['brg']= $this->model('mahasiswa_model')->getAllMahasiswa();
       $data['rum']= $this->model('mahasiswa_model2')->getAllMahasiswa();
       $this ->view('templates/header', $data);
       $this ->view('home/index', $data);
       $this ->view('templates/footer');
    }

    public function beli($no){
        $data['judul']= 'beli';
       $data['brg']= $this->model('mahasiswa_model')->getBrgByNo($no);
       $this ->view('templates/header', $data);
       $this ->view('home/beli', $data);
       $this ->view('templates/footer');
    }

    public function beli2($no){
        $data['judul']= 'beli';
        $data['rum']= $this->model('mahasiswa_model2')-> getBrgByNo($no);
       $this ->view('templates/header', $data);
       $this ->view('home/beli2', $data);
       $this ->view('templates/footer');
    }
}