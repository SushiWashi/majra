<?php include 'header.php' ?>

<div class="companyHeader">
	<div class="grid-container">

		<h1>limefish</h1>

		<ul>
			<li>Creative Agency</li>
			<li>Budaiya, Bahrain</li>
		</ul>

	</div>
</div>

<div class="tab">
	<div class="grid-container">
		<ul>
			<li>Meet Limefish</li>
			<li>People</li> 
			<li>Place</li>  		
			<li>Work</li>  		
			<li>Perks</li>                      
			<li>Development</li>    
			<li>Opportunities (99+)</li> 
			<li>FOLLOW</li>   
		</ul>
	</div>
</div>

<div class="grid-container">
	<div class="bigCard">
		<div class="bigVideo"><iframe width="960" height="540" src="https://www.youtube.com/embed/SQruGr1bijY" frameborder="0" allowfullscreen></iframe></div>
		<h3>A creative design studio in Bahrain, Doing what we love is the key concept of our story, we are a team of skilled designers, typographers, filmmakers, writers, photographers, and creators who find themselves combining their talents while working to create beautiful and functional designs.</h3>
	</div>
</div>


<div class="grid-container">
	<div class="bigCard">
		<h1>The People <span># of people in team: 8</span></h1>
		<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>

		<?php for($x = 0; $x < 3; $x++){?>
		<div class="grid-33">
			<div class="singlePerson">

				<div class="titlePerson">
					<h1>name</h1>
					<h2>position</h2>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
<?php include 'footer.php' ?>