<?php
session_start();
ob_start();
if($_POST){
	$conn = new mysqli("localhost", "root", "", "crudoperation");

	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$Username = stripcslashes($user);
	$Password = stripcslashes($pass);
	$Username = $conn->real_escape_string($Username);
	$Password = $conn->real_escape_string($Password);
	
	$sql = "select * from crud where name = '$Username' and password ='$Password'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();

		if ($row["name"] == $Username and $row["password"] == $Password){
			
			echo "Giriş başarılı Hoş Geldiniz:)".$row["name"];
			
			header("Location: display.php");
			#$_SESSION["giris"]= True;
     
		}else{
			
			echo "Kullanıcı adı veya Şifre Yanlış.";
 
			header("Location:index.php");
				
		}
	}
	$conn->close();
}