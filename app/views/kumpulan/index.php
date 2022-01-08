

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<div class="row">
  <div class="col-md-2 bg-light">
    <ul class="list-group-flush p-2 pt-4">
        <li class="list-group-item bg-success">
            <span class="icon">
                <ion-icon name="list-outline"></ion-icon>
            </span> Kategori Produk</li>
        <li class="list-group-item active">Semua Produk</li>
        <li class="list-group-item">Diskon</li>
        <li class="list-group-item">Populer</li>
        <li class="list-group-item">Benih Tanaman</li>
        <li class="list-group-item">Obat Tanaman</li>
        <li class="list-group-item">Alat Pertanian</li>
        <li class="list-group-item">Pertukangan</li>
    </ul>

</div>

<div class="col-md-10">

<div class="row">

        <?php foreach ($data['brg'] as $brg) : ?>
            <div class="card" style="width: 20rem;">
                <img src="<?= BASEURL; ?>/img/perkakas/<?=$brg['gambar']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4>Rp. <?=$brg['harga']; ?></h4>
                    <h5 class="card-title"><?=$brg['judul'] ;?></h5>
                    <p class="card-text"><?=$brg['detail']; ?> </p>
                    <a href="<?= BASEURL;?>/home/beli/<?= $brg['no'];?>" class="btn btn-warning">Beli</a>
                </div>
            </div>
            
        <?php endforeach; ?>

    </div>
</div>


