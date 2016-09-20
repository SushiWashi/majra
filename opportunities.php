<?php include 'header.php'; ?>

<div class="grid-container">

	<?php for($x = 0; $x <= 8; $x++) {?>

		<div class="grid-33">
			<div class="card">
				<div class="cardImage">
					<?php 

					$type = 's';

					switch($type) {
						case "startup": 
							echo "<span style='background:white'>startup</span>";
							break;
						case "sme":
							echo "<span style='background:var(--blue)'>sme</span>";
							break;
						default:
							echo "<span style='background:var(--darkGrey)'>enterprise</span>";
					}

					?>
				</div>
				<h3><a href="companyProfile.php">Limefish</a></h3>
				<h1>This will be 2 lines long..just because I can</h1>
				<h3 class="location">Saar, Kingdom of Bahrain</h3>
			</div>
		</div>

	<?php } ?>

</div>
<?php include 'footer.php'; ?>