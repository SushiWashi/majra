<?php include('header.php');?>
<div class="opener">
	<div class="darkBackground">
		<div class="grid-container">
			<h1>Everything you need to build the perfect career is here</h1>
			<h2>Explore the best workplaces out there, and apply for their jobs and opportunities</h2>

			<div class="grid-100 mobile-grid-100">
				<div class="grid-25 mobile-grid-50">
					<a href="workplaces.php">explore workplaces</a>
				</div>
				
				<div class="grid-25 mobile-grid-50">
					<a href="opportunities.php">find a job</a>
				</div>
				
				<div class="grid-25 mobile-grid-50">
					<a href="forEmployees.php">hire someone</a>
				</div>
				
				<div class="grid-25 mobile-grid-50">
					<a href="resources.php">get advice</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="grid-container">
    <div class="grid-100 listing">
		<h1>fresh opportunities</h1>
    </div>
    
	<?php for($x=0; $x <= 2; $x++) {?>
	<div class="grid-33">
		<div class='card'>
            <div class='cardImage'>
					<?php sizeOfCompany(); ?>
                <div class="logo"><a href="companyProfile.php"></a></div>
            </div>
            <div class="grid-100">
                    <h3>CREATIVE AGENCY</h3>
                    <h1><a href="companyProfile.php">Limefish</a></h1>
                    <h3>Saar, Kingdom of Bahrain</h3>
                    <br>
                    <a href="" class="button orange">follow +</a>
            </div>
        </div>
	</div>
	<?php } ?>

    <a href="opportunities.php" class="button orange" style="float:right">Explore Opportunities</a>
    
    <div class="grid-100 listing">
		<h1>fresh workplaces</h1>
    </div>
    
	<?php for($x=0; $x <= 2; $x++) {?>
		<div class="grid-33">
			<div class="card">
				<div class="cardImage">
					<?php sizeOfCompany(); workHours();?>
         		</div>
                <div class="grid-100">
                    <h3><a href="companyProfile.php">Limefish</a></h3>
                    <h1><a class="dark" href="opportunities-single.php">This will be 2 lines long..just because I can</a></h1>
                    <h3>Saar, Kingdom of Bahrain</h3>
                </div>
			</div>
		</div>
	<?php } ?>

    <a href="workplaces.php" class="button orange" style="float:right">Explore Workplaces</a>

    
	<h3 class="workplacesList">we have included awesome workplaces to guarantee you the suitable job that you're looking for</h3>

	<ul class="grid-container newWorkplaces">
	<?php for($x=0; $x <= 3; $x++) { ?>
		<li class="grid-25"><a href="#"><img src=""></a></li>
	<?php } ?>
	</ul>
</div>

<div class="blog">
	<div class="grid-container">
		<div class="grid-100">
		  <h1>learners resources</h1>
        </div>
        
		<?php for($x=0; $x <=5; $x++) {?>
		<div class="grid-33">
			<div class="blogPost">
				
				<div class="blogImg"></div>
				
				<h3><a href="#">The title here can take up to 2 lines, isn't that cool?</a></h3>

				<ul class="blogPostBottom">
					<li><a class="followButton" href="#">follow</a></li>
					<li><a href="profile.php">Nazar Abubaker</a></li>
				</ul>

			</div>
		</div>
		<?php } ?>

	</div>

</div>
<div style="clear:both"></div>
<?php include('footer.php');?>