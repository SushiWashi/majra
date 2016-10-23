<?php include 'header.php';?>

<div class="grid-container">
    <div class="grid-100">
        <div class="bigCard post">
            <div class="blogImage"></div>
            <section>
            <h1 class="bold">Video Games Playing With Imagination</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales suscipit nisi id mollis. Cras faucibus neque tortor, et pellentesque massa dapibus quis. Phasellus interdum tellus in augue finibus, vitae hendrerit metus viverra. Aliquam lacinia facilisis lacus. Fusce efficitur cursus lectus, dignissim interdum purus. Curabitur in lectus sed nibh ultrices posuere in sed metus. Sed porta diam a pulvinar pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras vestibulum, sem ut finibus efficitur, libero turpis vestibulum augue, id tincidunt elit lacus cursus orci. Praesent euismod sed massa vitae viverra. Ut imperdiet fringilla sagittis. Maecenas et nisi tempus, efficitur libero a, consequat lacus. Phasellus vehicula vulputate quam eu maximus. Morbi neque magna, faucibus non metus sit amet, dictum vestibulum lacus. Donec nec risus et urna vestibulum consectetur eu nec neque.</p>

            <p>Donec feugiat quam at tortor elementum tempor. Donec suscipit ante nisi, at vulputate risus maximus eget. Nulla dapibus nulla at porttitor pellentesque. Nulla tempus risus ante, eu bibendum orci cursus non. Etiam convallis cursus eleifend. Mauris faucibus dolor at massa fermentum porta. Vivamus at consectetur felis, in tempor justo. Nunc lorem massa, feugiat vel ullamcorper ut, congue at mauris. Mauris placerat urna in leo molestie, sit amet dictum mauris ultrices.</p>
            </section>
            <div class="author">
                
                <div class="grid-15">
                    <div class="authorImg" style="background-image:url('https://cdn.tookapic.com/photos/2015/202/a/3/a34ed1f776e866d669460144a72bcca6.jpg?w=1540&q=80&sharp=7&mark=watermark-tileable.png&markfill=1&markalpha=7&s=30193357ceb503d1fd190ce48d1ead4b')"></div>
                </div>
                
                <div class="grid-50">    
                    <h2>Name Of Author</h2>
                    
                    <ul class="social">
                        <li>
                            <a href="http://fb.com" target="_blank">
                            <img src="img/social/Facebook.svg" alt="Facebook"></a>
                        </li>
                        <li>
                            <a href="http://instagram.com" target="_blank">
                                <img src="img/social/Instagram.svg" alt="Instagram">
                            </a>
                        </li>
                        <li>
                            <a href="http://snapchat.com" target="_blank">
                                <img src="img/social/Snapchat.svg" alt="Snapchat">
                            </a>
                        </li>
                        <li><a href="http://twitter.com" target="_blank">
                                <img src="img/social/Twitter.svg" alt="Twitter">
                            </a>
                        </li>
                        <li><a href="http://youtube.com" target="_blank">
                                <img src="img/social/Youtube.svg" alt="YouTube">
                            </a>
                        </li>
                    </ul>
                    
                    <p>Donec feugiat quam at tortor elementum tempor. Donec suscipit ante nisi, at vulputate risus maximus eget. Nulla dapibus nulla at porttitor pellentesque. Nulla tempus risus ante, eu bibendum orci cursus non. Etiam convallis cursus eleifend. Mauris faucibus dolor at massa fermentum porta.</p>
                </div>
            <div style="clear:both"></div>
            </div>
        </div>
    </div>
	
<div class="grid-100">
	<h1 style="padding:1em 0 !important;">More Learning Support</h1>
</div>

<?php for($x=0; $x <=3; $x++) {?>
	<div class="grid-25">
			<div class="card">
				<div class="cardImage"></div>
					<section>
						<h3><a href="companyProfile.php">Limefish</a></h3>
						<h1><a href="blogPost.php">This will be 2 lines long..just because I can</a></h1>
					</section>
			</div>
		</div>
<?php } ?>
</div>

<?php include 'footer.php';?>