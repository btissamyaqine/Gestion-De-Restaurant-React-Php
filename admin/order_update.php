<?php include_once '../config/connection.php';?>
<?php include("./includes/header.php"); ?>


<?php
if(isset($_POST['update'])){
  isset($_POST["id_client"]) ? $id_client = htmlspecialchars($_POST["id_client"]) : "";
  isset($_POST["full_name"]) ? $full_name = htmlspecialchars($_POST["full_name"]) : "";
  isset($_POST["tele"]) ? $tele = htmlspecialchars($_POST["tele"]) : "";
  isset($_POST["class"]) ? $class = htmlspecialchars($_POST["class"]) : "";
  isset($_POST["status"]) ? $class = htmlspecialchars($_POST["status"]) : "";
  isset($_POST["remarque"]) ? $remarque = htmlspecialchars($_POST["remarque"]) : "";
  isset($_POST["remise"]) ? $remise = htmlspecialchars($_POST["remise"]) : "";
  isset($_POST["order_menus"]) ? $status = htmlspecialchars($_POST["order_menus"]) : "";
  isset($_POST["price_remise"]) ? $status = htmlspecialchars($_POST["price_remise"]) : "";
  isset($_POST["price_total"]) ? $status = htmlspecialchars($_POST["price_total"]) : "";
  isset($_POST["price_final"]) ? $status = htmlspecialchars($_POST["price_final"]) : "";





  $query = "UPDATE `client` SET `full_name`=?, `tele`=?, `class`=? ,`status`=?, `remarque`=?, `remise`=?, `order_menus`=?, `price_total`=?, `price_remise`=?, `price_final`=? WHERE `id_order`=?";
  $query = $db->prepare($query);
  if ($query->execute([$full_name, $tele, $class, $status, $remarque, $remise, $order_menus,$price_remise, $price_total, $price_final])) {
    echo "
      <script>
        const msg = 'Done.';
        window.location.href='order_list.php?msg='+msg;
      </script>
      ";
  } else {
    echo "
      <script>
        const msg = 'Sorry, something went wrong!';
        window.location.href='order_list.php?msg='+msg;
      </script>
      ";
  }
}
?>	

 <?php
$sql = 'SELECT * FROM `orders`';
$result = $db->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
?>
            <section>
            <header class="main">
              <h1>client update</h1>
            </header>
            <form method="post" action="order_update.php">
              <input type="hidden" name="id_order" value="<?php if (isset($row['id_order'])) echo $row["id_order"]; ?>" />
              <div class="row gtr-uniform">
                  <div class="col-3 col-12-xsmall">
                    <input type="text" name="full_name" value="<?php if (isset($row['full_name'])) echo $row['full_name']; ?>" placeholder="Full Name" required  />
                  </div>
                  <div class="col-3 col-12-xsmall">
                    <input type="text" name="tele" placeholder="Tele" value="<?php if (isset($row['tele'])) echo $row['tele']; ?>" />
                  </div>
                  <div class="col-3 col-12-xsmall">
                    <select name="class" id="demo-group">
                      <?php if (isset($row["class"])) echo '<option selected value="'.htmlspecialchars(trim($row["class"])).'"> '.htmlspecialchars(trim($row["class"]))."</option>" ; ?>
                      <option value="">Choose a Class</option>
                      <option value="PS">PS</option>
                      <option value="MS">MS</option>
                      <option value="GS">GS</option>
                      <option value="CP">CP</option>
                      <option value="CE1">CE1</option>
                      <option value="CE2">CE2</option>
                      <option value="CM1">CM1</option>
                      <option value="CM2">CM2</option>
                      <option value="CE6">CE6</option>
                    </select>
                  </div>
                  <div class="col-3 col-12-xsmall">
                    <select name="group" id="demo-group" >
                      <?php if (isset($row["group"])) echo '<option selected value="'.htmlspecialchars(trim($row["group"])).'"> '.htmlspecialchars(trim($row["group"]))."</option>" ; ?>
                      <option value="">Choose a Group</option>
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
                    </select>
                  </div>
                  <div class="col-3 col-12-xsmall">
                    <input type="text" name="remarque" placeholder="remarque" value="<?php if (isset($row['remarque'])) echo $row['remarque']; ?>" />
                  </div>
                  <div class="col-3 col-12-xsmall">
                    <input type="number" name="remise" placeholder="remise" value="<?php if (isset($row['remise'])) echo $row['remise']; ?>" />
                  </div>
                  <div class="col-3 col-12-xsmall">
                    <input type="text" name="order_menus" value="<?php if (isset($row['order_menus'])) echo $row['order_menus']; ?>" />
                  </div>

                  <div class="col-6 col-12-xsmall">
                    <input type="number" name="price_total" placeholder="price_total " value="<?php if (isset($row['price_total'])) echo $row['price_total']; ?>" />
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="number" name="price_remise" placeholder="price_remise" value="<?php if (isset($row['price_remise'])) echo $row['price_remise']; ?>" />
                  </div>
                
                  <div class="col-6 col-12-xsmall">
                    <input type="number" name="price_final" placeholder="price_final" value="<?php if (isset($row['price_final'])) echo $row['price_final']; ?>" />
                  </div><br>
                  <ul class="actions">
                    <li><input type="submit" name="update" value="Update" class="special" /></li>
                  </ul>
              </div>
          </form>
      </section>
  <?php include("./includes/sidebar.php"); ?>
