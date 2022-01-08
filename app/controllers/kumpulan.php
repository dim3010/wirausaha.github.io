<?php


class kumpulan extends Controller{
    
    public function index(){
        $data['judul']= 'kumpulan';
        $data['brg']=$this->model('mahasiswa_model')->getAllMahasiswa();
       $this->view('templates/header', $data);
       $this->view('kumpulan/index', $data);
       $this->view('templates/footer');
    }

    public function beli(){
        $data['judul']= 'beli';
       $data['brg']= $this->model('mahasiswa_model')->getAllMahasiswa();
       
       $this ->view('templates/header', $data);
       $this ->view('home/beli', $data);
       $this ->view('templates/footer');
    }
}