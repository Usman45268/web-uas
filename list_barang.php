<?php


        include_once('conection.php');

        $hrefid = $_GET['id'];
        $sql = "SELECT * FROM barang WHERE kategori_barang = $hrefid";
        $result = mysqli_query($conn, $sql)

?>
    <!-- Bootstrap CSS -->
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

  <div class="container pt-5 mx-auto">
    <h3 class="pt-5">
    <a href="add_barang.php?id=<?= $hrefid ?>" style="margin-bottom:20px;cursor:pointer" class="btn-sm btn-success" ><b>+</b></a> 
    <?php if ($hrefid=='1') {
        echo "Laptop";
      }else if ($hrefid=='2') {
        echo "Smartphone";
      }else if ($hrefid=='3') {
        echo "Alat Desain";
      } ?>


    </h3>
    <hr>

  </div>

  <div class="container">
    
  <table class="table table-striped">
  <thead class="thead-dark">
                <tr>
                <th>Foto</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Deskripsi</th>

                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php while ($datapanggil = mysqli_fetch_object($result)){?> 
            
            <tr>
            <th> <img class="card-img-top" style="object-fit:cover;widthwidth:100%;height:100px;" src=<?= $datapanggil->gambar_link?> alt="Card image cap"></th>
                <th><?= $datapanggil->nama_barang ?></th>
                <th><?= $datapanggil->deskripsi ?></th>
           
                <td >
                    <a href="detail.php?id=<?= $datapanggil->id_barang ?>" class="btn-sm btn-info p-2 mr-1">Detail
                    <a href="hapus_barang.php?id=<?= $datapanggil->id_barang ?>" style="" class="btn-sm btn-danger">Hapus</a>
                    <a href="edit_barang.php?id=<?= $datapanggil->id_barang ?>" style="" class="btn-sm btn-secondary">Edit</a>
                    <a href="<?= $datapanggil->link_toko ?>" style="" class="btn-sm btn-success">Toko</a>
                </td>
            </tr>

       <?php }?>
              
            </tbody>
            </table>
    




<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
      
      <p>Support by : Freepik, Bootstrap
      </div>

    </div>
  </footer>
  </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js"></script>

</body>