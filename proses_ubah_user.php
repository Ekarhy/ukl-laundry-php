<?php
if($_POST){
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $telp=$_POST['telp'];
    $id=$_POST['id'];
    if(empty($nama)){
        echo "<script>alert('nama user tidak boleh kosong');location.href='tambah.php';</script>";

    } elseif(empaty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($jenis_kelamin)){
            $update=mysqli_query($conn,"update user set nama='".$nama."',alamat='".$alamat."', jenis_kelamin='".$jenis_kelamin."', telp='".$telp."', id='".$id."' where id = '".$id."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update user');location.href='tampil.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah.php?id=".$id."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update user set nama='".$nama."',alamat='".$alamat."',jenis_kelamin='".($jenis_kelamin)."', telp='".$telp."', id='".$id."' where id = '".$id."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update user');location.href='tampil.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah.php?id=".$id."';</script>";
            }
        }
        
    } 
}
?>
