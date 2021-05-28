<?php include("./includes/header.php"); 
include_once '../config/connection.php';


if(isset($_POST['append'])){
	$full_name = $_POST['full_name'];
	$class = $_POST['class']!="Class"?$_POST['class']:"";
	$group = $_POST['group']!="Group"?$_POST['group']:"";
	$gender = $_POST['gender'];
	$tele = $_POST['tele'];
	$email = $_POST['email'];
	$facebook = $_POST['facebook'];
	$date_naissance = $_POST['date_naissance'];
	$business_adress = $_POST['business_adress'];
	$home_adress = $_POST['home_adress'];
	$remarque = $_POST['remarque'];
	$query = 'INSERT INTO `client` (`full_name`, `class`, `group`, `gender`, `tele`, `email`, `facebook`, `date_naissance`, `business_adress`, `home_adress`,`remarque`) 
	VALUES (?,?,?,?,?,?,?,?,?,?,?)';
    $query = $db->prepare($query);
    $query->execute([$full_name, $class, $group, $gender, $tele, $email, $facebook, $date_naissance, $business_adress, $home_adress, $remarque]);
    $msg=" Votre Employe a bien été enregistré ! Merci d'avoir utilisé notre Application.";
    // header("location: ./client_list.php?msg=".$msg."");

		echo "<script>window.location.href='client_list.php';</script>";
    exit;
}

?>
<section>
	<header class="main">
		<h1>New Client</h1>
	</header>
	<form method="post" action="client_add.php">

		<div class="row gtr-uniform">
			<div class="col-3 col-12-xsmall">
				<input type="text" name="full_name" placeholder="Full Name" required />
			</div>
			<div class="col-3 col-12-xsmall">
				<select name="class" id="demo-group">
					<option selected>Class</option>
					<option value="PS">PS</option>
					<option value="MS">MS</option>
					<option value="GS">GS</option>
					<option value="CP">CP</option>
					<option value="CE1">CE1</option>
					<option value="CE2">CE2</option>
					<option value="CM1">CM1</option>
					<option value="CM2">CM2</option>
					<option value="CE6">CE6</option>
				</select>
			</div>
			<div class="col-3 col-12-xsmall">
				<select name="group" id="demo-group">
					<option selected>Group</option>
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
				</select>
			</div>

			<div class="col-3 col-12-xsmall">
				<select name="gender" id="demo-group">
					<option selected>Gender</option>
					<option value="masculine">masculine</option>
					<option value="feminine">Feminine</option>
				</select>
			</div>

			<div class="col-3 col-12-xsmall">
				<input type="text" name="tele" placeholder="Tele" />
			</div>
			<div class="col-3 col-12-xsmall">
				<input type="email" name="email" placeholder="Email" />
			</div>
			<div class="col-3 col-12-xsmall">
				<input type="text" name="facebook" placeholder="Facebook" />
			</div>
			<div class="col-3 col-12-xsmall">
				<input type="date" name="date_naissance" placeholder="Date naiss"/>
			</div>

			<div class="col-6 col-12-xsmall">
				<input type="text" name="business_adress" placeholder="Business Address" />
			</div>
			<div class="col-6 col-12-xsmall">
				<input type="email" name="home_adress" placeholder="Home Address" />
			</div>
		
			<div class="col-12 col-12-xsmall">
				<textarea id="w3review" name="remarque" rows="4" cols="50" placeholder="Remarque"></textarea>
			</div>

			<div class="col-12">
				<input type="submit" name="append" value="append" class="primary" />
			</div>
		</div>
	</form>
</section>

<!-- Line in end of Section -->
<section> </section>



<!-- Sidebar -->
<?php include("./includes/sidebar.php"); ?>
