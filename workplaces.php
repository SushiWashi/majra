<?php include 'header.php'; ?>

<div class="filter">
	<div class="darkBackground">
		<div class="grid-container">
            <div class="grid-35 mobile-grid-100">
    			<h1>Get an inside look at the best companies out there.</h1>
            </div>
		</div>
	</div>

	<div class="search">
		<div class="grid-container">
			<form method="POST" action="">
				<div class="grid-20 mobile-grid-100">
					<select name="industries">
						<option value="all">All Industries</option>
						<option value="a">Industry A</option>
						<option value="b">Industry B</option>
						<option value="c">Industry C</option>
					</select>
				</div>
				
				<div class="grid-20 mobile-grid-100">
					<select name="size">
						<option value="all">All Sizes</option>
						<option value="a">Size A</option>
						<option value="b">Size B</option>
						<option value="c">Size C</option>
					</select>
				</div>
				
				<div class="grid-20 mobile-grid-100">
					<select name="location">
						<option value="all">All Location</option>
						<option value="a">Location A</option>
						<option value="b">Location B</option>
						<option value="c">Location C</option>
					</select>
				</div>

				<div class="grid-10 mobile-grid-100">
					<input type="submit" class="button orange" value="GO">
				</div>
                
                <hr>
                
				<div class="grid-20 mobile-grid-100">
					<input type="text" placeholder="Search..">
				</div>
			
			</form>
		</div>
	</div>
</div>

<div class="grid-container">
    <?php for($x=0; $x <= 2; $x++) {?>
	<div class="grid-33">
		<div class='card'>
            <div class='cardImage'>
				<?php sizeOfCompany(); ?>
                <div class="logo"><a href="companyProfile.php"></a></div>
            </div>
            <section>
                <h3>CREATIVE AGENCY</h3>
                <h1><a href="companyProfile.php">Limefish</a></h1>
                <h3>Saar, Kingdom of Bahrain</h3>
                <a href="#" class="button orange">follow +</a>
            </section>
        </div>
	</div>
	<?php } ?>
</div>


<?php include 'footer.php'; ?>