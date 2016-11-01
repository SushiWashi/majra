<?php include 'header.php'; ?>
<div class="filter">
	<div class="darkBackground">
		<div class="grid-container">
			<h1 class="grid-45 mobile-grid-100">Jobs, internships, projects, everything you need to build an awesome career is right here</h1>
		</div>
	</div>

	<div class="search">
		<div class="grid-container">
			<form method="POST" action="">
				<div class="grid-20">
					<select name="type">
						<option value="all">All Types</option>
						<option value="a">Type A</option>
						<option value="b">Type B</option>
						<option value="c">Type C</option>
					</select>
				</div>
				
				<div class="grid-20">
					<select name="location">
						<option value="all">All locations</option>
						<option value="a">locations A</option>
						<option value="b">locations B</option>
						<option value="c">locations C</option>
					</select>
				</div>
				
				<div class="grid-20">
					<select name="industry">
						<option value="all">All Industries</option>
						<option value="a">Industries A</option>
						<option value="b">Industries B</option>
						<option value="c">Industries C</option>
					</select>
				
				</div>

				<div class="grid-10">
					<input type="submit" class="button orange" value="GO">
				</div>

                <hr>
                
				<div class="grid-20">
					<input type="text" placeholder="Search..">
				</div>
			
			</form>
		</div>
	</div>
</div>

<div class="grid-container">
	<?php for($x = 0; $x <= 8; $x++) {?>

		<div class="grid-33">
			<div class="card">
				<div class="cardImage">
					<?php sizeOfCompany(); workHours();?>
         		</div>
                <section>
                    <h3><a href="companyProfile.php">Limefish</a></h3>
                    <h1><a class="dark" href="opportunities-single.php">This will be 2 lines long..just because I can</a></h1>
                    <h3>Saar, Kingdom of Bahrain</h3>
                </section>
			</div>
		</div>

	<?php } ?>
    <div class="clearfix"></div>

    
</div>
<?php include 'footer.php'; ?>