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
		<h1>Clients</h1>
	</header>
	<div class="row gtr-200">
		<div class="col-12 col-12-medium">
			<div class="table-wrapper">
				<!-- <table class="alt"> -->
				<!-- <table id="table_id" class="display"> -->
				<table id="table_id" class="alt">
					<thead>
						<tr>
							<th>Full Name</th>
							<th>Class/Group</th>
							<th>Credit</th>
						</tr>
					</thead>
					<tbody>
						<?php
							
$query = "SELECT `client`.`id_client`, `client`.`full_name`, `client`.`class`, `client`.`group`, `credit`.`id_client`, SUM(`credit`) as total_credit
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
			<td><center><a href='client_details.php?id=".$row[$i]["id_client"]."'>".$row[$i]["full_name"]."</a></center></td>
			<td><center><a href='client_details.php?id=".$row[$i]["id_client"]."'>".$row[$i]["class"]."/".$row[$i]["group"]."</a></center></td>
			<td><center><a href='#' class=".$credit_color.">".$credit." Dhs</a></center></td>
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
