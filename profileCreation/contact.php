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
<h1 style="padding:0.5em 0 !important;">How can companies contact you?</h1>
    <form>
        <div class="grid-50">
            <label>Current Residence Country</label><br>
            <select>
                <option value="Bahrain">Bahrain</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Oman">Oman</option>
                <option value="Qatar">Qatar</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="United Arab Emirates">United Arab Emirates</option> 
            </select><br>

            <label>Phone Number</label><br>
            <input type="tel" placeholder="973-1111-2222"><br>
        </div>

        <div class="grid-50">
            <label>Current Residence City</label><br>
            <input type="text" placeholder="Which city are you currently at?"><br>

            <label>Email</label><br>
            <input type="email" placeholder="hello@yourwebsite.com"><br>
        </div>

        <div class="grid-100">
            <label>Website</label><br>
            <input type="url" placeholder="http://majra.me"><br>
        </div>
    </form>
 <br>
    <a href="education.php" class="button grey outline" style="margin-right:1em;">SKIP THIS PAGE</a>
    <a class="button orange">CONTINUE</a>  
</div>

<br>
    
<?php include '../footer.php'; ?>
