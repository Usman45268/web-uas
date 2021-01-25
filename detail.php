<?php
  
        include_once('conection.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM barang WHERE id_barang = $id";
        $barang = mysqli_query($conn,$sql);
        $data = mysqli_fetch_object($barang);



?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link href="css/barang.css" rel="stylesheet">

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


<div class=" m-5 p-5">

    
        <img src=<?=$data->gambar_link?> class="img-fluid mb-2"  alt="Responsive image">
         <h2><?=$data->nama_barang?></h2>
         <p class="mt-5 mb-5"><?=$data->deskripsi?></p>
       
   
     
    
</div>


<div class="container">
<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
      
      <p>Support by : Freepik & Bootstrap
      </div>

    </div>
  </footer>
 </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js"></script>

</body>