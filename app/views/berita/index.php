

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<div class="row">
  <div class="col-md-2 bg-light">
    <ul class="list-group-flush p-2 pt-4">
        <li class="list-group-item bg-success">
        <span class="icon">
            <ion-icon name="list-outline"></ion-icon>
        </span>  
        Kategori Produk</li>
        <li class="list-group-item active">Semua Produk</li>
        <li class="list-group-item">Diskon</li>
        <li class="list-group-item">Sayur Segar</li>
        <li class="list-group-item">Siap Masak</li>
        <li class="list-group-item">Perabotan</li>
        <li class="list-group-item">Buah Segar</li>
        <li class="list-group-item">Peralatan Masak</li>
        
    </ul>

</div>

<div class="col-md-10">

    <div class="row">

        <?php foreach ($data['rum'] as $rum) : ?>
            <div class="card" style="width: 20rem;">
                <img src="<?= BASEURL; ?>/img/rumah/<?=$rum['gambar']; ?>" class="card-img-top" alt="..."> <br>
                <div class="card-body">
                    <h4>Rp. <?=$rum['harga']; ?></h4>
                    <h5 class="card-title"><?=$rum['judul'] ;?></h5>
                    <p class="card-text"><?=$rum['detail']; ?> </p>

                    <a href="<?= BASEURL;?>/home/beli2/<?= $rum['no'];?>" class="btn btn-warning">Beli</a>
                </div>
            </div>
            
        <?php endforeach; ?>

    </div>
</div>


