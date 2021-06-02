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
							<th>Menu Name</th>
							<th>Price</th>
							<th>Ing Test</th>
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
										<td><center>".$row[$i]["menu_name"]."</center></td>
										<td><center>".$row[$i]["menu_price"]."</center></td>
										<td><center>".$row[$i]["ingredients"]."</center></td>
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
<?php include("./includes/sidebar.php"); ?>

