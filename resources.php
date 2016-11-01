<?php include 'header.php'; ?>

<div class="sort">
    <div class="grid-container">
        <div class="grid-50 mobile-grid-100">
        <form method="POST" action="" style="width:100%">
            <select name="category">
                <option value="all">All Categories</option>
                <option value="all">Comedy</option>
                <option value="all">Inpsiration</option>
            </select>
        
            <input class="button orange" type="submit">
        </form>
        </div>
        
        <hr>
        
        <div class="grid-50 mobile-grid-100">
            <form method="POST" action="" style="width:100%">
                <input type="input" placeholder="Search..">
            </form>
        </div>
    </div>
</div>

<div class="grid-container">
    
<h1 class="bold" style="margin:1em 0 0 0; text-align:center;">Learning Resources</h1>

    <div class="grid-50 mobile-grid-100">
			<div class="card supportCard">
				<div class="cardImage"></div>
                <section>
                    <div style="float:left">
                        <h3><a href="companyProfile.php">Limefish</a></h3>
                    </div>

                    <div style="float:right">
                        <ul class="tag">
                            <li>Comedy</li>
                            <li>Inspiration</li>
                        </ul>
                    </div>

                    <div class="clearfix"></div>
                    
                    
                    <h1><a class="dark" href="blogPost.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel mollis felis.</a></h1>
                    <p> In pharetra maximus iaculis. Donec.</p>
                </section>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>