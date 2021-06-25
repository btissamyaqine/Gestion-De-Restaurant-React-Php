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

<?php
	$total_nbr = 0;
	$total_profit = 0;

	if(isset($_POST['append']) && isset($_POST["start_date"]) && isset($_POST["end_date"])) {
		!empty($_POST["start_date"]) ? $start_date = htmlspecialchars($_POST["start_date"]) : $start_date = "1970-01-01";
		!empty($_POST["end_date"]) ? $end_date = htmlspecialchars($_POST["end_date"]) : $end_date = "2030-01-01";

		// Add day to end date -> fix hours issue
		$date1 = str_replace('-', '/', $end_date);
		$end_date_new = date('Y-m-d',strtotime($date1 . "+1 days"));

		$q1 = "SELECT * FROM `orders` WHERE `create_at` BETWEEN '".$start_date."' AND '".$end_date_new."' ";
		$q1 = $db->query($q1);
		$q1->execute();
		$count = $q1->rowCount();
		$r1 = $q1->fetchAll(PDO::FETCH_ASSOC);
		$i = 0;
		$total_nbr = $count;
		while($i < $count) {
			$total_profit += $r1[$i]["price_final"];
			$i++;
		}
	}
?>

<section>
	<header class="main">
		<h1>Accounting</h1>
	</header>

	<form method="post" action="accounting_list.php">
		<div class="row gtr-uniform">
			<div class="col-6 col-12-xsmall">
				Start Date
				<input type="date" name="start_date" placeholder="Start Date" />
			</div>
			<div class="col-6 col-12-xsmall">
				End Date
				<input type="date" name="end_date" placeholder="End Date" />
			</div>
			<div class="col-12">
				<input type="submit" name="append" value="append" class="primary" />
			</div>
		</div>
	</form>

	<div class="row gtr-200">
		<div class="col-12 col-12-medium">
			<div class="row gtr-uniform">
				<div class="col-6 col-12-xsmall">
					Total Orders Nbr
					<input type="text" value="<?= $total_nbr ?>"" disabled />
				</div>
				<div class="col-6 col-12-xsmall">
					Total Profit in Dhs
					<input type="text" value="<?= $total_profit ?>" disabled />
				</div>
			</div></br></br>


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
	if(isset($_POST['append']) && isset($_POST["start_date"]) && isset($_POST["end_date"])) {
		!empty($_POST["start_date"]) ? $start_date = htmlspecialchars($_POST["start_date"]) : $start_date = "1970-01-01";
		!empty($_POST["end_date"]) ? $end_date = htmlspecialchars($_POST["end_date"]) : $end_date = "2030-01-01";

		// Add day to end date -> fix hours issue
		$date1 = str_replace('-', '/', $end_date);
		$end_date_new = date('Y-m-d',strtotime($date1 . "+1 days"));
		echo $end_date_new;

		$q1 = "SELECT * FROM `orders` WHERE `create_at` BETWEEN '".$start_date."' AND '".$end_date_new."' ";
		$q1 = $db->query($q1);
		$q1->execute();
		$count = $q1->rowCount();
		$r1 = $q1->fetchAll(PDO::FETCH_ASSOC);
		$i = 0;
		while($i < $count){
			$UI_date = date("d M Y", strtotime($r1[$i]["create_at"]));
			$total_profit += $r1[$i]["price_final"];
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
