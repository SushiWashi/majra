<?php include('header.php');?>
<div class="opener clearfix">
	<div class="darkBackground">
		<div class="grid-container">
            <div class="grid-100 mobile-grid-100">

                <h1>Everything you need to build the perfect career is here!</h1>
                <h2>Explore the best workplaces out there, and apply for their jobs and opportunities.</h2>
            
                    <div class="grid-25 mobile-grid-100">
                        <a class="button outline" href="workplaces.php">explore workplaces</a>
                    </div>

                    <div class="grid-25 mobile-grid-100">
                        <a class="button outline" href="opportunities.php">find a job</a>
                    </div>

                    <div class="grid-25 mobile-grid-100">
                        <a class="button outline" href="forEmployees.php">hire someone</a>
                    </div>

                    <div class="grid-25 mobile-grid-100">
                        <a class="button outline" href="resources.php">get advice</a>
                    </div>
                </div>

		</div>
	</div>
</div>


<div class="grid-container">
    
    <div class="box">

        <div class="grid-50 mobile-grid-100">
           <h1 class="bold">Fresh Opportunities</h1>
        </div>

        <div class="grid-50 mobile-grid-100">
            <a href="opportunities.php" class="dark">Explore Opportunities »</a>
        </div>
    
    <div class="clearfix"></div>
    </div>
    
    
	<?php for($x=0; $x <= 2; $x++) {?>
    <div class="grid-33">
			<div class="card">
				<div class="cardImage">
					<?php sizeOfCompany(); workHours();?>
         		</div>
                <section>
                    <h3><a href="companyProfile.php">Limefish</a></h3>
                    <h1><a class="dark" href="opportunities-single.php">This will be 2 lines long..just because I can</a></h1>
                    <h3>Saar, Kingdom of Bahrain</h3>
                </section>
			</div>
		</div>
	<?php } ?>
    <div class="clearfix"></div>

    
    <div class="box">
        <div class="grid-50 mobile-grid-100">
            <h1 class="bold">Fresh Workplaces</h1>
        </div>
        
        <div class="grid-50 mobile-grid-100">
            <a href="opportunities.php" class="dark">Explore Workplaces »</a>
        </div>
    </div>
        <div class="clearfix"></div>

    
    <?php for($x=0; $x <= 2; $x++) {?>
	<div class="grid-33 mobile-grid-100">
		<div class='card'>
            <div class='cardImage'>
				<?php sizeOfCompany(); ?>
                <div class="logo"><a href="companyProfile.php"></a></div>
            </div>
            <section>
                <h3>CREATIVE AGENCY</h3>
                <h1><a href="companyProfile.php">Limefish</a></h1>
                <h3>Saar, Kingdom of Bahrain</h3>
                <a href="#" class="button orange">follow +</a>
            </section>
        </div>
	</div>
	<?php } ?>
    <div class="clearfix"></div>

    <div class="grid-100 mobile-grid-100">
	   <h3 class="workplacesList bold">we have included awesome workplaces to guarantee you the suitable job that you're looking for</h3>
    </div>
    
	<ul class="grid-container newWorkplaces">
	<?php for($x=0; $x <= 3; $x++) { ?>
		<li class="grid-25"><a href="#"><img src=""></a></li>
	<?php } ?>
	</ul>
</div>

<div class="blog">
	<div class="grid-container">
        <div class="grid-100 mobile-grid-100">
		  <h1 class="bold">learners resources</h1>
        </div>
        
		<?php for($x=0; $x <=5; $x++) {?>
		<div class="grid-33 mobile-grid-100">
			<div class="blogPost">
				
				<div class="blogImg"></div>
				
				<h3><a href="opportunities-single.php">The title here can take up to 2 lines, isn't that cool?</a></h3>
                
                <a href="profile.php">Nazar Abubaker</a>

			</div>
		</div>
		<?php } ?>
	   </div>

</div>
<?php include('footer.php');?>