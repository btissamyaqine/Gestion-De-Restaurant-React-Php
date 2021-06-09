<?php 
include("./includes/header.php"); 
include("../config/connection.php");
?>
<!-- Data Tables init Script -->
<script>
	$(document).ready( function () {
    $('#table_id').DataTable({
			responsive: true
		});
	} );


</script>

<section>
	<header class="main">
		<h1>Choose a Client</h1>
	</header>
	<div class="row gtr-200">
		<div class="col-12 col-12-medium">
			<div class="table-wrapper">
				<!-- <table id="table_id" class="display"> -->
				<table id="table_id" class="display">
					<thead>
						<tr>
							<th>Full Name & Class/Group</th>
							<th>Credit</th>
						</tr>
					</thead>
					<tbody>
						<?php
$q1 = "SELECT * FROM `client`"; //q1 = query1
$q1 = $db->query($q1);
$q1->execute();
$c1 = $q1->rowCount(); //c1 = count1
$r1 = $q1->fetchAll(PDO::FETCH_ASSOC); // r1 = row1
$i = 0;

while ($i < $c1) {
	$q2 = "SELECT `id_client`, SUM(`credit`) as total_credit FROM `credit` WHERE `id_client` = ".$r1[$i]["id_client"]."";
	$q2 = $db->query($q2);
	$q2->execute();
	$r2 = $q2->fetch(PDO::FETCH_ASSOC);
	is_null($r2["total_credit"]) ? $credit = 0 : $credit = $r2["total_credit"];
	$credit < 0 ? $credit_color = "button" : $credit_color = "green";
	echo "
		<tr>
			<td><center>".$r1[$i]["full_name"]." - ".$r1[$i]["class"]."/".$r1[$i]["group"]."</center></td>
			<td><center><a href='order_add_s2.php?id=".$r1[$i]["id_client"]."' class='button'>Add Order</a></center></td>
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
