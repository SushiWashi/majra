<?php include 'header.php' ?>

<div class="companyHeader" style="background-image:url('https://scontent.xx.fbcdn.net/t31.0-8/13938224_279117285793701_5749778601323322627_o.jpg');">
	<div class="darkBackground">
		<div class="grid-container">
			<div class="grid-80">
				<h1>limefish </h1>
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
				
            <ul>
					<li>Creative Agency</li>
					<li>Budaiya, Bahrain</li>
				</ul>
			</div>
			
			<div class="grid-20">
				<div class="displayPicture" style="background-image:url('https://scontent.xx.fbcdn.net/v/t1.0-9/12234957_195242300847867_9193053891343381776_n.png?oh=b7506a67050bd9037b4b1387cb1f94b0&oe=58785757')"></div>
			</div>
		</div>
	</div>
</div>


<div class="tab">
	<div class="grid-container">
		<ul>
			<li><a href="#top">Meet Limefish</a></li>
			<li><a href="#people">People</a></li> 
			<li><a href="#place">Place</a></li>  		
			<li><a href="#work">Work</a></li>  		
			<li><a href="#perks">Perks</a></li>                      
			<li><a href="#development">Development</a></li>
			<li><a href="#opportunities">Opportunities (99+)</a></li>
			<li><button class="followButton">FOLLOW</button></li>   
		</ul>
	</div>
</div>

<div class="grid-container">
	<div class="bigCard">
		<div class="bigVideo">
			<iframe width="960" height="540" src="https://www.youtube.com/embed/SQruGr1bijY" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="grid-100">
			<h3>A creative design studio in Bahrain, Doing what we love is the key concept of our story, we are a team of skilled designers, typographers, filmmakers, writers, photographers, and creators who find themselves combining their talents while working to create beautiful and functional designs.</h3>
		</div>
	</div>
</div>

<!-- People -->
<div class="grid-container">
	<div class="bigCard">
		<h1>
            <a name="people">The People</a><br> 
            <span>Total of people in team: 8</span>
        </h1>
		
        <h3 class="centre">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>

		<?php for($x = 0; $x < 3; $x++){?>
		<div class="grid-33">
            <div class="singlePerson">
                <div class="titlePerson">
                    <h1>Marshall Mathers</h1>
                    <h2>CEO</h2>
                </div>
            </div>
        </div>
		<?php } ?>
	</div>
</div>

<!-- The Place -->
<div class="grid-container">
	<div class="bigCard">
		<h1>
            <a name="place">The Place</a> 
        </h1>
		
        <h3 class="centre">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
        <div class="grid-100">
            <ul class="gridImages">
                <?php for($x=0; $x < 5; $x++){?>
                <div class="grid-33">
                <li></li>
                </div>
                <?php } ?>
            </ul>
        </div>
	</div>
</div>

<!-- The Work -->
<div class="grid-container">
	<div class="bigCard">
		<h1>
            <a name="work">The Work</a> 
        </h1>
		
        <h3 class="centre">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
        <div class="grid-100">
            <ul class="gridImages">
                <?php for($x=0; $x < 5; $x++){?>
                <div class="grid-33">
                <li></li>
                </div>
                <?php } ?>
            </ul>
        </div>
	</div>
</div>

<!-- The Perks -->
<div class="grid-container">
	<div class="bigCard">
		<h1>
            <a name="perks">The Perks</a> 
        </h1>
		
        <h3 class="centre">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
        <div class="grid-100">
            <ul class="gridImages">
                <?php for($x=0; $x < 5; $x++){?>
                <div class="grid-33">
                <li></li>
                </div>
                <?php } ?>
            </ul>
        </div>
	</div>
</div>

<!-- The Development -->
<div class="grid-container">
	<div class="bigCard">
		<h1>
            <a name="development">The Development</a> 
        </h1>
		
        <h3 class="centre">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
        <div class="grid-100">
            <ul class="gridImages">
                <?php for($x=0; $x < 5; $x++){?>
                <div class="grid-33">
                <li></li>
                </div>
                <?php } ?>
            </ul>
        </div>
	</div>
</div>

<!--Opportunities-->
<div class="opportunities">
    <div class="grid-container">    
    <div class="intro">
    <h1><a name="opportunities">Opportunities</a></h1>
    <h3 class="centre">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
</div>
        <form method="POST" action="">
				<div class="grid-30">
					<select name="type">
						<option value="all">All Types</option>
						<option value="a">Type A</option>
						<option value="b">Type B</option>
						<option value="c">Type C</option>
					</select>
				</div>
				
				<div class="grid-30">
					<select name="location">
						<option value="all">All locations</option>
						<option value="a">locations A</option>
						<option value="b">locations B</option>
						<option value="c">locations C</option>
					</select>
				</div>
				
				<div class="grid-30">
					<select name="industry">
						<option value="all">All Industries</option>
						<option value="a">Industries A</option>
						<option value="b">Industries B</option>
						<option value="c">Industries C</option>
					</select>
				
				</div>

				<div class="grid-10">
					<input type="submit" value="GO">
				</div>
			
			</form>

        <?php for($x = 0; $x < 6; $x++) {?>

		<div class="grid-33">
			<div class="card">
				<div class="cardImage">
					<?php 
    
                    $type = "startup";
                    $workingHours = "internship";
	
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
    
                    switch($workingHours) {
						case "fixed": 
							echo "<span class='workingHours' style='background:var(--green)'>full-time</span>";
							break;
						case "internship":
							echo "<span class='workingHours' style='background:var(--blue)'>internship</span>";
							break;
						default:
							echo "<span class='workingHours' style='background:var(--darkGray)'>part-time</span>";
                    }

					?>
                    
				</div>
                <div class="grid-100">
                    <h3><a href="companyProfile.php">Limefish</a></h3>
                    <h1>This will be 2 lines long..just because I can</h1>
                    <h3>Saar, Kingdom of Bahrain</h3>
                </div>
			</div>
		</div>

	<?php } ?>

</div>
    </div>
	
<?php include 'footer.php' ?>