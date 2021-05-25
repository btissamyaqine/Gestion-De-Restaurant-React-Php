<?php
session_start();
include_once 'config/connection.php';

if(isset($_POST["signin"])) {
    if(empty($_POST["login"]) || empty($_POST["password"])) {
        $msg = 'All fields are required !';	
    }
    else {        
        $query = 'SELECT * FROM `user` WHERE `login`="'.$_POST['login'].'" AND `password`="'.$_POST['password'].'"';
        $query = $db->prepare($query);
        $query->execute();
        $count = $query->rowCount();
        $la_case = $query->fetchAll(\PDO::FETCH_ASSOC);

        if ($count > 0) {
					if ($la_case[0]['active'] == 0) {
            $_SESSION['id_user']=$la_case[0]['id_user'];
            $_SESSION['login']=$la_case[0]['login'];
            $_SESSION['fname']=$la_case[0]['fname'];
            $_SESSION['lname']=$la_case[0]['lname'];
            $_SESSION['role']=$la_case[0]['role'];
						header("location:admin/home.php");

					}
				}else {
            $msg = 'Incorrect Login or Password !';
      }
    }
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>NoaApp</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<h1>NoaApp</h1>
				<p>Welcome to NoaApp restaurant.</p>
				
			</header>
			<p style="color:red;"><?php
					if(isset($msg)) echo $msg;
				?></p>


		<!-- Signup Form -->
			<form id="signup-form" method="POST" action="index.php">
				<input type="text" name="login" placeholder="username" />
				<input type="password" name="password" placeholder="password" />
				<input type="submit" name="signin" value="Sign In"/>
			</form>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="https://github.com/btissamyaqine" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="mailto:btissamyaqine123@gmail.com" class="icon fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<a href="https://www.linkedin.com/in/btissamyaqine/"><li>&copy; by Btissam YAQINE.</li></a>
				</ul>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/main.js"></script>

	</body>
</html>