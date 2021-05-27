
<?php include_once '../config/connection.php';?>

<?php
		if(isset($_GET['id'])) {
			$id_client = $_GET['id'];
			$sql = 'DELETE FROM `client` WHERE `id_client` = "'.$id_emp.'"';
			$sql = $db->prepare($sql);
			if ($sql->execute()) {
				$msg=" Votre Employe a bien été supprimer! Merci d'avoir utilisé notre Application.";
				header('location:client_list.php?msg="'.$msg.'"');
			} else {
				echo "Emp not existe";
			}
			
		} else {
			$msg = "Please select a valide user";
			header('location:client_list.php?msg="'.$msg.'"');
		}





?>