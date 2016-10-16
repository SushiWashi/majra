<?php include 'header.php'; ?>

<div class="companyHeader">
	<div class="darkBackground">
		<div class="grid-container">
			<div class="grid-80">
				<h1>Nazar Abubaker</h1>

            <ul>
					<li>Budaiya, Bahrain</li>
					<li>March 1, 1991</li>
                    <li><button class="followButton" >REQUEST TO CONTACT</button></li>
				</ul>
			</div>
			
			<div class="grid-20">
				<div class="displayPicture" style="background-image:url('https://scontent.xx.fbcdn.net/v/t1.0-9/12400833_10154562872153079_6701585415440007239_n.jpg?oh=dd0b1295db330d9c8eb1a45e5976f68a&oe=586AB64F')">
</div>
			</div>

            
		</div>
	</div>
</div>

<div class="grid-container">
    
    <!-- 
COMMENT: WHAT DO WE DO WITH THIS??

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
	-->
    
	<div class="grid-60">
		<div class="card userCard">
			<div class="grid-100">
			<h1>Education</h1>
			
			<?php for($x=0; $x < 4; $x++) {?>
            <div class="education">
                <span>2014</span>
                <h2>Bachelor of Awesomeness</h2>
                <h4>Universty of McAwesome</h4>
                <h3>What did I achieve?</h3>
                    <ol>
                        <li>Blah</li>
                        <li>Blah</li>
                        <li>Blah</li>
                    </ol>
            		    </div>
			<?php } ?>

			</div>
		</div>
        
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
				<ol>
                    <li>Blah</li>
                    <li>Blah</li>
                    <li>Blah</li>
                </ol>
				<?php } ?>

			</div>
		</div>
        <?php 
        
        //Just change $x to show "contact me" button
        $x=true;
    
        if($x==true) {?>
		<div class="card userCard">
			<div class="grid-100">
				<h1>Connect with me</h1>
				
				<p>Phone Number: <span><a href="tel:39999999">39999999</a></span></p>
				<p>Email: <span><a href="mailto:k@k.com">k@k.com</a></span></p>
				<p>Website: <span><a href="http://www.facebook.com" target="_blank">http://www.facebook.com</a></span></p>
                <p>Linkedin: <span><a href="http://www.linkedin.com/nazarabubaker" target="_blank">http://www.linkedin.com/nazarabubaker</a></span></p>
				
			</div>
		</div>
        
        <?php } else { ?>
            <div class="grid-100">
    		<a href="#" class="contactButton">REQUEST FOR MY INFORMATION</a>
            </div>
        <?php } ?>
	</div>
    
    <div class="grid-40">
		
        <div class="card userCard">
			<div class="grid-100 quote">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porta ex ut arcu aliquam finibus. Curabitur aliquam dui ipsum, quis porta justo tincidunt quis.</p>
			</div>
		</div>  
        
		<div class="card userCard">
			<div class="grid-100">
			<h1>What can I add to your company?</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porta ex ut arcu aliquam finibus. Curabitur aliquam dui ipsum, quis porta justo tincidunt quis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut tristique vulputate magna, in ultrices nunc congue condimentum. Curabitur imperdiet mollis magna, quis auctor velit scelerisque vel. Aenean pulvinar lectus non risus finibus lacinia sit amet ultricies felis. Etiam sit amet sem mauris. Praesent ullamcorper risus purus, hendrerit dignissim augue egestas at.</p>
			</div>
		</div>    
        
        <div class="card userCard">
			<div class="grid-100">
			<h1>My top concerns are:</h1>
                <ol type="1" start="1">
                    <li style="font-size:1.5em; font-weight:bold; color:var(--orange)">Salary</li>
                    <li style="font-size:1.3em;">Culture</li>
                    <li style="font-size:1.1em">Location</li>
                    <li style="font-size:1.0em">Working Hours</li>
                </ol>
			</div>
		</div>    
    </div>
    
    <div class="grid-100">
	</div>

</div>
	
<?php include 'footer.php'; ?>