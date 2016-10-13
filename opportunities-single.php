<?php include 'header.php'; ?>
<div class="crumb">
	<div class="grid-container">
		<p style="color:var(--lightGray); float:left;">
			<a href="/majra/">Home</a> /
			<a href="opportunities.php">Find Opportunities </a> / 
			<a href="companyProfile.php">Limefish </a> / 
			Web Designer
		</p>
		
	</div>
</div>

<div class="grid-container">
    <div class="card opportunityCard">
        <div class="cardImage" style="background-image:url('http://www.cytheraco.com/wp-content/uploads/2016/08/web-design.png')"></div>

        <div style="background:#FCFCFC; border-bottom: 1px solid #BFBFBF; padding-bottom:2em">
				<div class="grid-100">
                    <div style="width:100%; height:auto;">
                        <div class="displayPicture" style="width:60px; height:60px; float:left; margin:0 1em 0 0;"></div>
                        <p style="padding:1em 0; display:inline-block;"><a href="companyProfile.php">Limefish</a></p>
                        <button class="followButton" style="float:right; margin:1em 0">APPLY NOW</button>
                    <div style="clear:both"></div>
                    </div>
                    
				    <h1>Technical Creative Director - Engine Group</h1>
				
                    <div class="grid-33">
                        <h3>Job Type</h3>
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
                    </div>

                    <div class="grid-33">
                        <h3>Salary Info</h3>
                        <p>BD500-1000</p>
                    </div>

                    <div class="grid-33">
                        <h3>Location</h3>
                        <p>Manama, Bahrain</p>
                    </div>
            </div>
        </div>
                
                    <div class="grid-100">
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
                    </div>
                </div>
    </div>


<?php 

$x=true;

if($x==true) { ?>
<div class="grid-container">
    <div class="card opportunityCard">
        <div class="grid-100">
            <h3>But wait, there's more!</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec condimentum sollicitudin nisl in feugiat. Proin fermentum interdum nulla, in porttitor diam sagittis vel. Sed et lectus vel elit vestibulum imperdiet sit amet tempus tellus. Nulla vitae nisi nulla. Nunc leo nisi, feugiat quis tristique at, commodo vel urna. Integer euismod lacus ac viverra congue. Curabitur sed semper turpis. Praesent dapibus nibh vel porttitor tempus. Suspendisse ac lacus sit amet lorem varius vestibulum a ut risus. Etiam suscipit orci id quam lacinia posuere. Integer et nisi mollis, dapibus arcu quis, luctus diam.</p>
        </div>
    </div>
</div>
<?php } ?>

<div class="grid-container">
    <button style="width:100%; margin-bottom:1em; padding:3em 0;">APPLY NOW</button>
</div>


<div class="companyHeader" style="background-image:url('https://scontent.xx.fbcdn.net/t31.0-8/13938224_279117285793701_5749778601323322627_o.jpg');">
	<div class="darkBackground">
		<div class="grid-container">
			<div class="grid-80">
				<h1 class="mainHeader">limefish </h1>
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

					?>   <br>
				
                <a class="outlineButton" href="companyProfile.php">EXPLORE OUR CULTURE</a>
			</div>
			
			<div class="grid-20">
				<div class="displayPicture" style="background-image:url('https://scontent.xx.fbcdn.net/v/t1.0-9/12234957_195242300847867_9193053891343381776_n.png?oh=b7506a67050bd9037b4b1387cb1f94b0&oe=58785757')"></div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>