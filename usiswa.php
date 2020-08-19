<<<<<<< HEAD
        <!-- ubah data -->
        <?php
            // include database connection file
            include_once("config.php");

            // Check if form is submitted for user update, then redirect to homepage after update
            if(isset($_POST['update']))
            {   
                $nim = $_POST['nim'];
                $kode_kelas = $_POST['kode_kelas'];
                $nimlama = $_POST['nimlama'];
                $nama_siswa=$_POST['nama_siswa'];
                $jk = $_POST['jk'];
                // update user data
                $result = mysqli_query($mysqli, "UPDATE siswa SET nim='$nim' ,kode_kelas='$kode_kelas',nama_siswa='$nama_siswa' ,jk='$jk' WHERE nim=$nimlama");

                // Redirect to homepage to display updated user in list
                header("Location: siswa.php");
            }
            ?>
        <?php
            
            // Display selected user data based on id
            // Getting id from url
            $nim = $_GET['nim'];

            // Fetech user data based on id
            $result = mysqli_query($mysqli, "SELECT * FROM siswa WHERE nim=$nim");

            while($user_data = mysqli_fetch_array($result))
            {
                $nim = $user_data['nim'];
                $kode_kelas = $user_data['kode_kelas'];
                $nama_siswa = $user_data['nama_siswa'];
                $jk = $user_data['jk'];
                
                
            }
        ?>
<html>
<head>  
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit Data</title>

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
                <h1 class="h4 text-gray-900 mb-4">Edit Data</h1>
              </div>
            <form class="user" name="update_user" method="post" action="usiswa.php">
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail"name="nim" value=<?php echo $nim;?>>
            </div>
            <select class="form-control" name="kode_kelas">
            <?php

            include_once("config.php");

            $result = mysqli_query($mysqli, "SELECT * FROM kelas ");

            while($user_data = mysqli_fetch_array($result)) {
                
                echo '<option value="'.$user_data['kode_kelas'].'">'.$user_data['nama_kelas'].'</option>';
            }
            ?>
            </select>
            <br>
            <div class="form-group">
            <input type="text" class="form-control " id="exampleInputEmail" name="nama_siswa" value=<?php echo $nama_siswa;?>>
            </div>
            <div class="form-group">
            <input type="text" class="form-control " id="exampleInputEmail" name="jk" value=<?php echo $jk;?>>
            </div>
            <tr>
                <td><input type="hidden" name="nimlama" value=<?php echo $_GET['nim'];?>></td>
                <a class="btn btn" href="index.php">Batal</a>
                <td><input type="submit" class="btn btn-primary" name="update" value="Simpan"></td>
            </tr>
        </table>
    </form>
    
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
        <!-- ubah data -->
        <?php
            // include database connection file
            include_once("config.php");

            // Check if form is submitted for user update, then redirect to homepage after update
            if(isset($_POST['update']))
            {   
                $nim = $_POST['nim'];
                $kode_kelas = $_POST['kode_kelas'];
                $nimlama = $_POST['nimlama'];
                $nama_siswa=$_POST['nama_siswa'];
                $jk = $_POST['jk'];
                // update user data
                $result = mysqli_query($mysqli, "UPDATE siswa SET nim='$nim' ,kode_kelas='$kode_kelas',nama_siswa='$nama_siswa' ,jk='$jk' WHERE nim=$nimlama");

                // Redirect to homepage to display updated user in list
                header("Location: siswa.php");
            }
            ?>
        <?php
            
            // Display selected user data based on id
            // Getting id from url
            $nim = $_GET['nim'];

            // Fetech user data based on id
            $result = mysqli_query($mysqli, "SELECT * FROM siswa WHERE nim=$nim");

            while($user_data = mysqli_fetch_array($result))
            {
                $nim = $user_data['nim'];
                $kode_kelas = $user_data['kode_kelas'];
                $nama_siswa = $user_data['nama_siswa'];
                $jk = $user_data['jk'];
                
                
            }
        ?>
<html>
<head>  
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit Data</title>

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
                <h1 class="h4 text-gray-900 mb-4">Edit Data</h1>
              </div>
            <form class="user" name="update_user" method="post" action="usiswa.php">
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail"name="nim" value=<?php echo $nim;?>>
            </div>
            <select class="form-control" name="kode_kelas">
            <?php

            include_once("config.php");

            $result = mysqli_query($mysqli, "SELECT * FROM kelas ");

            while($user_data = mysqli_fetch_array($result)) {
                
                echo '<option value="'.$user_data['kode_kelas'].'">'.$user_data['nama_kelas'].'</option>';
            }
            ?>
            </select>
            <br>
            <div class="form-group">
            <input type="text" class="form-control " id="exampleInputEmail" name="nama_siswa" value=<?php echo $nama_siswa;?>>
            </div>
            <div class="form-group">
            <input type="text" class="form-control " id="exampleInputEmail" name="jk" value=<?php echo $jk;?>>
            </div>
            <tr>
                <td><input type="hidden" name="nimlama" value=<?php echo $_GET['nim'];?>></td>
                <a class="btn btn" href="index.php">Batal</a>
                <td><input type="submit" class="btn btn-primary" name="update" value="Simpan"></td>
            </tr>
        </table>
    </form>
    
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
