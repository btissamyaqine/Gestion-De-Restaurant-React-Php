<?php include("./includes/header.php"); ?>

							<!-- Home Section -->


							<!-- Line in end of Section -->
	<section> 
			<form method="post" action="menu_add.php">
					<div class="row gtr-uniform">
						<div class="col-3 col-12-xsmall">
							<input type="text" name="name_menu" placeholder="Menu Name"/>
						</div>
						<div class="col-3 col-12-xsmall">
							<input type="text" name="prix_menu" placeholder="Price" />
						</div>
						<div class="col-12">
							<input type="submit" name="submit" value="submit" class="primary" />
					</div>
				</form>
	</section>



<!-- Sidebar -->
<?php include("./includes/sidebar.php"); ?>
