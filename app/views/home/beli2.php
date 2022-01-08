<div class="container">

    <div class="card" style="width: 25rem;">
        <img src="<?= BASEURL; ?>/img/rumah/<?=$data['rum']['gambar']; ?>" class="card-img-top" alt="..." >
        <div class="card-body">
            <h4>Rp. <?=$data['rum']['harga']; ?></h4>
            <h5 class="card-title"><?=$data['rum']['judul'] ;?></h5>
            <p class="card-text"><?=$data['rum']['detail']; ?> </p>
            <a href="" class="btn btn-warning">Beli</a>
        </div>
    </div>

    <div class="col-md-8">
    <div class="row">
        
            <label for="jumlah">Jumlah</label>
            <input type="number" class="form-control" id="jml" name="jml" placeholder="">
            <label for="nama">alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="">
            <label for="nama">Catatan</label>
            <input type="text" class="form-control" id="catat" name="catat" placeholder="">
            <label for="ekspedisi">Ekspedisi </label>
            <select name="ekspedisi" id="">
                <option value="JNE">Grab</option>
                <option value="TIKI">Gojek</option>
                <option value="JNT">Uber</option>
            </select> </br>
            
        </div>
            
    </div>
        <button type="submit" class="btn btn-primary mt-2">Beli</button>
        <a href="<?= BASEURL;?>" class="btn btn-danger mt-2">Batalkan</a>
</div>
