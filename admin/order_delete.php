
<?php include_once '../config/connection.php';?>

<?php
		if(isset($_GET['id'])) {
			$id_order = $_GET['id'];
			$sql = 'DELETE FROM `orders` WHERE `id_order` = "'.$id_order.'"';
			$sql = $db->prepare($sql);
			if ($sql->execute()) {
				echo "
					<script>
						const msg = 'Done.';
						window.location.href='order_list.php?msg='+msg;
					</script>
					";
			} else {
			echo "Sorry, something went wrong";
			}
		} else {
			echo "
					<script>
						const msg = 'Sorry, something went wrong!';
						window.location.href='order_list.php?msg='+msg;
					</script>
					";
		}
?>