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
                        <h3><a href="companyProfile.php">Comedy, Inspiration</a></h3>
                    </div>

                    <div class="grid-100">
                    <h1>This will be 2 lines long..just because I can</h1>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fringilla mauris at eros auctor, eu porttitor massa dapibus. In semper in augue in varius. Ut vel semper sem. Pellentesque eleifend ligula ac lacus eleifend, quis suscipit dui euismod. Curabitur condimentum porttitor purus rhoncus posuere. Nullam molestie diam et ex malesuada, quis lacinia ex porttitor. Ut ut interdum nunc. Sed et ullamcorper lacus. Pellentesque sollicitudin sapien vel sapien rhoncus, vitae pretium est varius. Cras nulla justo, euismod et rutrum nec, rutrum a turpis.</p>
                    </div>
                </div>
			</div>
		</div>
<?php } ?>

</div>

<?php include 'footer.php'; ?>