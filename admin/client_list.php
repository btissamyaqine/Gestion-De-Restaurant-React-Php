<?php 
include("./includes/header.php"); 
include("../config/connection.php");
?>
<!-- Data Tables init Script -->
<!-- <script>
	$(document).ready( function () {
    $('#table_id').DataTable();
	} );
</script> -->

<section>
	<header class="main">
		<h1>Clients</h1>
	</header>
	<div class="row gtr-200">
		<div class="col-12 col-12-medium">
			<div class="table-wrapper">
				<table class="alt">
				<!-- <table id="table_id" class="display"> -->
					<thead>
						<tr>
							<th>Full Name</th>
							<th>Class/Group</th>
							<th>Credit</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$credit = 0; // exe

							$credit < 0 ? $credit_color = "button" : $credit_color = "green";

							$sql = "SELECT * FROM `client` ORDER BY `id_client` DESC";
							$result = $db->query($sql);
							while($row = $result->fetch(PDO::FETCH_ASSOC)) {

								echo "
									<tr>
										<td><center><a href='client_details.php?id=".$row["id_client"]."'>".$row["full_name"]."</a></center></td>
										<td><center><a href='client_details.php?id=".$row["id_client"]."'>".$row["class"]."/".$row["group"]."</a></center></td>
										<td><center><a href='#' class=".$credit_color.">".$credit." Dhs</a></center></td>
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
