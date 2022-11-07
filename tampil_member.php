<?php
    include "header.php"
?>
    <h3>Tampil member</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
 <th>NO</th><th>NAMA</th><th>ALAMAT</th>
    <th>JENIS KELAMIN</th><th>TELP</th>
    <th>AKSI</th>
            </tr>
    </thead>
    <tbody>
            <?php 
            include "koneksi.php";
            $qry_member=mysqli_query($conn,"select * from member");
            $no=0;
            $duration = 0;
            while($data_member=mysqli_fetch_array($qry_member)){
            $duration +=50;
            $no++;?>
<tr data-aos="fade-right" data-aos-delay="<?= $duration?>">
    <td><?=$no?></td><td><?=$data_member['nama']?></td>
    <td><?=$data_member['alamat']?></td>
    <td><?=$data_member['jenis_kelamin']?></td>
    <td><?=$data_member['telp']?></td>
    
 <td><a href="ubah_member.php?id=<?=$data_member['id']?>" class="btn btn-success">Ubah</a> | <a href="hapus_member.php?id=<?=$data_member['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>

            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <a href="tambah_member.php" class="btn btn-secondary">Add</a>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<?php
   include "footer.php"
?>