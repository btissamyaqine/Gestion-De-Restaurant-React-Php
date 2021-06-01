<?php include("./includes/header.php"); 
include("../config/connection.php");
?>
		

	<section>
		<ul class="actions">
				<li><a href="ingredient_add.php" class="button primary">Add Ingredient</a></li>
			
			</ul>
			<br>
			<div class="table-wrapper">
						<table>
							<thead>
								<tr>
									<th>Name</th>
									<!-- <th>Ingrediants</th> -->
									<th>Create at</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$sql = "SELECT * FROM `ingredient` ORDER BY `id_ingrediant` DESC";
							$result = $db->query($sql);
							$result->execute();
							while($row = $result->fetch(PDO::FETCH_ASSOC)) {

								echo "
									<tr>
										<td>".$row['name_ing']."</td>
										<td>".$row['create_at']."</td>
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
