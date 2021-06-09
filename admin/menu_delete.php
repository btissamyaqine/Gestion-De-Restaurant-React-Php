
<?php include_once '../config/connection.php';?>

<?php
		if(isset($_GET['id'])) {
			$id_menu = $_GET['id'];
			$sql = 'DELETE FROM `menu` WHERE `id_menu` = "'.$id_menu.'"';
			$sql = $db->prepare($sql);
			if ($sql->execute()) {
				echo "
					<script>
						const msg = 'Done.';
						window.location.href='menu_list.php?msg='+msg;
					</script>
					";
			} else {
			echo "Sorry, something went wrong";
			}
		} else {
			echo "
					<script>
						const msg = 'Sorry, something went wrong!';
						window.location.href='menu_list.php?msg='+msg;
					</script>
					";
		}
?>