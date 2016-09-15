<?php include('header.php');?>
<div class="opener">
	<div class="container">
		<h1>Everything you need to build the perfect career is here</h1>
		<h2>Explore the best workplaces out there, and apply for their jobs and opportunities</h2>

		<ul>
			<li><a href="places.php">explore workplaces</a></li>
			<li><a href="opportunities.php">find a job</a></li>
			<li><a href="">hire someone</a></li>
			<li><a href="resources.php">get advice</a></li>
		</ul>

	</div>
</div>

<div class="container">
	<div class="fresh">
		<h1>fresh opportunities</h1>
		<?php for ($x = 1; $x <= 3; $x++) { ?>
		<div class="row">
			<img src="">
			<h3>job</h3>
			<p>blah</p>
		</div>
		<?php } ?>
	</div>

	<div class="fresh">
		<h1>fresh opportunities</h1>
		<?php for ($x = 1; $x <= 3; $x++) { ?>
		<div class="row">
			<img src="">
			<h3>job</h3>
			<p>blah</p>
			<p class="ognBtn">explore workplace</p>
		</div>
		<?php } ?>
	</div>

	<h3>we have included awesome workplaces to guarantee you the suitable job that you're looking for</h3>

	<ul>
		<?php for($x = 1; $x <= 3; $x++) {?>
		<li><img src=""></li>
		<?php } ?>
	</ul>
</div>

<div class="blog">
	<div class="container">
		
		<h1>recent blog entries</h1>

		<?php for($x=0; $x <=2; $x++) {?>
		<div class="blogPost">
			<img src="">
			<h3>The title here can take up to 2 lines, isn't that cool?</h3>
			<ul class="blogPostBottom">
				<li><a href="">follow</a></li>
				<li><a href="">by AUTHOR</a></li>
			</ul>
		</div>
		<?php } ?>

	</div>
<div style="clear:both"></div>
</div>
<?php include('footer.php');?>