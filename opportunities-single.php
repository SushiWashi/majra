<?php include 'header.php'; ?>
<div class="crumb hide-on-mobile">
	<div class="grid-container">
        <ul>
            <li><a href="/majra/">Home</a></li>
            <li><a href="opportunities.php">Find Opportunities</a></li>
            <li><a href="companyProfile.php">Limefish</a></li>
            <li>Web Designer</li>
        </ul>
	</div>
</div>


<div class="grid-container">
    <div class="card opportunityCard">
        <div class="cardImage" style="background-image:url('http://www.cytheraco.com/wp-content/uploads/2016/08/web-design.png')"></div>

        <div class="clearfix" style="background:#FCFCFC; border-bottom: 1px solid #BFBFBF; padding-bottom:2em">
            <section>
                <div class="grid-100 mobile-grid-100">
                    <div class="companyInfo">
                        <div class="displayPicture"></div>
                        <p><a href="companyProfile.php">Limefish</a></p>
                        <button class="button orange hide-on-mobile">APPLY NOW</button>
                    </div>
                    
				    <h1>Technical Creative Director - Engine Group</h1>
                    <button class="button orange hide-on-desktop">APPLY NOW</button>

                </div>
                    
                    <div class="grid-33 mobile-grid-50">
                        <h3 style="margin-bottom:0 !important">Job Type</h3>
                        <?php sizeOfCompany(); ?>   
                    </div>

                    <div class="grid-33 mobile-grid-50">
                        <h3 style="margin-bottom:0 !important">Salary Info</h3>
                        <p>BD500-1000</p>
                    </div>

                    <div class="grid-33 mobile-grid-100">
                        <h3 style="margin-bottom:0 !important">Location</h3>
                        <p>Manama, Bahrain</p>
                    </div>
            </section>
        </div>
                
                    <div class="grid-100 mobile-grid-100">
                        <section>
                            <h3>Description</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec condimentum sollicitudin nisl in feugiat. Proin fermentum interdum nulla, in porttitor diam sagittis vel. Sed et lectus vel elit vestibulum imperdiet sit amet tempus tellus. Nulla vitae nisi nulla. Nunc leo nisi, feugiat quis tristique at, commodo vel urna. Integer euismod lacus ac viverra congue. Curabitur sed semper turpis. Praesent dapibus nibh vel porttitor tempus. Suspendisse ac lacus sit amet lorem varius vestibulum a ut risus. Etiam suscipit orci id quam lacinia posuere. Integer et nisi mollis, dapibus arcu quis, luctus diam.</p>

                            <h3>Responsibilities</h3>
                            <ul>
                                <li>Build and maintain production quality C/C++ code</li>
                                <li>Manage the code review process for partner engineers</li>
                                <li>Collaborate daily with multiple engineering teams</li>
                                <li>Learn, extend, and maintain existing engine systems</li>
                            </ul>

                            <h3>Goals we'll measure you by</h3>
                            <ul>
                                <li>List 1</li>
                                <li>List 2</li>
                                <li>List 3</li>
                                <li>List 4</li>
                            </ul>

                            <h3>An ideal candidate would be</h3>
                            <ul>
                                <li>List 1</li>
                                <li>List 2</li>
                                <li>List 3</li>
                                <li>List 4</li>
                            </ul>
                        </section>
                    </div>
                </div>
    </div>


<?php 

$x=true;

if($x==true) { ?>
<div class="grid-container">
    <div class="card opportunityCard">
        <div class="grid-100 mobile-grid-100">
            <section>
                <h3>But wait, there's more!</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec condimentum sollicitudin nisl in feugiat. Proin fermentum interdum nulla, in porttitor diam sagittis vel. Sed et lectus vel elit vestibulum imperdiet sit amet tempus tellus. Nulla vitae nisi nulla. Nunc leo nisi, feugiat quis tristique at, commodo vel urna. Integer euismod lacus ac viverra congue. Curabitur sed semper turpis. Praesent dapibus nibh vel porttitor tempus. Suspendisse ac lacus sit amet lorem varius vestibulum a ut risus. Etiam suscipit orci id quam lacinia posuere. Integer et nisi mollis, dapibus arcu quis, luctus diam.</p>
            </section>
        </div>
    </div>
</div>
<?php } ?>

<div class="grid-container">
    <button class="button orange" style="width:100%; margin-bottom:1em; padding:3em 0;">APPLY NOW</button>
</div>

<div class="companyHeader" style="background-image:url('https://scontent.xx.fbcdn.net/t31.0-8/13938224_279117285793701_5749778601323322627_o.jpg');">
	<div class="darkBackground">
		<div class="grid-container">
            
			<div class="grid-80 mobile-grid-100">
                <br class="hide-on-desktop">
                <br class="hide-on-desktop">
                <br class="hide-on-desktop">
                <div class="displayPicture hide-on-desktop" style="background-image:url('https://scontent.xx.fbcdn.net/v/t1.0-9/12234957_195242300847867_9193053891343381776_n.png?oh=b7506a67050bd9037b4b1387cb1f94b0&oe=58785757')"></div>
				<h1 class="mainHeader">limefish </h1>
                 <?php sizeOfCompany(); ?>   
                <br>
				<a class="button outline" href="companyProfile.php">EXPLORE OUR CULTURE</a>
			</div>
			
			<div class="grid-20 mobile-grid-100">
				<div class="displayPicture hide-on-mobile" style="background-image:url('https://scontent.xx.fbcdn.net/v/t1.0-9/12234957_195242300847867_9193053891343381776_n.png?oh=b7506a67050bd9037b4b1387cb1f94b0&oe=58785757')"></div>
			</div>
            
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>