<?php include 'header.php' ?>

<div class="companyHeader" style="background-image:url('https://scontent.xx.fbcdn.net/t31.0-8/13938224_279117285793701_5749778601323322627_o.jpg');">
	<div class="darkBackground">
		<div class="grid-container">
			<div class="grid-80 mobile-grid-100">
                <br class="hide-on-desktop"><br class="hide-on-desktop"><br class="hide-on-desktop">


                	<div class="displayPicture hide-on-desktop" style="background-image:url('https://scontent.xx.fbcdn.net/v/t1.0-9/12234957_195242300847867_9193053891343381776_n.png?oh=b7506a67050bd9037b4b1387cb1f94b0&oe=58785757')"></div>
				<h1 class="mainHeader">limefish </h1>
				<?php sizeOfCompany(); ?>   
                
                <ul>
					<li>Creative Agency</li>
					<li>Budaiya, Bahrain</li>
				</ul>
			</div>
			
			<div class="grid-20 hide-on-mobile">
				<div class="displayPicture" style="background-image:url('https://scontent.xx.fbcdn.net/v/t1.0-9/12234957_195242300847867_9193053891343381776_n.png?oh=b7506a67050bd9037b4b1387cb1f94b0&oe=58785757')"></div>
			</div>
		</div>
	</div>
</div>


<div class="tab">
	<div class="grid-container">
        <div class="grid-100">
            <ul>
                <li><a href="#top">Meet Limefish</a></li>
                <li><a href="#people">People</a></li> 
                <li><a href="#place">Place</a></li>  		
                <li><a href="#work">Work</a></li>  		
                <li><a href="#perks">Perks</a></li>                      
                <li><a href="#development">Development</a></li>
                <li><a href="#opportunities">Opportunities (99+)</a></li>
                <li><button class="button orange">FOLLOW</button></li>   
            </ul>
        </div>
	</div>
</div>

<div class="grid-container">
	<div class="bigCard">
		<h1 class="mainHeader">
            <a name="overview">Meet Limefish</a><br> 
        </h1>
		<div class="grid-30">
			<h3>A creative design studio in Bahrain, Doing what we love is the key concept of our story, we are a team of skilled designers, typographers, filmmakers, writers, photographers, and creators who find themselves combining their talents while working to create beautiful and functional designs.</h3>
		</div>
		<div class="grid-70">
			<iframe style="margin-bottom:1em" width="650" height="366" src="https://www.youtube.com/embed/SQruGr1bijY" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>

<!-- People -->
<div class="grid-container thePeople">
	<div class="bigCard">
		<h1 class="mainHeader">
            <a name="people">The People</a><br> 
            <span>Total of people in team: 8</span>
        </h1>
		
        <h3 class="centre">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>

		<?php for($x = 0; $x < 3; $x++){?>
		<div style="margin:3em 0; height:auto; width:100%;">
			<div class="grid-25">
				<div class="singlePerson"></div>
			</div>
			
			<div class="grid-75">
				<h1 style="text-align:left">Marshall Mathers</h1>			               
				<h2  style="text-align:left">CEO</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque porta ex at elit dignissim venenatis. Vestibulum nibh arcu, fermentum et sagittis eget, mattis vitae elit. Aliquam non aliquam tortor, eu imperdiet nisl. Curabitur sollicitudin in magna in commodo. Vestibulum sed lacus quis sem feugiat bibendum sit amet at erat. Nulla vitae leo a orci placerat laoreet sed at libero. Phasellus consectetur sem ac velit auctor tincidunt. Sed rhoncus nisi in diam malesuada bibendum. Donec aliquet dignissim facilisis. Nam quis dui mi. Cras eget pretium velit. Aliquam hendrerit justo id tellus porttitor fermentum. Aliquam erat volutpat. Quisque pharetra augue ut tellus sollicitudin laoreet.</p>
			</div>
		</div>
		<div style="clear:both"></div>
		<?php } ?>
	</div>
</div>


<!-- The Place -->
<div class="grid-container">
	<div class="bigCard">
		<h1 class="mainHeader"><a name="place">The Place</a></h1>
        <h3 class="centre">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>


		<ul class="images">
	<?php for($x=0; $x <3; $x++) {?>
		<div class="grid-33">
			<li> 
				<div class="hovercard">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eros sem, scelerisque eu malesuada quis, posuere vel ipsum. Aliquam eu mollis leo. </p>
				</div>    
			</li>
				</div>
		<?php } ?>
		</ul>

		
	</div>
</div>

<!-- The Work -->
<div class="grid-container">
	<div class="bigCard">
		<h1 class="mainHeader"><a name="work">The Work</a></h1>
        <h3 class="centre">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
        <div class="grid-75">
					<iframe width="698" height="393" src="https://www.youtube.com/embed/SQruGr1bijY" frameborder="0" allowfullscreen></iframe>
        </div>
		
		<div class="grid-25">
		<ul class="gridImages">
	<?php for($x=0; $x <3; $x++) {?>
			<li> 
				<div class="hovercard">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eros sem, scelerisque eu malesuada quis, posuere vel ipsum. Aliquam eu mollis leo. </p>
				</div>    
			</li>
		<?php } ?>
		</ul>
		</div>
	</div>
</div>

<!-- The Perks -->
<div class="grid-container">
	<div class="bigCard">
		<h1 class="mainHeader"><a name="perks">The Perks</a></h1>
        <h3 class="centre">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
        		
		<div class="grid-25">
		<ul class="gridImages">
		<?php for($x=0; $x <3; $x++) {?>
			<li> 
				<div class="hovercard">
				<p>This is some description. This is some description. This is some description. This is some description. This is some description.</p>
				</div>    
			</li>
		<?php } ?>
		</ul>
		</div>
		
		<div class="grid-75">
			<iframe width="698" height="393" src="https://www.youtube.com/embed/SQruGr1bijY" frameborder="0" allowfullscreen></iframe>
        </div>
		
	</div>
</div>

<!-- The Development -->
<div class="grid-container">
	<div class="bigCard">
		<h1 class="mainHeader"><a name="development">The Development</a></h1>
		 <h3 class="centre">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>

		 <iframe width="960" height="540" src="https://www.youtube.com/embed/SQruGr1bijY" frameborder="0" allowfullscreen></iframe>
		 
		 <?php for($x=0;$x < 3; $x++){?>
		 <div class="grid-33">
			 <div class="image">
			 </div>
		 </div>	
		 <?php } ?>
		
   
	</div>
</div>

<!--Opportunities-->
<div class="opportunities">
    <div class="grid-container">    
    <div class="intro">
    <h1 class="mainHeader"><a name="opportunities">Opportunities</a></h1>
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

		<?php 
		
		$a = true;
		
		if($a = true) { 
			
        for($x = 0; $x < 6; $x++) { ?>
		<div class="grid-33">
			<div class="card">
				<div class="cardImage">
                    <?php sizeOfCompany(); workHours(); ?>                     
				</div>
                <div class="grid-100">
                    <h3><a href="companyProfile.php">Limefish</a></h3>
                    <h1>This will be 2 lines long..just because I can</h1>
                    <h3>Saar, Kingdom of Bahrain</h3>
                </div>
			</div>
		</div>
		
		<?php } // END OF FOR LOOP

		 } else { ?>
		<p style="color:var(--lightGray); display:inline-block; text-align:center; margin:3em auto; width:100%">No new opportunities. Try again soon!</p>
		<?php } //END OF IF FUNCTION?>

</div>
    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<?php include 'footer.php' ?>