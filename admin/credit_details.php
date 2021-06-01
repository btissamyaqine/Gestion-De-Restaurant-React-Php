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
		<?php echo "<h1>".$_GET["full_name"]."'s Credits</h1>";
			$id_client = $_GET['id_client'];
			$full_name = $_GET['full_name'];
		?>
		<a href="credit_add.php?id_client=<?= $id_client ?>&full_name=<?= $full_name ?>" type="submit" class="button primary">Add Credit</a>
	</header>

	<div class="row gtr-200">
		<div class="col-12 col-12-medium">
			<div class="table-wrapper">
				<table class="alt">
					<thead>
						<tr>
							<th>Date</th>
							<th>Credit</th>
						</tr>
					</thead>
					<tbody>
						<?php
				
							$query = "SELECT * FROM `credit` WHERE `id_client` like ".$id_client." ORDER BY `create_at` DESC";
							$query = $db->query($query);
							$query->execute();
							$count = $query->rowCount();
							$row = $query->fetchAll(PDO::FETCH_ASSOC);
							$i = 0;

							while($i < $count) {
								$credit = $row[$i]["credit"]; 
								$credit < 0 ? $credit_color = "button" : $credit_color = "green";
								echo "
									<tr>
										<td><center><a>".$row[$i]["create_at"]."</a></center></td>
										<td><center><a class=".$credit_color.">".$row[$i]["credit"]." Dhs</a></center></td>
									</tr>
										";
									$i++;
							}
							$db = null;
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<!-- Sidebar -->
<?php include("./includes/sidebar.php"); ?>
