<?php

class mobil extends Controller{
    public function index(){
        $data['judul']= 'Mobil';
       $this->view('templates/header', $data);
       $this->view('mobil/mobil');
       $this->view('templates/footer');
    }
}