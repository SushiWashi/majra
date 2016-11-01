<?php include('header.php'); ?>
<div class="grid-container">
    
    <div class="grid-100 mobile-grid-100">
        <h1 style="padding:1em 0;">Notifications</h1>
    </div>
                        
    <div class="grid-80 mobile-grid-100">
        <?php for($x=0; $x<=20; $x++){?>
            <div class="card">
                    <div class="grid-10 mobile-grid-30">
                        <div class="displayPicture" style="width:50px; height:50px; margin:0 !important;"></div>
                    </div>

                    <div class="grid-90 mobile-grid-70">
                        <p><a class="dark" href="<?php folder(); ?>companyProfile.php">Limefish</a> has posted a new job, <a href="<?php folder(); ?>opportunities-single.php">Graphics Designer</a></p>
                        <span>10 seconds ago</span>
                    </div>
            </div>
        <?php } ?>
    </div>

</div>

<?php include('footer.php'); ?>