<?php include('header.php');?>
<div class="opener">
	<div class="grid-container">
		<h1>Everything you need to build the perfect career is here</h1>
		<h2>Explore the best workplaces out there, and apply for their jobs and opportunities</h2>

		<ul class="gird-100 mobile-grid-100">
			<a href="workplaces.php"><li class="grid-25 mobile-grid-100">explore workplaces</li></a>
			<a href="opportunities.php"><li class="grid-25 mobile-grid-100">find a job</li></a>
			<a href="#"><li class="grid-25 mobile-grid-100">hire someone</li></a>
			<a href="resources.php"><li class="grid-25 mobile-grid-100">get advice</li></a>
		</ul>
	</div>
</div>


<div class="grid-container listing">
	<div class="grid-50 mobile-grid-100">
		<h1>fresh opportunities</h1>
		<?php for ($x = 0; $x < 3; $x++) { ?>
		<div class="row grid-100 mobile-grid-33">
			<div class="freshImg grid-50 mobile-grid-100"></div>
			<h3><a class="dark" href="">MECHANICAL ENGINEERING</a></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</div>
		<?php } ?>
	</div>

	<div class="grid-50 mobile-grid-100">
		<h1>fresh opportunities</h1>
		<?php for ($x = 0; $x < 3; $x++) { ?>
		<div class="row grid-100 mobile-grid-33">
			<div class="freshImg grid-50 mobile-grid-100"></div>
			<h3><a class="dark" href="">MECHANICAL ENGINEERING</a></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</div>
		<?php } ?>
	</div>

	<h3 class="workplacesList">we have included awesome workplaces to guarantee you the suitable job that you're looking for</h3>

	<ul class="grid-container newWorkplaces">
		<?php for($x = 0; $x < 4; $x++) {?>
		<li class="grid-25 mobile-grid-50"><a href="#"><img src="http://www.valuewalk.com/wp-content/uploads/2015/10/Facebook-logo.png"></a></li>
		<?php } ?>
	</ul>
</div>

<div class="blog">
	<div class="grid-container">
		
		<h1 class="grid-100 mobile-grid-100">recent blog entries</h1>

		<?php for($x=0; $x <=2; $x++) {?>
		<div class="blogPost grid-33 mobile-grid-33">
			
			<div class="blogImg grid-100 mobile-grid-100"></div>
			
			<h3><a href="">The title here can take up to 2 lines, isn't that cool?</a></h3>
			
			<ul class="blogPostBottom">
				<li><a class="followButton" href="#">follow</a></li>
				<li><a href="profile.php">by AUTHOR</a></li>
			</ul>
			
		</div>
		<?php } ?>

	</div>

</div>
<div style="clear:both"></div>
<?php include('footer.php');?>