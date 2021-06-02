<?php 
include("./includes/header.php"); 
include('../config/connection.php');
?>

<?php
	if(isset($_POST['submit'])){
		$name_ing = $_POST['name_ing'];
		$query = 'INSERT INTO `ingredient`(`name_ing`) VALUES (?)';
		$query = $db->prepare($query);
		if ($query->execute([$name_ing])) {
			echo "
				<script>
					const msg = 'Done.';
					window.location.href='ingredient_list.php?msg='+msg;
				</script>
				";
		} else {
			echo "
				<script>
					const msg = 'Sorry, something went wrong!';
					window.location.href='ingredient_list.php?msg='+msg;
				</script>
				";
		}
	}
?>

<section>
	<header class="main">
		<h1>Add New Ingredient</h1>
	</header>
	<form method="post" action="ingredient_add.php">
		<div class="row gtr-uniform">
			<div class="col-6 col-12-xsmall">
				<input type="text" name="name_ing" placeholder="Ingredient Name" required />
			</div>
			<div class="col-6 col-12-xsmall">
				<input type="submit" name="append" value="append" class="button primary fit" />
			</div>
		</div>
	</form>
</section>

<!-- Sidebar -->
<?php include("./includes/sidebar.php"); ?>
