<?php include 'header.php'; ?>

<div class="filter">
	<div class="darkBackground">
		<div class="grid-container">
			<h1 class="grid-35">Get an <span>inside look</span> at the best companies out there</h1>
		</div>
	</div>

	<div class="search">
		<div class="grid-container">
			<form method="POST" action="">
				<div class="grid-20">
					<select name="industries">
						<option value="all">All Industries</option>
						<option value="a">Industry A</option>
						<option value="b">Industry B</option>
						<option value="c">Industry C</option>
					</select>
				</div>
				
				<div class="grid-20">
					<select name="size">
						<option value="all">All Sizes</option>
						<option value="a">Size A</option>
						<option value="b">Size B</option>
						<option value="c">Size C</option>
					</select>
				</div>
				
				<div class="grid-20">
					<select name="location">
						<option value="all">All Location</option>
						<option value="a">Location A</option>
						<option value="b">Location B</option>
						<option value="c">Location C</option>
					</select>
				
				</div>

				<div class="grid-10">
					<input type="submit" value="GO">
				</div>

				<div class="grid-20">
					<input type="text" placeholder="Search..">
				</div>
			
			</form>
		</div>
	</div>
</div>

<div class="grid-container">
	<?php for($x=0; $x <= 5; $x++) {?>
	<div class="grid-33">
		<div class='card'>
            <div class='cardImage'>
					<?php 
    
                    $type = "startup";
	
					switch($type) {
						case "startup": 
							echo "<span class='type' style='background:var(--green)'>startup</span>";
							break;
						case "sme":
							echo "<span class='type' style='background:var(--blue)'>sme</span>";
							break;
						default:
							echo "<span class='type' style='background:var(--darkGrey)'>enterprise</span>";
					}

					?>                
                <div class="logo"></div>
            </div>
            <div class="grid-100">
                    <h3>CREATIVE AGENCY</h3>
                    <h1><a href="companyProfile.php">Limefish</a></h1>
                    <h3>Saar, Kingdom of Bahrain</h3>
                    <br>
                    <a href="" class="followButton">follow +</a>
            </div>
        </div>
	</div>
	<?php } ?>
</div>


<?php include 'footer.php'; ?>