<?php

    include_once('conection.php');

    $sql = 'SELECT * FROM toko';
    $result = mysqli_query($conn, $sql)
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
<br></br>

<table class="table table-striped">
 
    <tr>
        <th>ID toko</th>
        <th>Nama toko</th>
        <th>Aksi</th>
    </tr>
    <?php while ($data = mysqli_fetch_object($result)){?> 
            
            <tr>
                <th><?= $data->id_toko ?></th>
                <th><?= $data->nama_toko ?></th>
             
                <td>
                     <a href="<?= $data->link_toko ?>">Link Toko 
                </td>
            </tr>

       <?php }?>
  
</table>


  </div>
