<?php 
include "header.php"
?>
<!-- <a href="tambah_user.php" class="btn btn-secondary">Add</a> -->
    <h3 style="text-align: center;">User</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
 <th>NO</th><th>NAMA</th><th>USERNAME</th>
    <!-- <th>PASSWORD -->
    </th><th>ROLE</th>
    <th>AKSI</th>
            </tr>
    </thead>
    <tbody>
            <?php 
            include "koneksi.php";
            $qry_user=mysqli_query($conn,"select * from user");
            $no=0;
            while($data_user=mysqli_fetch_array($qry_user)){
            $no++;?>
<tr>
    <td><?=$no?></td><td><?=$data_user['nama']?></td>
    <td><?=$data_user['username']?></td>
    <!-- <td><?=$data_user['password']?></td> -->
    <td><?=$data_user['role']?></td>
    
 <td>
    <a href="ubah_user.php?id_user=<?=$data_user['id']?>" class="btn btn-success">Ubah</a> |
    <a href="hapus.php?id=<?=$data_user['id']?>" name="id" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>

            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <a href="tambah_user.php" class="btn btn-secondary">Add</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
