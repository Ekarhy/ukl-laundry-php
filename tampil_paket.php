<?php
    include "header.php"
?>
    <h3>Tampil paket</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
            <th>NO</th>
            <th>JENIS</th>
            <th>HARGA</th>
            <th>AKSI</th>
            </tr>
    </thead>
    <tbody>
        <?php 
            include "koneksi.php";
            $qry_paket=mysqli_query($conn,"select * from paket");
            $no=0;
            $duration = 0;
            while($data_paket=mysqli_fetch_array($qry_paket)){
                $duration +=50;
                $no++;?>
                <tr data-aos="fade-right" data-aos-delay="<?= $duration?>">
                <td><?=$no?></td><td><?=$data_paket['jenis']?></td>
                <td><?=$data_paket['harga']?></td>
                <td><a href="ubah_paket.php?id=<?=$data_paket['id_paket']?>" class="btn btn-success">Ubah</a> | <a href="hapus_paket.php?id=<?=$data_paket['id_paket']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>

                </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <a href="tambah_paket.php" class="btn btn-secondary">Add</a>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<?php
   include "footer.php"
?>