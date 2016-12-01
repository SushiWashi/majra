<?php include '../header.php';?>
<style>
form {
    margin-top:1em;
}
    
form input, form select, form textarea {
    width:100% !important;
    box-sizing: border-box;
}

form label {
    font-weight: bold;
}
</style>

<div class="companyHeader" style="background-image:url('https://scontent.xx.fbcdn.net/t31.0-8/13938224_279117285793701_5749778601323322627_o.jpg');">
	<div class="darkBackground">
		<div class="grid-container">
			<div class="grid-80 mobile-grid-100">
                <br class="hide-on-desktop">
                <br class="hide-on-desktop">
                <br class="hide-on-desktop">
                <br class="hide-on-desktop">
                <br class="hide-on-desktop">
                <br class="hide-on-desktop">
                <br class="hide-on-desktop">

                <br class="hide-on-mobile">
                <br class="hide-on-mobile">
                <br class="hide-on-mobile">
                <br class="hide-on-mobile">


				<h1 class="mainHeader">Respresent Yourself well in just a few steps.</h1>
			</div>
		</div>
	</div>
</div>

<div class="grid-container">
<h1 style="padding:0.5em 0 !important;">Add your Education</h1>
  
    <form>
    <div class="grid-100">
        <label>Program Name</label><br>
        <input type="text" placeholder="Bachelor of Awesomeness"><br>
    </div>
    
    <div class="grid-70">
        <label>Place Achieved</label><br>
        <input type="text" placeholder="Univerity of Awesomeness"><br>
    </div>
    
    <div class="grid-30">
        <label>Year Achieved</label><br>
        <select>
            <?php 
                for($x=1900; $x <= date('Y'); $x++) {
                    echo "<option value='$x'>$x</option>";
                }
            ?>
        </select><br>
    </div>
    
    <div class="grid-100">
        <label>Top 3 things I learnt here</label><br>
        <input type="text" placeholder="1">
        <input type="text" placeholder="2">
        <input type="text" placeholder="3">
    </div>
    
    <button class="button orange">Add another Education</button>
    </form>
 <br>
    <a href="experience.php" class="button grey outline" style="margin-right:1em;">SKIP THIS PAGE</a>
    <a class="button orange">CONTINUE</a>  
</div>

<br>
    
<?php include '../footer.php'; ?>