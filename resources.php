<?php include 'header.php'; ?>
<div class="sort">
    <div class="grid-container">
        <div class="grid-50">
        <form method="POST" action="" style="width:100%">
            <select name="category">
                <option value="all">All Categories</option>
                <option value="all">Comedy</option>
                <option value="all">Inpsiration</option>
            </select>
        
            <input type="submit">
        </form>
        </div>
        
        <div class="grid-50">
            <form method="POST" action="">
                <input type="input" placeholder="Search.."> 
            </form>
        </div>
    </div>
</div>

<div class="grid-container">
<h1 style="margin:1em; text-align:center;">Learning Resources</h1>
<?php for($x=0; $x <=3; $x++) {?>
<div class="grid-50">
			<div class="card supportCard">
				<div class="cardImage"></div>
                <div class="grid-100">
                    <div class="grid-50">
                        <h3><a href="companyProfile.php">Limefish</a></h3>
                    </div>

                    <div class="grid-50">
                        <ul class="tag">
                            <li>Comedy</li>
                            <li>Inspiration</li>
                        </ul>
                    </div>

                    <div class="grid-100">
                    <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel mollis felis.</h1>
                    <p> In pharetra maximus iaculis. Donec.</p>
                    </div>
                </div>
			</div>
		</div>
<?php } ?>

</div>

<?php include 'footer.php'; ?>