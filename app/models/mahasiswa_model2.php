<?php

class mahasiswa_model2 {

    private $table = 'barang2';

    private $db;

    public function __construct()
    {
        $this->db =new database;
    }

    

    public function getAllMahasiswa(){
         
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    
    }



   public function tambahDataMahasiswa($data){
       $query = "INSERT INTO barang2
                    VALUES
                    ('', :nama, :nim, :email, :jurusan)";

     $this->db->query($query);

     $this->db->bind('gambar', $data['gambar']);
     $this->db->bind('harga', $data['harga']);
     $this->db->bind('judl', $data['judul']);
     $this->db->bind('detai', $data['detail']);

     $this->db->execute();

     return $this->db->rowCount();
   }

   public function hapusDataMahasiswa($no){
       $query = "DELETE FROM barang2 WHERE no = :no";
       $this->db->query($query);
       $this->db->bind('no', $no);

       $this->db->execute();

       return $this->db->rowCount();


   }

   public function getDataUbah($no){
       $this->db->query('SELECT * FROM ' . $this->table . ' WHERE no=:no');
       $this->db->bind('no', $no);
       return $this->db->singel();

   }

    public function ubahDataMahasiswa($data){
        $query = "UPDATE barang2  SET
                gambar = :gambar,
                harga = :harga,
                judul = :judul,
                detail = :detail
                WHERE no=:no"; 

     $this->db->query($query);

     $this->db->bind('gambar', $data['gambar']);
     $this->db->bind('harga', $data['harga']);
     $this->db->bind('judul', $data['judul']);
     $this->db->bind('detai', $data['detail']);
     $this->db->bind('no', $data['no']);

     $this->db->execute();

     return $this->db->rowCount();

    }

    public function getBrgByNo($no){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE no=:no');
        $this->db->bind('no', $no);
        return $this->db->singel();
    }

}

