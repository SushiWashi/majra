<!DOCTYPE html>
<?php include ('function.php');?>
<head>
	<!--Favicons-->
	<link rel="icon" href="<?php echo folder();?>img/favicon/favicon.svg">
	<link rel="icon" href="<?php echo folder();?>img/favicon/favicon.png" sizes="32x32">
	<link rel="icon" href="<?php echo folder();?>img/favicon/favicon-57.png" sizes="57x57">
	<link rel="icon" href="<?php echo folder();?>img/favicon/favicon-76.png" sizes="76x76">
	<link rel="icon" href="<?php echo folder();?>img/favicon/favicon-96.png" sizes="96x96">
	<link rel="icon" href="<?php echo folder();?>img/favicon/favicon-120.png" sizes="120x120">

	<!--META-->
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="robots" content="" />
    <meta name="description" content="Not another job site.">
	<meta name="theme-color" content="#323232" /> <!--Google Chrome on Android-->

    <!--STYLE LINKS-->
	<link rel="stylesheet" type="text/css" href="<?php echo folder()?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo folder()?>css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo folder()?>css/grid.css">
    
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
    
    <title><?php title(); ?></title> 	 

    
</head>

<?php bodyClass(); ?>
    
<div id="wrapper">
<div id="content">
<!--wrapper & content is used to fix footer to bottom of page -->
<div class='nav'>
    <div class="grid-container">
        <div class="clearfix">
			<a href="/majra"><img class="logo" src="<?php echo folder()?>img/majra-orange.svg"></a>
            <span class="beta">beta</span>
				

			<ul class="user">
			<?php $logged_in = false;
			
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
			
			<ul class="links">
				<li><a href="workplaces.php">explore places</a></li>
				<li><a href="opportunities.php">find opportunities</a></li>
				<li><a href="resources.php">learning resources</a></li>
			</ul>
			
	    <div class="mobileNav">
        <select onChange="window.location.href=this.value">
            <option value="/">Home</option>
            <option value="workplaces.php">Explore Places</option>
            <option value="opportunities.php">Find Opportunities</option>
            <option value="resources.php">Learning Resources</option>
            <option value="login.php">Log in / Sign up</option>

        </select>
    </div>		
		</div>
    </div>
</div>
