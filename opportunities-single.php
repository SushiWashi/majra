<?php include 'header.php'; ?>
<div class="crumb">
	<div class="grid-container">
		<p style="color:var(--lightGray); float:left;">
			<a href="/majra/">Home</a> /
			<a href="opportunities.php">Find Opportunities </a> / 
			<a href="companyProfile.php">Limefish </a> / 
			Web Designer
		</p>
		
	</div>
</div>



<div class="grid-container">
	<div class="grid-30">
		<div class="displayPicture">
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
							echo "<span class='type' style='background:var(--darkGray)'>enterprise</span>";
					}

					?>   
		</div>
		<h2 class="nameOfCompany"><a href="companyProfile.php">Limefish</a></h2>
		<hr>
		<ul class="moreOpportunities">
			<?php for($x=1;$x < 10; $x++) {
				echo "<li><a href='#'>Technical Creative Director - Engine Group $x</a></li>";
			} ?>
	</div>

	<div class="grid-70">
			<div class="card opportunityCard">
			<div class="cardImage" style="background-image:url('http://www.cytheraco.com/wp-content/uploads/2016/08/web-design.png')">
			
			<button style="bottom:0;  right:0; position:absolute">APPLY NOW</button>

			</div>
			
				<div class="grid-100">
				
				<h1>Technical Creative Director - Engine Group</h1>
				
				<h3>Description</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec condimentum sollicitudin nisl in feugiat. Proin fermentum interdum nulla, in porttitor diam sagittis vel. Sed et lectus vel elit vestibulum imperdiet sit amet tempus tellus. Nulla vitae nisi nulla. Nunc leo nisi, feugiat quis tristique at, commodo vel urna. Integer euismod lacus ac viverra congue. Curabitur sed semper turpis. Praesent dapibus nibh vel porttitor tempus. Suspendisse ac lacus sit amet lorem varius vestibulum a ut risus. Etiam suscipit orci id quam lacinia posuere. Integer et nisi mollis, dapibus arcu quis, luctus diam.</p>
				
				<h3>Responsibilities</h3>
				<ul>
					<li>List 1</li>
					<li>List 2</li>
					<li>List 3</li>
					<li>List 4</li>
				</ul>
				
				<h3>Goals</h3>
				<ul>
					<li>List 1</li>
					<li>List 2</li>
					<li>List 3</li>
					<li>List 4</li>
				</ul>
					
				<h3>What we're looking for</h3>
				<ul>
					<li>List 1</li>
					<li>List 2</li>
					<li>List 3</li>
					<li>List 4</li>
				</ul>
				
				</div>
			</div>
	</div>
</div>
<?php include 'footer.php'; ?>