<?php include 'header.php'; ?>

<div class="companyHeader">
	<div class="darkBackground">
		<div class="grid-container">
			<div class="grid-80">
				<h1>Nazar Abubaker</h1>
				
            <ul>
					<li>Budaiya, Bahrain</li>
					<li>March 1, 1991</li>
					<li>Bahraini</li>
				</ul>
			</div>
			
			<div class="grid-20">
				<div class="displayPicture" style="background-image:url('https://scontent.xx.fbcdn.net/v/t1.0-9/12400833_10154562872153079_6701585415440007239_n.jpg?oh=dd0b1295db330d9c8eb1a45e5976f68a&oe=586AB64F')"></div>
			</div>
		</div>
	</div>
</div>

<div class="grid-container">

	<div class="grid-50">
		<div class="card userCard">
			<div class="grid-100">
			<h1>Preferences</h1>
			
			<h3>Company Preferences</h3>
			<h4>Size of Company</h4>
			<ul>
				<li>Start-up</li>
				<li>Small</li>
			</ul>
			
			<h4>Location</h4>
			<ul>
				<li>Bahrain</li>
				<li>UAE</li>
				<li>Saudi Arabia</li>
			</ul>
		
			<h4>Industry</h4>
			<ul>
				<li>Accounting</li>
				<li>Animation</li>
				<li>Computer Software</li>
			</ul>		
			
			<h3>Job Preferences</h3>
			<h4>Type of Job</h4>
			<ul>
				<li>Full-time</li>
				<li>Internship</li>
			</ul>
			
			<h4>Working Hours</h4>
			<ul>
				<li>Fixed</li>
			</ul>
		
			</div>
		</div>
	</div>
	
	<div class="grid-50">
		<div class="card userCard">
			<div class="grid-100">
			<h1>Education</h1>
			
			<?php for($x=0; $x < 4; $x++) {?>
			<span>2014</span>
			<h2>Bachelor of Awesomeness</h2>
			<h4>Universty of McAwesome</h4>
			<?php } ?>
		
			</div>
		</div>
	</div>

	<div class="grid-100">
		<div class="card userCard">
			<div class="grid-100">
				<h1>Experience</h1>
				
				<?php for($x=0; $x < 3; $x++) {?>
				<span>2014</span>
				<h2>Bachelor of Awesomeness</h2>
				<h4>Aug 2015 - Aug 2016 (1 year)</h4>
				<p>Company W.L.L.</p>
				<p>Manama, Bahrain</p>
				
				<h3>What did I learn?</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porta, tellus vel viverra tincidunt, sem erat molestie orci, tincidunt dignissim nibh risus id nibh. Morbi dapibus sapien nec est ornare sollicitudin. Sed lobortis, eros ut accumsan lacinia, dui risus lobortis mi, vel finibus orci ante a orci. </p>
				
				<h3>What did I achieve?</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porta, tellus vel viverra tincidunt, sem erat molestie orci, tincidunt dignissim nibh risus id nibh. Morbi dapibus sapien nec est ornare sollicitudin. Sed lobortis, eros ut accumsan lacinia, dui risus lobortis mi, vel finibus orci ante a orci. Etiam fermentum urna et ex auctor, quis pharetra leo viverra. Pellentesque non blandit tellus, quis placerat elit. Cras mollis urna nulla, a condimentum justo vulputate et. Maecenas erat sapien, tincidunt quis commodo id, fermentum et risus. Sed sollicitudin sagittis diam, id posuere urna congue fringilla. Sed feugiat imperdiet lobortis. Maecenas consectetur nibh vitae imperdiet dignissim. Vivamus a diam pulvinar, dapibus ante nec, posuere odio. Sed mi ante, iaculis at feugiat suscipit, tincidunt non urna. Proin non ullamcorper arcu.</p>
				<br>
				<?php } ?>

			</div>
		</div>
	</div>

	</div>
	
<?php include 'footer.php'; ?>