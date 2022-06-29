<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
<style type="text/css">
	body
	{
		margin: 0;
		padding: 0;
		font-family: Time New Roman;
		background:linear-gradient(120deg,#2980b9,#8e44ad);
		height: 100vh;
		overflow: hidden;

	}
	.center
	{
		position: absolute;
	 	top: 50%;
	 	left: 50%;
	 	 transform: translate(-50%,-50%);
	 	 width:500px;
	 	 height: 340px;
	 	 background:white;
	 	 border-radius: 5px;

	}

	.center	h1
	{
		text-align: center;
		padding: 0 0 20px 0;
		border-bottom: 1px solid silver;
	}
	.center form
	{
		padding: 0 40px;
		box-sizing: border-box;
	}
	form .txt_field
	{
		position: relative;
		border-bottom: 2 solid #adadad;
		margin: 30px 0;
	}
	.txt_field input
	{
		width: 100%;
		padding: 0 5px;
		height: 40px;
		font-size: 16px;
		border: none;
		outline: none;
	}
	.txt_field label
	{
		position: absolute;
		top:50%;
		left :5px;
		color: #adadad;
		transform: translateY(-50%);
		font-size: 16px;
		pointer-events: none;
		transition: .5s;

	}
	.txt_field span::before
	{
		content: '';
		position: absolute;
		top:40px;
		left: 0;
		width: 100%;
		height: 2px;
		background: #2691d9;

	}
	.txt_field input:focus ~ label,
	.txt_field input:valid ~ label
{
	top: -5px;
	color: #2691d9;

}
.txt_field input:focus ~ span::before,
.txt_field input:focus ~ span::before
{width: 100%}
input[type="submit"]
{
	width: 100%;
	height: 40px;
	border: 1px solid;
	background-color:  #2691d9;
	border-radius: 25px;
	font-size: 20px;
	color: blue;
	font-weight: 700;
	cursor: pointer;
	outline: none;
	border: none;
}
</style>
</head>
<body>
<div class="center">
	<h1>Login</h1>
	<form method="post">
		<div class="txt_field">
		<input type="text" name="" required>
			<span></span>
			<label>User Name</label>
		</div>
		<div class="txt_field">

			<input type="password" name="" required>
			<span></span>
			<label>Password</label>
		</div>
		<div>
			<input type="submit" value="Login" style="color:black; font-family: Time New Roman; font-size: 18px; " name="">
			
			<a href="Registrasi.php"><p style="text-align: center; font-family: Time New Roman;font-size: 16px; color: black;">Daftar Akun</p></a>
		</div>
	</form>
	<?php 	
	$user_name= @$_GET["user_name"];
	$password= @$_GET["password"];
	if(isset($_POST['login']))
	{
		
	} ?>
</div>
</body>
</html>