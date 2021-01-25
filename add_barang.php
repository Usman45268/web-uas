
<?php 

        include_once('conection.php');
     
        $hrefid = $_GET['id'];
        $status = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {    
            $namabarang = $_POST['nb'];
            $gambar = $_POST['gmbr'];
            $deskripsi = $_POST['dsc'];
            $link_toko = $_POST['lt'];

         
              $sql = "INSERT into barang VALUES(NULL,'$namabarang','$deskripsi','$link_toko','$gambar',$hrefid)";
              $result = mysqli_query($conn,$sql);
              if ($result) {
       
              header("Location: list_barang.php?id={$hrefid}");
              }else{
                  $status = "Simpan data gagal :".mysqli_error($conn);
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
        $hrefid = $_GET['id'];
        if ($hrefid=='1') {
            echo "Laptop";
          }else if ($hrefid=='2') {
            echo "Smartphone";
          }else if ($hrefid=='3') {
            echo "Alat Desain";
          }
        ?>
          <input type="text" class="form-control" name="nb" >
        </div>
       
        <div class="form-group">
          <label for="exampleFormControlInput1">Deskripsi</label>
          <textarea class="form-control" name="dsc"  rows="3"></textarea>
        </div>
        <div class="form-group">
          <label >Link Toko</label>
          <input type="text" class="form-control" name="lt" >
        </div>
        <div class="form-group">
          <label >Gambar link</label> 
          <input type="text" class="form-control" name="gmbr" >
        </div>
        <div class="form-group">
      
        </div>
      <div>
        <input type="submit" class="btn btn-success" value="Tambah"><br>
        <?php
          echo $status
        ?>
    </div>
    </form>
