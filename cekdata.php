<?php 
session_start();
    if($_POST){
        $nama=$_POST['nama'];
        include "koneksi.php";
        $qry_get_cek=mysqli_query($conn,"select * from member where nama='".$nama."'");
        if(mysqli_num_rows($qry_get_cek)>0){
            $dt_cek=mysqli_fetch_array($qry_get_cek);
        if($nama == $dt_cek['nama']){
            session_start();
            $_SESSION['id']=$dt_cek['id'];
            $_SESSION['nama']=$dt_cek['nama'];
            header('location: transaksi.php');
        }
    }else{
        echo "<script>alert('nama member tidak terdafatar');location.href='data.php';</script>";
    }

        
    }
?>