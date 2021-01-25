<?php
    include_once("conection.php");

    $id = $_GET['id'];
    $status = '';
    $sql = "DELETE FROM barang WHERE id_barang = $id";
    $result = mysqli_query($conn,$sql);

    if ($result) {
        # code...
        $status = "Sukses di hapus";
        // header("Location: index.php?");
    }else{
        $status = "Hapus data gagal :".mysqli_error($conn);
    }


    echo $status
?>
<br><br>
<a href="index.php">Kembali</a>