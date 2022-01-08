<?php

class mahasiswa extends Controller{
    public function index(){

        $data['judul']= 'mahasiswa';
        $data['brg']= $this->model('mahasiswa_model')->getAllMahasiswa();
       $this->view('templates/header', $data);
       $this->view('mahasiswa/index', $data);
       $this->view('templates/footer'); 

    }

    public function tambah(){

        if ($this->model('mahasiswa_model')->tambahDataMahasiswa($_POST) >0){
            flasher::setFlash('berhasil','ditambahkan','success');
            header('Location: '. BASEURL . '/mahasiswa');
            exit;
        }else{
            flasher::setFlash('gagal', 'ditambahkan','danger');
            header('Location: '. BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function hapus($no){

        if ($this->model('mahasiswa_model')->hapusDataMahasiswa($no) >0){
            flasher::setFlash('berhasil','dihapus','success');
            header('Location: '. BASEURL . '/mahasiswa');
            exit;
        }else{
            flasher::setFlash('gagal','dihapus','danger');
            header('Location: '. BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function getUbah(){
       echo json_encode( $this->model('mahasiswa_model')->getDataUbah($_POST['no']));

    }

    public function ubah(){
        if ($this->model('mahasiswa_model')->ubahDataMahasiswa($_POST) >0){
            flasher::setFlash('berhasil','diubah','success');
            header('Location: '. BASEURL . '/mahasiswa');
            exit;
        }else{
            flasher::setFlash('gagal', 'diubah','danger');
            header('Location: '. BASEURL . '/mahasiswa');
            exit;
        }

    }

}