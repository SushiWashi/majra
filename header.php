<!DOCTYPE html>
<?php 
//Adds "..." to links
function folder() {
	$self = $_SERVER['PHP_SELF'];
	
	switch($self) {
		case '/majra/about/index.php':
		case '/majra/settings/index.php':
        case '/majra/companyUser/index.php':
			echo "../";
			break;
		default:
			echo "";
	}		
	
}
?>

<?php
    /* Changes the background color
    when the user goes to "For Employees" page*/

	$self = $_SERVER['PHP_SELF'];
          
    if($self == '/majra/forEmployees.php') {
        echo "<html style='background-color:var(--darkGray)'>";
    } else {
        echo "<html>";
    }
    
?>
<head>
	<!--Favicons-->
	<link rel="icon" href="<?php echo folder();?>img/favicon/favicon.svg">
	<link rel="icon" href="<?php echo folder();?>img/favicon/favicon.png" sizes="32x32">
	<link rel="icon" href="<?php echo folder();?>img/favicon/favicon-57.png" sizes="57x57">
	<link rel="icon" href="<?php echo folder();?>img/favicon/favicon-76.png" sizes="76x76">
	<link rel="icon" href="<?php echo folder();?>img/favicon/favicon-96.png" sizes="96x96">
	<link rel="icon" href="<?php echo folder();?>img/favicon/favicon-120.png" sizes="120x120">

	<!--META-->
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <meta id="viewport" name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1">
    
    <!--LINKS-->
	<link rel="stylesheet" type="text/css" href="<?php echo folder()?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo folder()?>css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo folder()?>css/grid.css">
    
    <title>Majra</title> 	 

</head>

<?php
    
	$self = $_SERVER['PHP_SELF'];
          
    if($self == '/majra/forEmployees.php') {
        echo "<body class='darkBody'>";
    } else {
        echo "<body>";
    }
    
    ?>
    
<div id="wrapper">
<div id="content">
<!--wrapper & content is used to fix footer to bottom of page -->
<?php
    
	$self = $_SERVER['PHP_SELF'];
          
    if($self == '/majra/forEmployees.php') {
        echo "<div class='absoluteNav'>";
    } else {
        echo "<div class='nav'>";
    }
    
    ?>
		<div class="grid-container">
			<a href="/majra"><img class="logo" src="<?php echo folder()?>img/majra-orange.svg"></a>
            <span style="position:absolute; top:7em; left:10em; letter-spacing:5px;">beta</span>
				

			<ul class="user">
			<?php $logged_in = true;
			
			if(!$logged_in){?>
				<li>
	               <a class="button" href="#popup1">Join / Log in</a>
                    <div id="popup1" class="overlay">
                        <div class="popup">
                            <div style="clear:both; width:100%; height:20px;">
                            <a class="close" href="#">&times;</a>
                                </div>
                            <div class="content">
                                <div class="grid-50" style="border-right:1px solid var(--lightGrey)">
                                    <form method="POST" action="">
                                        <label>CREATE A NEW ACCOUNT</label><br>
                                        <input type="text" placeholder="First Name"><br>
                                        <input type="text" placeholder="Last Name"><br>
                                        <input type="email" placeholder="Email"><br>
                                        <input type="password" placeholder="Password"><br>
                                        <p>By signing up, you agree to our <a href="">terms & conditions</a></p>
                                        <input type="submit">
                                    </form>
                                </div>
                                
                                <div class="grid-50">
                                    <form method="POST" action="">
                                        <label>LOG IN</label><br>
                                        <input type="email" placeholder="Email"><br>
                                        <input type="password" placeholder="Password"><br>
                                        <a href="#">forgot password?</a>
                                        <input type="submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
			</ul>
			<?php }else{ ?>
				<li class="dropdown">
                    <a href="#" class="dropbtn">Notifications</a>
                    <div class="dropdown-content">
                        <div class="grid-100">
                        <?php for($x=0; $x <= 5; $x++){?>
                            <div class="noticePost">
                                
                                <div class="grid-20">
                                    <div class="userPic"></div>
                                </div>
                                
                                <div class="grid-80">
                                    <p><a href="<?php folder(); ?>companyProfile.php">Limefish</a> has posted a new job, <a href="<?php folder(); ?>opportunities-single.php">Graphics Designer</a></p>
                                    <span>10 seconds ago</span>
                                </div>
                                <br><br>
                                <br><br>
                            </div> 
                            
                        <?php } ?>
                     
                        </div>
                    </div>
                </li>
				<li class="dropdown">
                    <a href="#" class="dropbtn">Nazar</a>
                    <div class="dropdown-content">
						<ul>
							<li><a href="#">Your Profile</a></li>
							<li><a href="/majra/settings/">Settings</a></li>
						</ul>
                    </div>
                </li>
			<?php } ?>
			</ul>

			
			<ul>
				<li><a href="workplaces.php">explore places</a></li>
				<li><a href="opportunities.php">find opportunities</a></li>
				<li><a href="resources.php">learning resources</a></li>
			</ul>
			
			
		</div>
	</div>
