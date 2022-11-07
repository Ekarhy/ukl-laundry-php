<?php 
session_start();
    if($_POST){
        $id=$_SESSION['id'];
        $nama=$_SESSION['nama'];
        $paket=$_POST['jenis'];
        $qty=$_POST['qty'];
        include "koneksi.php";

        $qry_get_member=mysqli_query($conn,"select * from member where nama='".$nama."'");
        $dt_member=mysqli_fetch_array($qry_get_member);
        $qry_get_paket=mysqli_query($conn,"select * from paket where jenis='".$paket."'");
        $dt_paket=mysqli_fetch_array($qry_get_paket);
        

            $_SESSION['cart'][]=array(
                'id'=>$dt_member['id'],
                'nama'=>$dt_member['nama'],
                'id'=>$dt_paket['id'],
                'paket'=>$dt_paket['jenis'],
                'harga'=>$dt_paket['harga'],
                'qty'=>$qty
            );
        

        
    }
    header('location: keranjang.php');
?>