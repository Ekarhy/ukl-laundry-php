<?php 
    include "header.php";
?>
<br></br>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h1>KERANJANG</h1>
        <!-- <form method="POST" action="keranjang.php" class="d-flex">
        </form>   -->
      </div>
      <div class="card-body">
        <table class="table">
    <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama Member</th>
            <th scope="col">Paket</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach (@$_SESSION['cart'] as $key_paket => $val_paket): ?>
            <tr>
                <td><?=($key_paket+1)?></td>
                <td><?=$val_paket['nama']?></td>
                <td><?=$val_paket['paket']?></td>
                <td><?=$val_paket['qty']?></td>
                <td><a href="hapus_cart.php?id=<?=$key_paket?>" class="btn btn-danger">
                <strong>X</strong></a></td>
            </tr>

        <?php endforeach ?>
    </tbody>
</table>
<a href="transaksi.php" class="btn btn-primary">Tambah</a>
<a href="checkout.php" class="btn btn-success">Check Out</a>
<?php 
    include "footer.php";
?>