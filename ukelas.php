<<<<<<< HEAD
        <!-- ubah data -->
        <?php
            // include database connection file
            include_once("config.php");

            // Check if form is submitted for user update, then redirect to homepage after update
            if(isset($_POST['update']))
            {   
                $kode_kelas = $_POST['kode_kelas'];
                $nip = $_POST['nip'];
                $kodelama = $_POST['kodelama'];
                $nama_kelas=$_POST['nama_kelas'];
                
                // update user data
                $result = mysqli_query($mysqli, "UPDATE kelas SET kode_kelas='$kode_kelas',nip='$nip',nama_kelas='$nama_kelas' WHERE kode_kelas=$kodelama");

                // Redirect to homepage to display updated user in list
                header("Location: kelas.php");
            }
            ?>
        <?php
            
            // Display selected user data based on id
            // Getting id from url
            $kode_kelas = $_GET['kode_kelas'];

            // Fetech user data based on id
            $result = mysqli_query($mysqli, "SELECT * FROM kelas WHERE kode_kelas=$kode_kelas");

            while($user_data = mysqli_fetch_array($result))
            {
                $kode_kelas = $user_data['kode_kelas'];
                $nip = $user_data['nip'];
                $nama_kelas = $user_data['nama_kelas'];
                
                
            }
        ?>
<html>
<head>  
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

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
            <form class="user" name="update_user" method="post" action="ukelas.php">
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail"name="kode_kelas" value=<?php echo $kode_kelas;?>>
            </div>
            <select class="form-control" name="nip">
            <?php

            include_once("config.php");

            $result = mysqli_query($mysqli, "SELECT * FROM wali ");

            while($user_data = mysqli_fetch_array($result)) {
                
                echo '<option value="'.$user_data['nip'].'">'.$user_data['nama'].'</option>';
            }
            ?>
            </select>
            <br>
            <div class="form-group">
            <input type="text" class="form-control " id="exampleInputEmail" name="nama_kelas" value=<?php echo $nama_kelas;?>>
            </div>
            <tr>
                <td><input type="hidden" name="kodelama" value=<?php echo $_GET['kode_kelas'];?>></td>
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
                $kode_kelas = $_POST['kode_kelas'];
                $nip = $_POST['nip'];
                $kodelama = $_POST['kodelama'];
                $nama_kelas=$_POST['nama_kelas'];
                
                // update user data
                $result = mysqli_query($mysqli, "UPDATE kelas SET kode_kelas='$kode_kelas',nip='$nip',nama_kelas='$nama_kelas' WHERE kode_kelas=$kodelama");

                // Redirect to homepage to display updated user in list
                header("Location: kelas.php");
            }
            ?>
        <?php
            
            // Display selected user data based on id
            // Getting id from url
            $kode_kelas = $_GET['kode_kelas'];

            // Fetech user data based on id
            $result = mysqli_query($mysqli, "SELECT * FROM kelas WHERE kode_kelas=$kode_kelas");

            while($user_data = mysqli_fetch_array($result))
            {
                $kode_kelas = $user_data['kode_kelas'];
                $nip = $user_data['nip'];
                $nama_kelas = $user_data['nama_kelas'];
                
                
            }
        ?>
<html>
<head>  
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

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
            <form class="user" name="update_user" method="post" action="ukelas.php">
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail"name="kode_kelas" value=<?php echo $kode_kelas;?>>
            </div>
            <select class="form-control" name="nip">
            <?php

            include_once("config.php");

            $result = mysqli_query($mysqli, "SELECT * FROM wali ");

            while($user_data = mysqli_fetch_array($result)) {
                
                echo '<option value="'.$user_data['nip'].'">'.$user_data['nama'].'</option>';
            }
            ?>
            </select>
            <br>
            <div class="form-group">
            <input type="text" class="form-control " id="exampleInputEmail" name="nama_kelas" value=<?php echo $nama_kelas;?>>
            </div>
            <tr>
                <td><input type="hidden" name="kodelama" value=<?php echo $_GET['kode_kelas'];?>></td>
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
