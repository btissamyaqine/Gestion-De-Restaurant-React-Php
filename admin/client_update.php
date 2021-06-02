<?php include_once '../config/connection.php';?>
<?php include("./includes/header.php"); ?>


<?php
if(isset($_POST['update'])){
	$id_client = $_POST['id_client'];
	$full_name = $_POST['full_name'];
  $class=$_POST['class']!="Class"?$_POST['class']:"";
  $group=$_POST['group']!="Group"?$_POST['group']:"";
	$gender = $_POST['gender'];
	$tele = $_POST['tele'];
	$email = $_POST['email'];
	$facebook = $_POST['facebook'];
	$date_naissance = $_POST['date_naissance'];
	$business_adress = $_POST['business_adress'];
	$home_adress = $_POST['home_adress'];
	$remarque = $_POST['remarque'];

  $query = "UPDATE `client` SET `full_name`=?, `class`=?, `group`=? ,`gender`=?, `tele`=?, `email`=?, `facebook`=?, `date_naissance`=?, `business_adress`=?, `home_adress`=?, `remarque`=? WHERE `id_client`=?";
  $query = $db->prepare($query);
  if ($query->execute([$full_name, $class, $group, $gender, $tele, $email, $facebook, $date_naissance, $business_adress, $home_adress, $remarque,$id_client])) {
    echo "
      <script>
        const msg = 'Done.';
        window.location.href='client_list.php?msg='+msg;
      </script>
      ";
  } else {
    echo "
      <script>
        const msg = 'Sorry, something went wrong!';
        window.location.href='client_list.php?msg='+msg;
      </script>
      ";
  }
}
?>	

 <?php
$sql = 'SELECT * FROM `client` WHERE `id_client` like "'.$_GET['id'].'"';
$result = $db->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
?>
            <section>
            <header class="main">
              <h1>client update</h1>
            </header>
            <form method="post" action="client_update.php">
              <input type="hidden" name="id_client" value="<?php if (isset($row['id_client'])) echo $row["id_client"]; ?>" />
              <div class="row gtr-uniform">
                  <div class="col-3 col-12-xsmall">
                    <input type="text" name="full_name" value="<?php if (isset($row['full_name'])) echo $row['full_name']; ?>" placeholder="Full Name" required  />
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
                    <select name="gender" id="demo-group" >
                      <?php if (isset($row["gender"])) echo '<option selected value="'.htmlspecialchars(trim($row["gender"])).'"> '.htmlspecialchars(trim($row["gender"]))."</option>" ; ?>
                      <option value="">Choose a Gender</option>
                      <option value="masculine">masculine</option>
                      <option value="feminine">Feminine</option>
                    </select>
                  </div>
                  <div class="col-3 col-12-xsmall">
                    <input type="text" name="tele" placeholder="Tele" value="<?php if (isset($row['tele'])) echo $row['tele']; ?>" />
                  </div>
                  <div class="col-3 col-12-xsmall">
                    <input type="email" name="email" placeholder="Email" value="<?php if (isset($row['email'])) echo $row['email']; ?>" />
                  </div>
                  <div class="col-3 col-12-xsmall">
                    <input type="text" name="facebook" placeholder="Facebook" value="<?php if (isset($row['facebook'])) echo $row['facebook']; ?>" />
                  </div>
                  <div class="col-3 col-12-xsmall">
                    <input type="date" name="date_naissance" value="<?php if (isset($row['date_naissance'])) echo $row['date_naissance']; ?>" />
                  </div>

                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="business_adress" placeholder="Business Address" value="<?php if (isset($row['business_adress'])) echo $row['business_adress']; ?>" />
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="home_adress" placeholder="Home Address" value="<?php if (isset($row['home_adress'])) echo $row['home_adress']; ?>" />
                  </div>
                
                  <div class="col-12 col-12-xsmall">
                    <textarea id="w3review" name="remarque" rows="4" cols="50" placeholder="Remarque" ><?php if (isset($row['remarque'])) echo $row['remarque']; ?></textarea>
                  </div>
                  <ul class="actions">
                    <li><input type="submit" name="update" value="Update" class="special" /></li>
                  </ul>
              </div>
          </form>
      </section>
  <?php include("./includes/sidebar.php"); ?>
