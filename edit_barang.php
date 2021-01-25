
<?php 

include_once('conection.php');

$id = $_GET['id'];
$status ='';
$sql = "SELECT * FROM barang WHERE id_barang = $id";
$barang = mysqli_query($conn,$sql);
$data = mysqli_fetch_object($barang);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $namabarang = $_POST['nb'];
    $imageurl = $_POST['gmbr'];
    $deskripsi = $_POST['dsc'];
    $link_toko = $_POST['lt'];




      $sql = "UPDATE barang SET nama_barang='$namabarang', gambar_link='$imageurl', deskripsi='$deskripsi', link_toko='$link_toko', kategori_barang='$data->kategori_barang' WHERE id_barang ='$id'";
      $result = mysqli_query($conn,$sql);

      if ($result) {

      header("Location: list_barang.php?id={$data->kategori_barang}");
      }else{
          $status = "Update data gagal :".mysqli_error($conn);
      }
    
    
    
   
}


?>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="assets/style2.css">

<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
<div class="container">
  <a class="navbar-brand text-white" href="#"><b>Let's ADS</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
 
      <li class="nav-item">
      <a class="nav-link text-white" href="list_barang.php?id=1">Laptop</a>
      </li>
      <li class="nav-item">
      <a class="nav-link text-white" href="list_barang.php?id=2">Smartphone</a>
      </li>
      <li class="nav-item">
      <a class="nav-link text-white" href="list_barang.php?id=3">Alat Desain</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="toko.php">Toko</a>
      </li>
   
    </ul>
  </div>
</div>
</nav>

<!-- Jumbotron -->
<div class="jumbotron">
</div>

<form class="p-5 ml-auto" style="width: 40%; margin-top:-725px" action="" method="post">
<div class="form-group">
  <label>Nama Barang</label>
  <?php
  echo $status
?>
  <input type="text" class="form-control" name="nb" value="<?=$data->nama_barang?> ">
</div>


        <div class="form-group">
          <label for="exampleFormControlInput1">Deskripsi</label>
          <textarea class="form-control" name="dsc"  rows="3" ><?=$data->deskripsi?></textarea>
        </div>
        <div class="form-group">
          <label >Link Toko</label>
          <input type="text" class="form-control" name="lt" value="<?=$data->link_toko?>" >

        </div>
        <div class="form-group">
          <label >URL Gambar</label>
          <input type="text" class="form-control" name="txt_image_url" value="<?=$data->gambar_link?>">
        </div>
        <div class="form-group">
        <label >Kategori tidak bisa dirubah</label>
        </div>
      <div>
        <input type="submit" class="btn btn-success" value="Simpan"><br>
     
    </div>
</form>
