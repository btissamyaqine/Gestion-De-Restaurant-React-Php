<?php 
include("./includes/header.php"); 
include("../config/connection.php");
?>
<!-- Data Tables init Script -->
<script>
	$(document).ready( function () {
    $('#table_id').DataTable();
	} );
</script>

<section>
	<header class="main">
		<h1>Menus</h1>
		<a href="menu_add.php" type="submit" class="button primary">Add New Menu</a>
	</header>
	<div class="row gtr-200">
		<div class="col-12 col-12-medium">
			<div class="table-wrapper">
				<table id="table_id" class="display">
					<thead>
						<tr>
							<th>Menu</th>
							<th>Ingredients</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
							$query = "SELECT * FROM `menu`";
							$query = $db->query($query);
							$query->execute();
							$count = $query->rowCount();
							$row = $query->fetchAll(PDO::FETCH_ASSOC);
							$i = 0;
							while($i < $count) {
								echo "
									<tr>
										<td><center>".$row[$i]["menu_name"].": ".$row[$i]["menu_price"]." Dhs</center></td>
										<td><center>".$row[$i]["ingredients"]."</center></td>
										<td><center><a href='menu_delete.php?id=".$row[$i]["id_menu"]."' onClick='return myConfirm();' class='button'>X</a></center></td>
									</tr>
										";
									$i++;
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<!-- Sidebar -->

<script>
function myConfirm() {
  var result = confirm("Want to delete?");
  if (result==true) {
   return true;
  } else {
   return false;
  }
}
</script>

<?php include("./includes/sidebar.php"); ?>

