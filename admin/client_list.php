<?php include("./includes/header.php"); 
include_once '../config/connection.php';
?>

							
	<div class="table-wrapper">
		<table class="alt">
		<thead>
			<tr>
				<th>full name</th>
				<th>class</th>
				<th>group</th>
				<th> gender</th>
				<th>Telephone</th>
				<th>email</th>
				<th>facebook</th>
				<th>date_naissance</th>
				<th> Business Address</th>
				<th>home Address</th>
				<th>Remarque</th>
			</tr>
		</thead>
		<tbody>
<?php 
$sql = "SELECT * FROM `client` ORDER BY `id_client` DESC";
$result = $db->query($sql);
	while($row = $result->fetch(PDO::FETCH_ASSOC)) {
				echo "<tr>
								<td><center><a href='client_details.php?id=".$row["id_client"]."'>".$row["full_name"]."</a></center></td>
								<td><center><a href='client_details.php?id=".$row["id_client"]."'>".$row["class"]."</a></center></td>
								<td><center><a href='client_details.php?id=".$row["id_client"]."'>".$row["group"]."</a></center></td>
								<td><center><a href='client_details.php?id=".$row["id_client"]."'>".$row["gender"]."</a></center></td>
								<td><center><a href='client_details.php?id=".$row["id_client"]."'>".$row["tele"]."</a></center></td>
								<td><center><a href='client_details.php?id=".$row["id_client"]."'>".$row["email"]."</a></center></td>
								<td><center><a href='client_details.php?id=".$row["id_client"]."'>".$row["facebook"]."</a></center></td>
								<td><center><a href='client_details.php?id=".$row["id_client"]."'>".$row["date_naissance"]."</a></center></td>
								<td><center><a href='client_details.php?id=".$row["id_client"]."'>".$row["business_adress"]."</a></center></td>
								<td><center><a href='client_details.php?id=".$row["id_client"]."'>".$row["home_adress"]."</a></center></td>
								<td><center><a href='client_details.php?id=".$row["id_client"]."'>".$row["remarque"]."</a></center></td>


							</tr>";
			}
$db = null;
?>
			</tbody>
		</table>
	</div>





<!-- Sidebar -->
<?php include("./includes/sidebar.php"); ?>
