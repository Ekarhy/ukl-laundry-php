<?php 
    session_start();
    include "koneksi.php";
    $cart=@$_SESSION['cart'];
    if(count($cart)>0){
        $status='baru';
        $pembayaran='belum dibayar';
        $lama_laundry=3; //satuan hari
        $tgl_selesai=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')+$lama_laundry),date('Y')));
        mysqli_query($conn,"insert into transaksi
        (id_member,tanggal,batas_waktu,status,dibayar)
        value('".$_SESSION['id']."','".date('Y-m-d')."','".$tgl_selesai."','".$status."','".$pembayaran."')");
        $id=mysqli_insert_id($conn);
        foreach ($cart as $key_paket => $val_paket) {
            $subtotal=$val_paket['qty'] * $val_paket['harga'];
            mysqli_query($conn,"insert into detail_transaksi (id_transaksi,id_paket,qty,total) value('".$id."','".$val_paket['id_paket']."','".$val_paket['qty']."','".$total."')");
        }
        unset($_SESSION['cart']);
        echo '<script>alert("Anda berhasil checkout");location.href="histori_transaksi.php"</script>';
    }
?>

<?php 
    // session_start();
    // include "perpus_native.php";
    // $cart=@$_SESSION['cart'];
    // if(count($cart)>0){
    //     $lama_pinjam=5; //satuan hari
    //     $tgl_harus_kembali=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')+$lama_pinjam),date('Y')));
    //     mysqli_query($conn,"insert into peminjaman_buku (id_siswa,tanggal_pinjam,tanggal_kembali) 
    //     value('".$_SESSION['id_siswa']."','".date('Y-m-d')."','".$tgl_harus_kembali."')");
    //         $id=mysqli_insert_id($conn);

    //     foreach ($cart as $key_produk => $val_produk) {
    //         mysqli_query($conn,"insert into detail_peminjaman_buku (id_peminjaman_buku,id_buku,qty) 
    //         value('".$id."','".$val_produk['id_buku']."','".$val_produk['qty']."')");
    //     }
    //     unset($_SESSION['cart']);
    //     echo '<script>alert("Anda berhasil meminjam buku");location.href="history_peminjaman.php"</script>';
    // }
?>
