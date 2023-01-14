<?php
session_start();

$_SESSION['namasaya'] = "budi";

$servername = "localhost";
$username = "root";
$password = "";
$database = "itc";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// SQL Untuk Mendapatkan semua data tabel berita
$sql = "Select * from berita";

// Run SQL QUERY
$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>menuhome</title>
	<link rel="stylesheet" href="stylee2.css">
</head>
<body>
	<ul id="menu item">
	<li class="info"><a href="#"><img src="info.png"height="25px"width="30px"></a></li>
	</li>
	<li><a href="team.php">Team</a></li>
	<li><a href="konsule.php">Konsule</a></li>
	<li><a href="contac.php">Contac</a></li>
	<li><a href="home.php">Home</a></li>
	<div class="img">
		<a href="#"><img src="man.png">
			</a>
	</ul>
		<div class="back">
			<a href="home.php"><img src="back1.png"width="40px"height="40px"></a><br>KonSultan
		</div>
		<div class="text">
			<ul>
			<li><a href="home2.html"><img src="img4.jpeg"><br>konsule skripsi</a></li>
			<li><a href="#"><img src="laporan.jpeg"><br>konsule laporan</a></li>
		</ul>
</div>
<img src="02.jpg"height="500">
</body>
</html>