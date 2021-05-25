<?php include("./includes/header.php"); ?>

<section>
	<header class="main">
		<h1>New Client</h1>
	</header>
	<form method="post" action="#">

		<div class="row gtr-uniform">
			<div class="col-3 col-12-xsmall">
				<input type="text" name="name" placeholder="Full Name" />
			</div>
			<div class="col-3 col-12-xsmall">
				<input type="text" name="name" placeholder="Group" />
			</div>
			<div class="col-3 col-12-xsmall">
				<input type="text" name="name" placeholder="Classe" />
			</div>
			<div class="col-3 col-12-xsmall">
				<select name="demo-group" id="demo-group">
					<option selected>Gender</option>
					<option value="masculine">masculine</option>
					<option value="feminine">Feminine</option>
				</select>
			</div>

			<div class="col-3 col-12-xsmall">
				<input type="text" name="name" placeholder="Tele" />
			</div>
			<div class="col-3 col-12-xsmall">
				<input type="email" name="name" placeholder="Email" />
			</div>
			<div class="col-3 col-12-xsmall">
				<input type="text" name="name" placeholder="Facebook" />
			</div>
			<div class="col-3 col-12-xsmall">
				<input type="date" name="name" placeholder="Date naiss" />
			</div>

			<div class="col-6 col-12-xsmall">
				<input type="text" name="name" placeholder="Business Address" />
			</div>
			<div class="col-6 col-12-xsmall">
				<input type="email" name="name" placeholder="Home Address" />
			</div>
		
			<div class="col-12 col-12-xsmall">
				<textarea id="w3review" name="w3review" rows="4" cols="50" placeholder="Remarque"></textarea>
			</div>

			<div class="col-12">
					<ul class="actions">
							<li><input type="submit" value="append" class="primary" /></li>
					</ul>
			</div>
		</div>
	</form>
</section>

<!-- Line in end of Section -->
<section> </section>



<!-- Sidebar -->
<?php include("./includes/sidebar.php"); ?>
