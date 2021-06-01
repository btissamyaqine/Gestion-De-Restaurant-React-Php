<?php include("./includes/header.php"); 
include_once '../config/connection.php';
if(isset($_POST['submit'])){
	//print_r($_POST);
	$name_menu = $_POST['name_ing'];
  $create_at = $_POST['create_at'];
	$query = 'INSERT INTO `ingredient`(`name_ing`, `create_at`) 
  VALUES (?,?)';
    $query = $db->prepare($query);
    $query->execute([$name_menu, $prix_menu]);
    $msg=" Votre Ingredient a bien été enregistré ! Merci d'avoir utilisé notre Application.";
		echo "<script>window.location.href='ingredient_list.php';</script>";
}
?>

<section>
<form method="post" action="ingredient_add.php">

		<div class="row gtr-uniform">
			<div class="col-3 col-12-xsmall">
				<input type="text" name="name_ing" placeholder="Ingredient Name"/>
			</div>
      <div class="col-3 col-12-xsmall">
				<input type="date" name="create_at" placeholder="Create at" />
			</div>
      <div class="col-12">
				<input type="submit" name="submit" value="Submit" class="primary" />
			</div>
	</form>

</section>




<?php include("./includes/sidebar.php"); ?>