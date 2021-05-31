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
		<h1>Credit</h1>
	</header>
	<div class="row gtr-200">
		<div class="col-12 col-12-medium">
			<div class="table-wrapper">
				<!-- <table class="alt"> -->
				<table id="table_id" class="display">
					<thead>
						<tr>
							<th>Full Name</th>
							<th>Credit</th>
							<th>Manage</th>
						</tr>
					</thead>
					<tbody>
						<?php

$query = "SELECT `client`.`id_client`, `client`.`full_name`, `credit`.`id_client`, SUM(`credit`) as total_credit
	FROM `client`, `credit`
	WHERE `client`.`id_client` = `credit`.`id_client`
	GROUP BY `client`.`full_name`";
$query = $db->query($query);
$query->execute();
$count = $query->rowCount();
$row = $query->fetchAll(PDO::FETCH_ASSOC);
$i = 0;

while($i < $count) {
	$credit = $row[$i]["total_credit"]; 
	$credit < 0 ? $credit_color = "button" : $credit_color = "green";

								echo "
									<tr>
										<td><center><a >".$row[$i]["full_name"]."</a></center></td>
										<td><center><a href='#' class=".$credit_color.">".$credit." Dhs</a></center></td>
										<td><center><a href='credit_details.php?id_client=".$row[$i]["id_client"]."&full_name=".$row[$i]["full_name"]."' class='button primary'>More</a></center></td>
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
