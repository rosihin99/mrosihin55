<?php
include "koneksi.php";
?>
<form action="proses_login.php"method="POST">
	<div class="login-box">
		<h1>Login</h1>
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
		</form>