<?php

include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tugasakhirkami</title>
	<style>
		body{
	background-image:url(pohon.jpg);
	background-size: cover;
}
.login-box{
	width: 299px;
	height: 440px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	color: white;
	background-color: rgba(44, 60, 80, 0.7);
	padding: 20px;
}
 .login-box h1{
	font-size: 40px;
	border-bottom: 6px solid #4caf50;
	margin-bottom:30px;
	padding: 6px 0;
	width: 105px;
	color: white;
	font-family: sans-serif;
}
.textbox{
	width: 100%;
	overflow: hidden;
	font-size: 20px;
	padding: 8px 0;
	margin: 8px 0;
	border-bottom: 2px solid #4caf50;
}
.textbox input {
	border: none;
	outline: none;
	background: transparent;
	font-size: 20px;
	width: 80%;
	float:left;
	margin:  10px;
	padding: 8px 0;
	cursor:text;
	color: white;
	text-decoration: initial;
}
.btn{
	width: 100%;
	background:  rgba(44, 62, 80, 0.7);
	border:  3px solid #4caf50;
	color: white;
	padding: 6px;
	font-size: 18px;
	cursor: pointer;
	margin: 8px 0;
	float: left;
	padding-right: 30px;
	border-radius: 30px;
}
.btn:hover
{
	background:  #4caf50;
}
.ckbox{
	background: transparent;
	border: 1px solid white;
	width: 30px;
	float: left;
	cursor: pointer;
}
.ckbox: hover{;
	background: black ;
}
.text{
	color: white;
	padding: 0px;
	margin: 5px;
	float: right;
	font-size: 15px;
	padding-right: 25px;
}
.img{
	padding: 1px;
	margin: 2%;
	padding-left: 50%;
}
.imgcek{
	padding: 1px;
	margin: 2%;
	padding-left: 50%;
	
}
.img:hover{
	background: ;
}
.imgcek:hover{
	background: ;
}
.text2{
	margin: 80px;
	margin: 40px;
	color: white;
	text-align: center;
}
.text2 a{
	color: yellow;
	text-decoration: none;
}
.text placeholder{
	color: white;

}
ul{
	margin: 0%;
	padding: 0%;
	position:!important;
	overflow: hidden;
}
li{
float: right;
display: inline-block;
text-decoration: none;
margin: 1px;
padding: 8px;
}
a{
	text-decoration: none;

}
	</style>
</head>
<body>
	<div class="login-box">
		<h1>Login</h1>
		<form action="proses_login.php" method="post">
		<div class="textbox">
			<input type="text"placeholder="Username"name="username">
			<div class="img"><a href="#"><img src="user.png"height="25px"width="25px"></a></div>
		</div>
		<div class="textbox">
			<input type="password"placeholder="Pasword"name="password">
			<div class="imgcek"><a href="#"><img src="pas.png"height="25px"width="25px"></a></div>
		</div>
		<input type="checkbox"class="ckbox"text="Forget Fassword.?">
		<div class="text">forget fassword.?</div>
		<input type="button"class="btn" value="Sigin"name="sigin"><br><br>
		<div class="text2">
		Don't have account?<a href="#">SignUp</a>
		<ul>
			<li><a href="#"><img src="ggl.png"></a></li>
			<li><a href="#"><img src="fb.png"></a></li>
			<li><a href="#"><img src="ig.png"></a></li>
		</ul>
		</form>
	</div>
	</div>
</body>
</html>

