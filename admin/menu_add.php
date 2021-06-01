<?php include("./includes/header.php"); 
include_once '../config/connection.php';
if(isset($_POST['submit'])){
	//print_r($_POST);
	$name_menu = $_POST['name_menu'];
	$prix_menu = $_POST['prix_menu'];
	$ingredient = $_POST['name_ing']
	$query = 'INSERT INTO `menu`(`name_menu`, `prix_menu`) 
  VALUES (?,?)';
    $query = $db->prepare($query);
    $query->execute([$name_menu, $prix_menu]);
    $msg=" Votre Menu a bien été enregistré ! Merci d'avoir utilisé notre Application.";
		echo "<script>window.location.href='menu_list.php';</script>";
}
?>

<section>
<form method="post" action="menu_add.php">

		<div class="row gtr-uniform">
			<div class="col-3 col-12-xsmall">
				<input type="text" name="name_menu" placeholder="Menu Name"/>
			</div>
      <div class="col-3 col-12-xsmall">
				<input type="text" name="prix_menu" placeholder="Price" />
			</div>
      <div class="col-12">
				<input type="submit" name="submit" value="submit" class="primary" />
			</div>
	</form>

</section>




<?php include("./includes/sidebar.php"); ?>