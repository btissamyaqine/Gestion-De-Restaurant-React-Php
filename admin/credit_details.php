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
		<?php echo "<h1>".$_GET["full_name"]." Credit</h1>";

		$id_client = $_GET['id_client'];
		$full_name = $_GET['full_name'];

		?>
		
		<a href="credit_add.php?id_client=<?= $id_client ?>&full_name=<?= $full_name ?>" type="submit" class="button primary">Add Credit</a>

	</header>
	<div class="row gtr-200">
		<div class="col-12 col-12-medium">
			<div class="table-wrapper">
				<table class="alt">
				<!-- <table id="table_id" class="alt"> -->
					<thead>
						<tr>
							<th>Date</th>
							<th>Credit</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$credit = -2; // exe

							$credit < 0 ? $credit_color = "button" : $credit_color = "green";
				
							$sql = "SELECT * FROM `credit` WHERE `id_client` like ".$id_client." ORDER BY `id_client` DESC";
							$result = $db->query($sql);
							while($row = $result->fetch(PDO::FETCH_ASSOC)) {

								echo "
									<tr>
										<td><center><a>".$row["create_at"]."</a></center></td>
										<td><center><a class=".$credit_color.">".$row["credit"]." Dhs</a></center></td>
									</tr>
										";
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
