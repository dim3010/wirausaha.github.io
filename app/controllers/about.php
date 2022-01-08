<?php


class About extends Controller {

    
    
    public function index($nama = 'damas', $pekerjaan = 'mahasiswa', $umur = "20"){
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur']=$umur;
        $data['judul']= 'about me';
        $this->view('templates/header', $data);
        $this->view('about/index',$data);
        $this->view('templates/footer');
    }

    public function Page(){
        $data['judul']= 'page';
        $this->view('templates/header',$data);
        $this->view('about/Page');
        $this->view('templates/footer');
    }

}