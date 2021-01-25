<?php
  
        include_once('conection.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM barang WHERE id_barang = $id";
        $barang = mysqli_query($conn,$sql);
        $data = mysqli_fetch_object($barang);



?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



<body style="background-color: #f6f6f6">
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


<div class=" mt-5 p-5">
        <img src=<?=$data->gambar_link?>  alt="Responsive image">
         <h2><?=$data->nama_barang?></h2>
         <p class="mt-3 mb-3"><?=$data->deskripsi?></p>   
</div>

<div class="container">
<footer class="pt-4 my-md-3 pt-md-3 border-top">
      <p>Support by : Freepik, Bootstrap
  </footer>
 </div>

</body>
