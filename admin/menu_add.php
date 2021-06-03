<?php 
include("./includes/header.php"); 
include("../config/connection.php");
?>

<?php
	if(isset($_POST['append']) ){
		$ingredient=$_POST['ingredient'];  
		$ingredients="";  
		foreach($ingredient as $ing) {  
			$ingredients .= $ing." - ";  
		}
		$ingredients = trim($ingredients);
		$ingredients = substr_replace($ingredients ,"", -1);

		$menu_name = $_POST['menu_name'];
		$menu_price = $_POST['menu_price'];

		$query = 'INSERT INTO `menu`(`menu_name`, `menu_price`, `ingredients`) VALUES (?,?,?)';
		$query = $db->prepare($query);
		// print_r($query);

		if ($query->execute([$menu_name,$menu_price,$ingredients])) {
			echo "
				<script>
					const msg = 'Done.';
					window.location.href='menu_list.php?msg='+msg;
				</script>
				";
		} else {
			echo "
				<script>
					const msg = 'Sorry, something went wrong!';
					window.location.href='menu_list.php?msg='+msg;
				</script>
				";
		}
	}
?>

<!-- Data Tables init Script -->
<script>
	$(document).ready( function () {
    $('#table_id').DataTable();
	} );
</script>

<section>
	<header class="main">
		<h1>Add New Menu</h1>
	</header>
	<div class="row gtr-200">
		<div class="col-12 col-12-medium">
			<div class="table-wrapper">
			<h2>Choose Ingredients List</h2>
				<form method="POST" action="menu_add.php">
					<!-- <table class="alt"> -->
					<table id="table_id" class="alt">
						<thead>
							<tr>
								<th>Ingredient Name</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$query = "SELECT * FROM `ingredient`";
								$query = $db->query($query);
								$query->execute();
								$count = $query->rowCount();
								$row = $query->fetchAll(PDO::FETCH_ASSOC);
								$i = 0;
								while($i < $count) {
									echo "
											<tr>
												<td>
													<center>
														<input type='checkbox' id=".$row[$i]["id_ing"]." name='ingredient[]' value=".$row[$i]["name_ing"].">
														<label for=".$row[$i]["id_ing"].">".$row[$i]["name_ing"]."</label>
													</center>
												</td>
											</tr>
											";
										$i++;
								}
							?>
						</tbody>
					</table>
							</br>
					<div class="row gtr-uniform">
						<div class="col-6 col-12-xsmall">
							<input type="text" name="menu_name" placeholder="Menu Name" required />
						</div>
						<div class="col-6 col-12-xsmall">
							<input type="text" name="menu_price" placeholder="Menu Price in Dhs" required />
						</div>
						<div class="col-12 col-12-xsmall">
							<input type="submit" name="append" value="append" class="button primary" />
						</div>
					</div>
				</form>



			</div>
		</div>
	</div>
</section>
<!-- Sidebar -->
<?php include("./includes/sidebar.php"); ?>
