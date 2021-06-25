<?php
include_once '../config/connection.php';


if(isset($_POST['append'])){

	isset($_POST["id_client"]) ? $id_client = htmlspecialchars($_POST["id_client"]) : "";
		isset($_POST["full_name"]) ? $full_name = htmlspecialchars($_POST["full_name"]) : "";
		isset($_POST["tele"]) ? $tele = htmlspecialchars($_POST["tele"]) : "";
		isset($_POST["class"]) ? $class = htmlspecialchars($_POST["class"]) : "";
		isset($_POST["status"]) ? $status = htmlspecialchars($_POST["status"]) : "";
		isset($_POST["remarque"]) ? $remarque = htmlspecialchars($_POST["remarque"]) : "";
		isset($_POST["remise"]) ? $remise = htmlspecialchars($_POST["remise"]) : "";;

  $query = 'INSERT INTO `order`(`full_name`, `tele`, `class`, `status`, `remarque`, `remise`, `order_menus`, `price_total`,
  `price_remise`, `price_final`) 
  VALUES (?,?,?,?,?,?,?,?,?,?,?)';
    $query = $db->prepare($query);
    $query->execute([$full_name, $tele, $class, $status, $remarque, $remise, $order_menus, $price_total, $price_remise, $price_final]);
    //$msg=" Votre Employe a bien été enregistré ! Merci d'avoir utilisé notre Application.";
   // header("location:emp_list.php?msg=".$msg."");
   echo "<script>window.location.href='order_list.php';</script>";
    exit;
}
?>
<?php 
include("./includes/header.php"); 
$sql = "SELECT * FROM `orders` WHERE `id_order` like ".$_GET['id']."";
$result = $db->query($sql);
 while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo ("
        <section>
          <form method='post' action='client_add.php'>
            <header class='main'>
              <h3>Order details</h3>
            </header>
              <div class='row gtr-uniform'>
                <div class='col-6 col-12-xsmall'>
                <b>Status: </b>".$row['status']."
              </div>
              <div class='col-6 col-12-xsmall'>
                <b>Date: </b>".$row['create_at']."
              </div>

              <div class='col-4 col-12-xsmall'>
                <b>Client Name: </b>".$row['full_name']."
              </div>
              <div class='col-4 col-12-xsmall'>
                <b>Phone Number: </b>".$row['tele']."
              </div>
              <div class='col-4 col-12-xsmall'>
                <b>Class/Group: </b>".$row['class']."
              </div>");

              echo nl2br("
              <div class='col-12 col-12-xsmall'>
                <b>Menus: </b></br>".$row['order_menus']."
              </div>
              ");

              echo ("
              <div class='col-3 col-12-xsmall'>
                <b>Price Total: </b>".$row['price_total']." Dhs
              </div>
              <div class='col-3 col-12-xsmall'>
                <b>Remise in %: </b>".$row['remise']."%
              </div>
              <div class='col-3 col-12-xsmall'>
                <b>Remise in Dhs: </b>".$row['price_remise']." Dhs
              </div>
              <div class='col-3 col-12-xsmall'>
                <b>Price Final: </b>".$row['price_final']." Dhs
              </div>

              <div class='col-12 col-12-xsmall'>
                <b>Note: </b>".$row['remarque']."
              </div>
            </div>
          </form>
         </section>");}
        
         ?>
          <ul class="actions">
            <li><a href="order_update_status.php?id=<?= $_GET['id'] ?>" type="submit" name="update" value="Update" class="green primary">Update Status</a></li>
            <!-- <li><a href="order_update.php?id=<?= $_GET['id'] ?>" type="submit" name="update" value="Update" class="button">Update</a></li> -->
            <li><a href="order_delete.php?id=<?= $_GET['id']?>" type="reset" onclick="return myConfirm();" name="delete" value="delete" class="button primary">Delete</a></li>
          </ul>
	
<script>
function myConfirm() {
  var result = confirm("Want to delete?");
  if (result==true) {
   return true;
  } else {
   return false;
  }
}
</script>

<?php include("./includes/sidebar.php"); ?>