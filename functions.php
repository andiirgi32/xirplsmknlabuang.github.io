<?php
function pdo_connect_mysql() {
    $host = "localhost"; 
  	$user = "root";
  	$pass = "";
  	$nama_db = "coba";
    try {
    	return new PDO('mysql:host=' . $host . ';dbname=' . $nama_db . ';charset=utf8', $user, $pass);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="icon" type="icon" href="img/logo1.png">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
		<link href="modeL.css" rel="stylesheet" type="text/css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	<body background="img/background.jpg">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: skyblue; border-bottom: 2px solid black;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h3><img src="img/logo1.png" alt="" width="6%"> <img src="img/logo2.png" alt="" width="6%"> SMK NEGERI LABUANG</h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>
      <form class="d-flex">
	  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	  <li class="nav-item">
		<a class="nav-link" aria-current="page" href="index.php"><i class="fas fa-home"></i>Beranda</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="absen.php"><i class="fas fa-address-book"></i>Absen XI RPL</a>
	  </li>
	</ul>
      </form>
    </div>
  </div>
</nav>

EOT;
}
function template_footer() {
echo <<<EOT
    </body>
</html>
EOT;
}
?>