<<<<<<< HEAD
<html>
<head>  
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tambah Data</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-10 col-lg-12 col-md-9">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block bg-input-image"></div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Tambah Data</h1>
              </div>
            <form class="user" method="post" action="tkelas.php">
            <div class="form-group">
                <input type="text" class="form-control " id="exampleInputEmail" placeholder="Masukan Kode Kelas..." name="kode_kelas">
            </div>
            <div class="form-group">
            <select class="form-control" name="nip">
            <?php

            include_once("config.php");

            $result = mysqli_query($mysqli, "SELECT * FROM wali ");

            while($user_data = mysqli_fetch_array($result)) {
                
                echo '<option value="'.$user_data['nip'].'">'.$user_data['nama'].'</option>';
            }
            ?>
            </select>
            </div>
            <div class="form-group">
            <input type="text" class="form-control " id="exampleInputEmail" placeholder="Masukan Nama Kelas..." name="nama_kelas">
            </div>
            <tr>
                <a class="btn btn" href="kelas.php">Batal</a>
                <td><input type="submit" class="btn btn-primary" name="tambah" value="Simpan"></td>
            </tr>
        </table>
    </form>
          <!-- tambah data -->
          <?php
            // Check If form submitted, insert form data into users table.
            if(isset($_POST['tambah'])) {
                $kode_kelas = $_POST['kode_kelas'] ;
                $nip = $_POST['nip'] ;
                $nama_kelas = $_POST['nama_kelas'];

                // include database connection file
              
                include_once("config.php");

                // Insert user data into table
                $result = mysqli_query($mysqli, "INSERT INTO kelas(kode_kelas,nip,nama_kelas) VALUES('$kode_kelas','$nip','$nama_kelas')");

                header("Location: kelas.php");
                // Show message when user added
                //echo "User added successfully";
            }
            ?>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>
</html>
=======
<html>
<head>  
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tambah Data</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-10 col-lg-12 col-md-9">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block bg-input-image"></div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Tambah Data</h1>
              </div>
            <form class="user" method="post" action="tkelas.php">
            <div class="form-group">
                <input type="text" class="form-control " id="exampleInputEmail" placeholder="Masukan Kode Kelas..." name="kode_kelas">
            </div>
            <div class="form-group">
            <select class="form-control" name="nip">
            <?php

            include_once("config.php");

            $result = mysqli_query($mysqli, "SELECT * FROM wali ");

            while($user_data = mysqli_fetch_array($result)) {
                
                echo '<option value="'.$user_data['nip'].'">'.$user_data['nama'].'</option>';
            }
            ?>
            </select>
            </div>
            <div class="form-group">
            <input type="text" class="form-control " id="exampleInputEmail" placeholder="Masukan Nama Kelas..." name="nama_kelas">
            </div>
            <tr>
                <a class="btn btn" href="kelas.php">Batal</a>
                <td><input type="submit" class="btn btn-primary" name="tambah" value="Simpan"></td>
            </tr>
        </table>
    </form>
          <!-- tambah data -->
          <?php
            // Check If form submitted, insert form data into users table.
            if(isset($_POST['tambah'])) {
                $kode_kelas = $_POST['kode_kelas'] ;
                $nip = $_POST['nip'] ;
                $nama_kelas = $_POST['nama_kelas'];

                // include database connection file
              
                include_once("config.php");

                // Insert user data into table
                $result = mysqli_query($mysqli, "INSERT INTO kelas(kode_kelas,nip,nama_kelas) VALUES('$kode_kelas','$nip','$nama_kelas')");

                header("Location: kelas.php");
                // Show message when user added
                //echo "User added successfully";
            }
            ?>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>
</html>
>>>>>>> ccc230692f6ccdc33e899aa9d9d026a776bfeb33
