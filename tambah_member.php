<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah member</h3>
    <form action="proses_tambah_member.php" method="post">
        Nama  :
        <input type="text" name="nama" value="" class="form-control">
        Alamat  : 
        <input type="text" name="alamat" value="" class="form-control">
        jenis_kelamin
        <select name="jenis_kelamin" value="" class="form-control">
            <option></option>
            <option value="laki-laki">laki-laki</option>
            <option value="perempuan">perempuan</option><br>
        telp :
        <input type="text" name="telp" value="" class="form-control">

        
        <input type="submit" name="simpan" value="Tambah member" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>