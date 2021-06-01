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
									<th>ingredient</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$sql = "SELECT name_menu,prix_menu , name_ing FROM menu, ingredient";


							$result = $db->query($sql);
							$result->execute();
							while($row = $result->fetch(PDO::FETCH_ASSOC)) {

								echo "
									<tr>
										<td>".$row['name_menu']."</td>
										<td>".$row['name_ing']."</td>
										<td>".$row['prix_menu']."</td>
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
