<?php include('header.php'); ?>
<div class="grid-container">
    <div class="grid-100">
        <h1>Notifications</h1>
    </div>
    
    <div class="grid-20">
        <div class="userPic"></div>
    </div>
                                
    <div class="grid-80">
        <?php for($x=0; $x<=40; $x++){?>
            <p><a class="dark" href="<?php folder(); ?>companyProfile.php">Limefish</a> has posted a new job, <a href="<?php folder(); ?>opportunities-single.php">Graphics Designer</a></p>
            <span>10 seconds ago</span>
        <?php } ?>
    </div>

</div>

<?php include('footer.php'); ?>