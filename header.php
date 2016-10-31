<?php include ('function.php');?>
<!DOCTYPE html>
<head>
    <title><?php title(); ?></title> 	 
    
	<!--Favicons-->    
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php folder();?>img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php folder();?>img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php folder();?>img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="<?php folder();?>img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php folder();?>img/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php folder();?>img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php folder();?>img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php folder();?>img/favicon/android-icon-192x192.png">
    <link rel="manifest" href="<?php folder();?>img/favicon/manifest.json">

	<!--META-->
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
	<meta name="robots" content="" />
    <meta name="description" content="Not another job site.">
    <meta name="msapplication-TileColor" content="#F37021">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#323232" /> <!--Google Chrome on Android-->

    <!--STYLE LINKS-->
	<link rel="stylesheet" type="text/css" href="<?php echo folder()?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo folder()?>css/mobile-style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo folder()?>css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo folder()?>css/grid.css">
    
    <!--GET FONT FROM ADOBE'S SERVER :/ -->
    <script src="https://use.typekit.net/zyb3ses.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <script>
      (function(d) {
        var config = {
          kitId: 'zyb3ses',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
    
</head>

<?php darkBg(); ?>
    
<div id="wrapper">
<div id="content">
<!--wrapper & content is used to fix footer to bottom of page -->
<div class='nav'>
    <div class="grid-container">
        <div class="clearfix">
			<a href="/majra"><img class="logo" src="<?php echo folder()?>img/majra-orange.svg"></a>
            <span class="beta">beta</span>
				

			<ul class="user">
			<?php $logged_in = true;
			
			if(!$logged_in){?>
				<li>
	               <a class="button orange" style="margin-right:1em"href="#popup1">Join</a>
	               <a class="button outline" href="#popup1">Log In</a>
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
                                        <input class="button orange" type="submit">
                                    </form>
                                </div>
                                
                                <div class="grid-50">
                                    <form method="POST" action="">
                                        <label>LOG IN</label><br>
                                        <input type="email" placeholder="Email"><br>
                                        <input type="password" placeholder="Password"><br>
                                        <a href="#">forgot password?</a>
                                        <input class="button orange" type="submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
			<?php }else{ ?>
				<li class="dropdown">
                    <a href="#" class="button"><?php notification(); ?></a>
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
                    <a href="#" class="button">Nazar</a>
                    <div class="dropdown-content">
						<ul>
							<li><a href="#">Your Profile</a></li>
							<li><a href="/majra/settings/">Settings</a></li>
						</ul>
                    </div>
                </li>
			<?php } ?>
			</ul>
			
			<ul class="links">
				<li><a href="workplaces.php" <?php activeNav('workplaces'); ?>>explore places</a></li>
				<li><a href="opportunities.php" <?php activeNav('opportunities'); ?>>find opportunities</a></li>
				<li><a href="resources.php" <?php activeNav('resources'); ?>>learning resources</a></li>
			</ul>
            
        <div class="showMobile">
            <a href="#mobileNav" class="showBtn"><img class="menuIcon" src="<?php folder();?>img/menu.svg"></a>
            <div class="mobileContent">
                <a href="index.php" <?php activeNav('home'); ?>>Home</a>
                <a href="workplaces.php" <?php activeNav('workplaces'); ?>>Explore Places</a>
                <a href="opportunities.php" <?php activeNav('opportunities'); ?>>Find Opportunities</a>
                <a href="resources.php" <?php activeNav('resources'); ?>>Learning Resources</a>
                <?php $login = true; 
                
                if(!$login) {?>
                    <a href="login.php" <?php activeNav('login'); ?>>Log in / Sign up</a>
                <?php } else { ?>
                    <div class="user_logged_in clearfix">
                        <div class="displayPicture"></div>
                        <a href="/majra/companyUser/index.php">Limefish</a>
                    </div>
                <?php } ?>

            </div>
        </div>

            
        </div>
    </div>
</div>
