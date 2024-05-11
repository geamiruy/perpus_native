<?php
    include "haeder.php";
?>
<h2>Daftar Barang Pinjaman</h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>NO</th><th>Nama Buku</th><th>Jumlah</th><th>Aksi</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach(@$_SESSION[ 'cart' ] as $sky_produk => $val_produk): ?>
        <tr>
            <td><?=($key_produk+1)?></td><td><?=$val_produk['nama_buku']?></td><td><?=$val_produk['qyt']?></td><td><a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-denger"><strong>X</strong></a></td>
        </tr>

        <?php endforeach ?>
    </tbody>
</table>
<a href="checkout.php" class="btn btn-primary">Chek Out</a>
<?php
    include "footer.php";
?>