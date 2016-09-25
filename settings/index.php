<?php include '../header.php';?>

<div class="grid-container">
	<div class="grid-100 bigCard">

		<div class="grid-25">
			<div class="aboutSideBar">
			
				<h3>Nazar Abubaker</h3>
				
				<ul>
					<li><a href="?page=general">general</a></li>
					<li><a href="?page=security">security</a></li>
					<li><a href="?page=notifications">notifications</a></li>
					<li><a href="#">log out</a></li>
				</ul>
				
				</div>
		</div>

		<div class="grid-75">
			<div class="content">
			<?php 
			$p = $_GET['page'];
			$header = "<h1>" .$p. "</h1>";
			
			switch($p) {
				//About Us
				case 'general':
					echo $header;
					include('general.php');
					break;
				case 'security':
					echo $header;
					include('security.php');
					break;
				case 'notifications':
					echo $header;
					include('notifications.php');
					break;
				// Default
				default:
					echo $header;
					include('general.php');
			}
			?>
			</div>
		</div>

	</div>
</div>



<?php include '../footer.php'; ?>