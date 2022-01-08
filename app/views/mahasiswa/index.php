<div class="container mt-5">

    <div>
      <div class="col-lg-6">
        <?php flasher::flash() ?>
      </div>
    </div>

    <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
    Tambah Barang
    </button>

        <div class="card mt-3">
            <div class="card-header bg-success text-white text-center">
                Daftar Barang
            </div>
            <div class="card-body">

                <table class="table table-bordered table-striped">
                    <tr>
                        <th>No</th>
                        <th>gambar</th>
                        <th>harga/th>
                        <th>judul</th>
                        <th>detail</th>
                        <th>Opsi</th>
                    </tr>
                     
                    <tr>
                    <?php foreach ($data['brg'] as $brg) : ?>
                        <tr>
                            <td><?=$brg['no'];?></td>
                            <td><img src="<?= BASEURL; ?>/img/perkakas/<?=$brg['gambar']; ?> " width="50"></td>
                            <td><?=$brg['harga']; ?> </td>
                            <td><?=$brg['judul'] ;?> </td>
                            <td><?=$brg['detail']; ?> </td>
                            <td> 
                                <a class=" btn btn-primary tampilModalUbah" href="<?= BASEURL; ?>/mahasiswa/ubah/<?=$brg['no'];?>" data-toggle="modal" data-target="#formModal" data-no="<?=$mhs['no'];?>"> Edit </a>  
                                <a class=" btn btn-danger" href="<?= BASEURL; ?>/mahasiswa/hapus/<?=$brg['no'];?>" onclick="return confirm('yakin');"> Hapus </a> 
                            </td> 

                        </tr>
                        
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
 
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" 
aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form action="#" method="post">
      <input type="hidden" name="no" id="no">
        
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="">
        </div>

        <div class="form-group">
          <label class="form-label" for="customFile">Pilih Gambar</label>
          <input type="file" class="form-control" id="customFile" />
        </div>
      

        <div class="form-group">
          <label for="nim">Harga</label>
          <input type="number" class="form-control" id="nim" name="nim" placeholder="">
        </div>

        <div class="form-group">
          <label for="detail">Detail</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="">
        </div>



        </div>
        <div class="modal-footer">
          <a href="<?= BASEURL ;?>" class="btn btn-primary">Tambah Barang</a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
          
      </form>
      </div>
    </div>
  </div>
</div>