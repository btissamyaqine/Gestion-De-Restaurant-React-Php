<?php
	if(isset($_POST["signin"])) {
		echo "hi";
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

		<!-- Signup Form -->
			<form id="signup-form" method="POST" action="index.php">
				<input type="text" name="username" placeholder="username" />
				<input type="password" name="password" placeholder="password" />
				<input type="submit" name="signin" value="Sign In">
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