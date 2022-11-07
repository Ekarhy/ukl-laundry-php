<?php 
    include "header.php";
    include "koneksi.php";
?>
<br></br>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h1>TRANSAKSI</h1>
    <div class="row">
    <div class="col-md-8">
        <form action="masukkan_keranjang.php" method="post">
            <table class="table table-hover table-striped">
            
                <thead>
                    <tr>
                        <td>Paket</td><td>
                        <select name="jenis" class="form-control">
                        <option></option>
                        <option value="kiloan">Kiloan</option>
                        <option value="selimut">Selimut</option>
                        <option value="bed_cover">Bed-cover</option>
                        <option value="kaos">Kaos</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Paket</td><td><input type="number" name="qty" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="Tambah"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
<?php 
    include "footer.php";
?>
</body>
</html>
