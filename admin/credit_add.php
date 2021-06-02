<?php include("./includes/header.php"); 
include_once '../config/connection.php';


if(isset($_POST['append'])) {
	$id_client= $_POST["id_client"];
	$full_name = $_POST['full_name'];
	$credit = $_POST['credit'];
	$query = 'INSERT INTO `credit` (`id_client`,`full_name`, `credit`) 
	VALUES (?,?,?)';
    $query = $db->prepare($query);
		if ($query->execute([$id_client, $full_name, $credit])) {
			echo "
				<script>
					const msg = 'Done.';
					window.location.href='credit_list.php?msg='+msg;
				</script>
				";
		} else {
			echo "
				<script>
					const msg = 'Sorry, something went wrong!';
					window.location.href='credit_list.php?msg='+msg;
				</script>
				";
		}
}

?>
<section>
	<header class="main">
		<h1>Add Credit</h1>
	</header>
	<form method="post" action="credit_add.php">
		<input type="hidden" name="id_client" value="<?php if(isset($_GET["id_client"])) echo $_GET["id_client"];?>" />
		<input type="hidden" name="full_name" value="<?php if(isset($_GET["full_name"])) echo $_GET["full_name"];?>" />
		<div class="row gtr-uniform">
			<div class="col-6 col-12-xsmall">
				<input type="text" name="credit" placeholder="Add Credit" required />
			</div>
			<div class="col-6 col-12-xsmall">
				<input type="submit" name="append" value="append" class="button primary fit" />
			</div>
		</div>
	</form>
</section>

<!-- Sidebar -->
<?php include("./includes/sidebar.php"); ?>
