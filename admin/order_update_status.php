<?php
include_once '../config/connection.php';
?>

<?php
if(isset($_POST['update'])){
  isset($_POST["id_order"]) ? $id_order = htmlspecialchars($_POST["id_order"]) : "";
  isset($_POST["status"]) ? $status = htmlspecialchars($_POST["status"]) : "";

  $query = "UPDATE `orders` SET `status`=? WHERE `id_order`=?";
  $query = $db->prepare($query);
  if ($query->execute([$status, $id_order])) {
    echo "
      <script>
        const msg = 'Done.';
        window.location.href='order_details.php?id=".$id_order."';
      </script>
      ";
  } else {
    echo "
      <script>
        const msg = 'Sorry, something went wrong!';
        window.location.href='order_details.php?id=".$id_order.";
      </script>
      ";
  }
}
?>

<?php 
  include("./includes/header.php"); 

  $sql = "SELECT * FROM `orders` WHERE `id_order` like ".$_GET['id']."";
  $result = $db->query($sql);
  $row = $result->fetch(PDO::FETCH_ASSOC)
?>   
        <section>
          <form method='post' action='order_update_status.php'>
          <input type="hidden" name="id_order" value="<?= $row['id_order'] ?>" />
            <header class='main'>
              <h3>Order details</h3>
            </header>
            <div class="row gtr-uniform">
              <div class="col-6 col-12-xsmall">
                <select name="status" id="demo-group">
                  <?php if (isset($row["status"])) echo '<option selected value="'.htmlspecialchars(trim($row["status"])).'"> '.htmlspecialchars(trim($row["status"]))."</option>" ; ?>
                  <option value="Delivered">Pending</option>
                  <option value="Delivered">Delivered</option>
                  <option value="Canceled">Canceled</option>
                  <option value="Archived">Archived</option>
                </select>
              </div>
              <div class='col-6 col-12-xsmall'>
                <b>Date: </b><?= $row['create_at'] ?>
              </div>

              <div class='col-4 col-12-xsmall'>
                <b>Client Name: </b><?= $row['full_name'] ?>
              </div>
              <div class='col-4 col-12-xsmall'>
                <b>Phone Number: </b><?= $row['tele'] ?>
              </div>
              <div class='col-4 col-12-xsmall'>
                <b>Class/Group: </b><?= $row['class'] ?>
              </div>
              
              <div class='col-12 col-12-xsmall'>
                <b>Menus: </b></br><?php echo nl2br($row['order_menus']); ?>
              </div>

              <div class='col-3 col-12-xsmall'>
                <b>Price Total: </b><?= $row['price_total'] ?> Dhs
              </div>
              <div class='col-3 col-12-xsmall'>
                <b>Remise in %: </b><?= $row['remise'] ?>%
              </div>
              <div class='col-3 col-12-xsmall'>
                <b>Remise in Dhs: </b><?= $row['price_remise'] ?> Dhs
              </div>
              <div class='col-3 col-12-xsmall'>
                <b>Price Final: </b><?= $row['price_final'] ?> Dhs
              </div>

              <div class='col-12 col-12-xsmall'>
                <b>Note: </b><?= $row['remarque'] ?>
              </div>
            </div>
            <ul class="actions">
              <li><input type="submit" name="update" value="Update Status" class="green" /></li>
            </ul>
          </form>
        </section>


<?php include("./includes/sidebar.php"); ?>