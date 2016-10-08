<?php include '../header.php';?>

<div class="grid-container">
	<div class="grid-100 bigCard">

		<div class="grid-25">
			<div class="aboutSideBar">
			
				<h3 style="text-align:left">about us</h3>
				
				<ul>
					<li><a href="?page=company">company</a></li>
					<li><a href="?page=faq">faq</a></li>
					<li><a href="?page=careers">careers</a></li>
					<li><a href="?page=contact">contact us</a></li>
				</ul>
				
				<h3 style="text-align:left">legal</h3>
				
				<ul>
					<a href="?page=terms"><li>terms of use</li></a>
				</ul>
				
				</div>
		</div>

		<div class="grid-75">
			<div class="content">
			<?php 
			$p = $_GET['page'];
			$header = "<h1 style='margin-top:1em'>" .$p. "</h1>";

			
			switch($p) {
				//About Us
				case 'company':
					echo $header;
					include('company.php');
					break;
				case 'faq':
					echo $header;
					include('faq.php');
					break;
				case 'careers':
					echo $header;
					include('careers.php');
					break;
				case 'contact':
					echo $header;
					include('contact.php');
					break;
				// Legal
				case 'terms':
					echo $header;
					include('terms.php');
					break;
				// Default
				default:
					echo $header;
					include('company.php');
			}
			?>
			</div>
		</div>

	</div>
</div>



<?php include '../footer.php'; ?>