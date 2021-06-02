
<?php include_once '../config/connection.php';?>

<?php
		if(isset($_GET['id'])) {
			$id_client = $_GET['id'];
			$sql = 'DELETE FROM `client` WHERE `id_client` = "'.$id_client.'"';
			$sql = $db->prepare($sql);
			if ($sql->execute()) {
				echo "
					<script>
						const msg = 'Done.';
						window.location.href='client_list.php?msg='+msg;
					</script>
					";
			} else {
			echo "Sorry, something went wrong";
			}
		} else {
			echo "
					<script>
						const msg = 'Sorry, something went wrong!';
						window.location.href='client_list.php?msg='+msg;
					</script>
					";
		}
?>