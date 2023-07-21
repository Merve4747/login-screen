<?php 
	session_start();
	ob_start();
	$_SESSION["giris"]=False;
?>


<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="frm">
        <form class="erv" action="controller.php" method="POST">

            <div>
                <?php 
			if($_SESSION["giris"]==True){ ?>

                <p>Giriş Başarılı </p>

                <?php } ?>
                

            </div>
            <h2>LOGİN</h2>
				<label>User Name</label>
				<input type="text" required name="user" placeholder="Username"><br>
		        
				<label>Password</label>
				<input type="password" required name="pass" placeholder="Password"><br>

				<input type="submit" class="btn2" name="login" value="Login">
        </form>


    </div>
    
</body>

</html>