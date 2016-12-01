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
<h1 style="padding:0.5em 0 !important;">Personalize your profile!</h1>

<form>
    <div class="grid-100">
        <label>What can I add to the company?</label><br>
        <textarea></textarea><br>
        
        <label>Add a Quote</label><br>
        <input type="textarea" placeholder="To be or not to be, that is the question..."><br>
        
        <label>Profile Picture</label><br>
        <input type="file"><br>
        
        <label>Profile Header</label><br>
        <input type="file"><br>
        
        <label>CV</label><br>
        <input type="file"><br>
    </div>
</form>
 <br>
    <a href="" class="button grey outline" style="margin-right:1em;">SKIP THIS PAGE</a>
    <a class="button orange">FINISH</a>  
</div>

<br>
    
<?php include '../footer.php'; ?>