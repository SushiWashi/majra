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


<div class="grid-container listing">
	<div class="grid-50">
		<h1>fresh opportunities</h1>
		<?php for ($x = 0; $x < 3; $x++) { ?>
		<div class="row grid-100">
			<div class="freshImg grid-50"></div>
			<h3><a class="dark" href="opportunities-single.php">MECHANICAL ENGINEERING</a></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<a style="position:absolute; bottom:0;" class="followButton" href="opportunities.php">EXPLORE OPPORTUNITIES</a>
		</div>
		<?php } ?>
	</div>

	<div class="grid-50">
		<h1>fresh workplaces</h1>
		<?php for ($x = 0; $x < 3; $x++) { ?>
		<div class="row grid-100">
			<div class="freshImg grid-50"></div>
			<h3><a class="dark" href="companyProfile.php">Limefish</a></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<a style="position:absolute; bottom:0;" class="followButton" href="workplaces.php">EXPLORE WORKPLACE</a>
		</div>
		<?php } ?>
	</div>

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