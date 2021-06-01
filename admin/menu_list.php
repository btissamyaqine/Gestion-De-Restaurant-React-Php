<?php include("./includes/header.php"); 
include("../config/connection.php");
?>
		

	<section>
		<ul class="actions">
				<li><a href="menu_add.php" class="button primary">Add menu</a></li>
			
			</ul>
			<br>
			<div class="table-wrapper">
						<table>
							<thead>
								<tr>
									<th>Name</th>
									<!-- <th>Ingrediants</th> -->
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$sql = "SELECT * FROM `menu` ORDER BY `id_menu` DESC";
							$result = $db->query($sql);
							while($row = $result->fetch(PDO::FETCH_ASSOC)) {

								echo "
									<tr>
										<td>".$row["name_menu"]."</td>
										<td>".$row["prix_menu"]."</td>
									</tr>
										";
							}
							$db = null;
						?>
								
							</tbody>
						</table>
				</div>

	<!-- Line in end of Section -->
</section>



<!-- Sidebar -->
<?php include("./includes/sidebar.php"); ?>
