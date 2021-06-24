<?php 
include("./includes/header.php"); 
include("../config/connection.php");
?>
<!-- Data Tables init Script -->
<script>
	// $(document).ready( function () {
  //   $('#table_id').DataTable({
	// 		responsive: true
	// 	});
	// } );

// 	$('#myTable').DataTable( {
//     responsive: true
// } );

</script>

<section>
	<header class="main">
		<h1>Orders</h1>
	</header>
	<div class="row gtr-200">
		<div class="col-12 col-12-medium">
			<div class="table-wrapper">
				<!-- <table id="table_id" class="display"> -->
				<table id="table_id" class="display">
					<thead>
						<tr>
							<th>ID</th>
							<th>Daily ID</th>
							<th>Client Name</th>
              <th>Final Price</th>
              <th>Date</th>
						</tr>
					</thead>
					<tbody>
						<?php
$q1 = "SELECT * FROM `orders` "; //q1 = query1
$q1 = $db->query($q1);
$q1->execute();
$c1 = $q1->rowCount(); //c1 = count1
$r1 = $q1->fetchAll(PDO::FETCH_ASSOC); // r1 = row1
$i = 0;
while($i < $c1){
	$UI_date = date("d M Y", strtotime($r1[$i]["create_at"]));
  echo "
  <tr>
    <td><center><a href='order_details.php?id=".$r1[$i]["id_order"]."'>#".$r1[$i]["id_order"]."</a></center></td>
    <td><center><a href='order_details.php?id=".$r1[$i]["id_order"]."'>#".$r1[$i]["id_day"]."</a></center></td>
    <td><center><a href='order_details.php?id=".$r1[$i]["id_order"]."'>".$r1[$i]["full_name"]."</a></center></td>
    <td><center><a href='order_details.php?id=".$r1[$i]["id_order"]."'>".$r1[$i]["price_final"]." Dhs</a></center></td>
    <td><center><a href='order_details.php?id=".$r1[$i]["id_order"]."'>".$UI_date."</a></center></td>

    
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
