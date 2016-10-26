<?php include '../header.php';?>

<div class="grid-container">
	<div class="grid-100 mobile-grid-100 bigCard">
		<div class="grid-25 mobile-grid-100 aboutSideBar">
			
				<h3 style="text-align:left">Limefish</h3>
				
				<ul>
					<li><a href="?page=addOpportunity">Add New Opportunity</a></li>
					<li><a href="?page=viewApp">View Applicants & Matches</a></li>
				</ul>
        </div>

		<div class="grid-75 mobile-grid-100 content">
                <section>
			<?php 
			$p = $_GET['page'];
			$header = "<h1 class='header'>" .$p. "</h1>";
			
			switch($p) {
				//About Us
				case 'addOpportunity':
					echo $header;
					include('addOpportunity.php');
					break;
				case 'viewApp':
					echo $header;
					include('viewApp.php');
					break;
				// Default
				default:
					echo $header;
					include('addOpportunity.php');
			}
			?>
            </section>
		</div>
	</div>
</div>



<?php include '../footer.php'; ?>