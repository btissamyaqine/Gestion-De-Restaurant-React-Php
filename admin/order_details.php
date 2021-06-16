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
$sql = "SELECT * FROM `order` WHERE `id_order` like ".$_GET['id']."";
$result = $db->query($sql);
 while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '
        <section>
          <header class="main">
            <h1>Client details</h1>
          </header>
          <form method="post" action="client_add.php">
            <div class="row gtr-uniform">
                  <div class="col-3 col-12-xsmall">
                    <input type="text" name="full_name" value="'.$row["full_name"].'" placeholder="Full Name" required disabled />
                  </div>
                  <div class="col-3 col-12-xsmall">
                    <input type="text" name="class" id="demo-group" value="'.$row["tele"].'" disabled />
                  </div>
                  <div class="col-3 col-12-xsmall">
                    <input type="text" name="group" id="demo-group" value="'.$row["class"].'" disabled />
                  </div>
                  <div class="col-3 col-12-xsmall">
                    <input type="text" name="gender" id="demo-group" value="'.$row["status"].'" disabled />
                  </div>
                  <div class="col-3 col-12-xsmall">
                    <input type="text" name="tele" placeholder="Tele" value="'.$row["remarque"].'" disabled/>
                  </div>
                  <div class="col-3 col-12-xsmall">
                    <input type="email" name="email" placeholder="Email" value="'.$row["remise"].'" disabled/>
                  </div>
                  <div class="col-3 col-12-xsmall">
                    <input type="text" name="facebook" placeholder="Facebook" value="'.$row["order_menus"].'" disabled/>
                  </div>
                  <div class="col-3 col-12-xsmall">
                    <input type="text" name="date_naissance" value="'.$row["price_total"].'" disabled/>
                  </div>

                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="business_adress" placeholder="Business Address" value="'.$row["price_remise"].'" disabled/>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="home_adress" placeholder="Home Address" value="'.$row["price_final"].'" disabled/>
                  </div>
              </div>
          </form>

         </section>';}
        
         ?>
          <ul class="actions">
            <li><a href="order_update.php?id=<?= $_GET['id'] ?>" type="submit" name="update" value="Update" class="button primary">Update</a></li>
            <li><a href="order_delete.php?id=<?= $_GET['id']?>" type="reset" onclick="return myConfirm();" name="delete" value="delete" class="button">Delete</a></li>
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