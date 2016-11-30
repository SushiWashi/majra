<?php include 'header.php'; ?>
<style>
button.accordion {
    background-color: transparent;
    color: var(--lightGray);
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    border-bottom:1px solid var(--lightGray);
}

button.accordion:hover {
    background-color: var(--lightGray);
    color:var(--white);
}
    
button.accordion.active {
    background-color:var(--orange);
    border-bottom:1px solid transparent;
}
    

div.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
}

div.panel.show {
    display: block;
}
    
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
    
button.accordion:after {
    content: '\02795'; /* Unicode character for "plus" sign (+) */
    font-size: 13px;
    color: #777;
    float: right;
    margin-left: 5px;
}
    
    button.accordion:hover:after {
        color:var(--white) !important;
    }

button.accordion.active:after {
    content: "\2796"; /* Unicode character for "minus" sign (-) */
    color:var(--white) !important;
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


<!--
<div class="createProfileHeader">
    <div class="grid-container">
        <h1>Respresent Yourself well in just a few steps.</h1>
    </div>
</div>
-->

<div class="grid-container">
    
<button class="accordion">Introduce yourself!</button>
<div class="panel">
 
    <form name="introduction">
        
    <div class="grid-50">
        <label>First Name</label><br>
        <input type="text" placeholder="John"><br>
        
        <label>Date of Birth</label><br>
        <input type="date"><br>
    </div>

    <div class="grid-50 ">
        <label>Last Name</label><br>
        <input type="text" placeholder="Smith"><br>

        <label>Gender</label><br>
        <select>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>
    </div>

    <div class="grid-100">
        <label>Nationality</label><br>
        <select>
            <option value="Afghan">Afghan</option>
            <option value="albanian">Albanian</option>
			<option value="algerian">Algerian</option>
			<option value="american">American</option>
			<option value="andorran">Andorran</option>
							  <option value="angolan">Angolan</option>
							  <option value="antiguans">Antiguans</option>
							  <option value="argentinean">Argentinean</option>
							  <option value="armenian">Armenian</option>
							  <option value="australian">Australian</option>
							  <option value="austrian">Austrian</option>
							  <option value="azerbaijani">Azerbaijani</option>
							  <option value="bahamian">Bahamian</option>
							  <option value="bahraini">Bahraini</option>
							  <option value="bangladeshi">Bangladeshi</option>
							  <option value="barbadian">Barbadian</option>
							  <option value="barbudans">Barbudans</option>
							  <option value="batswana">Batswana</option>
							  <option value="belarusian">Belarusian</option>
							  <option value="belgian">Belgian</option>
							  <option value="belizean">Belizean</option>
							  <option value="beninese">Beninese</option>
							  <option value="bhutanese">Bhutanese</option>
							  <option value="bolivian">Bolivian</option>
							  <option value="bosnian">Bosnian</option>
							  <option value="brazilian">Brazilian</option>
							  <option value="british">British</option>
							  <option value="bruneian">Bruneian</option>
							  <option value="bulgarian">Bulgarian</option>
							  <option value="burkinabe">Burkinabe</option>
							  <option value="burmese">Burmese</option>
							  <option value="burundian">Burundian</option>
							  <option value="cambodian">Cambodian</option>
							  <option value="cameroonian">Cameroonian</option>
							  <option value="canadian">Canadian</option>
							  <option value="cape verdean">Cape Verdean</option>
							  <option value="central african">Central African</option>
							  <option value="chadian">Chadian</option>
							  <option value="chilean">Chilean</option>
							  <option value="chinese">Chinese</option>
							  <option value="colombian">Colombian</option>
							  <option value="comoran">Comoran</option>
							  <option value="congolese">Congolese</option>
							  <option value="costa rican">Costa Rican</option>
							  <option value="croatian">Croatian</option>
							  <option value="cuban">Cuban</option>
							  <option value="cypriot">Cypriot</option>
							  <option value="czech">Czech</option>
							  <option value="danish">Danish</option>
							  <option value="djibouti">Djibouti</option>
							  <option value="dominican">Dominican</option>
							  <option value="dutch">Dutch</option>
							  <option value="east timorese">East Timorese</option>
							  <option value="ecuadorean">Ecuadorean</option>
							  <option value="egyptian">Egyptian</option>
							  <option value="emirian">Emirian</option>
							  <option value="equatorial guinean">Equatorial Guinean</option>
							  <option value="eritrean">Eritrean</option>
							  <option value="estonian">Estonian</option>
							  <option value="ethiopian">Ethiopian</option>
							  <option value="fijian">Fijian</option>
							  <option value="filipino">Filipino</option>
							  <option value="finnish">Finnish</option>
							  <option value="french">French</option>
							  <option value="gabonese">Gabonese</option>
							  <option value="gambian">Gambian</option>
							  <option value="georgian">Georgian</option>
							  <option value="german">German</option>
							  <option value="ghanaian">Ghanaian</option>
							  <option value="greek">Greek</option>
							  <option value="grenadian">Grenadian</option>
							  <option value="guatemalan">Guatemalan</option>
							  <option value="guinea-bissauan">Guinea-Bissauan</option>
							  <option value="guinean">Guinean</option>
							  <option value="guyanese">Guyanese</option>
							  <option value="haitian">Haitian</option>
							  <option value="herzegovinian">Herzegovinian</option>
							  <option value="honduran">Honduran</option>
							  <option value="hungarian">Hungarian</option>
							  <option value="icelander">Icelander</option>
							  <option value="indian">Indian</option>
							  <option value="indonesian">Indonesian</option>
							  <option value="iranian">Iranian</option>
							  <option value="iraqi">Iraqi</option>
							  <option value="irish">Irish</option>
							  <option value="israeli">Israeli</option>
							  <option value="italian">Italian</option>
							  <option value="ivorian">Ivorian</option>
							  <option value="jamaican">Jamaican</option>
							  <option value="japanese">Japanese</option>
							  <option value="jordanian">Jordanian</option>
							  <option value="kazakhstani">Kazakhstani</option>
							  <option value="kenyan">Kenyan</option>
							  <option value="kittian and nevisian">Kittian and Nevisian</option>
							  <option value="kuwaiti">Kuwaiti</option>
							  <option value="kyrgyz">Kyrgyz</option>
							  <option value="laotian">Laotian</option>
							  <option value="latvian">Latvian</option>
							  <option value="lebanese">Lebanese</option>
							  <option value="liberian">Liberian</option>
							  <option value="libyan">Libyan</option>
							  <option value="liechtensteiner">Liechtensteiner</option>
							  <option value="lithuanian">Lithuanian</option>
							  <option value="luxembourger">Luxembourger</option>
							  <option value="macedonian">Macedonian</option>
							  <option value="malagasy">Malagasy</option>
							  <option value="malawian">Malawian</option>
							  <option value="malaysian">Malaysian</option>
							  <option value="maldivan">Maldivan</option>
							  <option value="malian">Malian</option>
							  <option value="maltese">Maltese</option>
							  <option value="marshallese">Marshallese</option>
							  <option value="mauritanian">Mauritanian</option>
							  <option value="mauritian">Mauritian</option>
							  <option value="mexican">Mexican</option>
							  <option value="micronesian">Micronesian</option>
							  <option value="moldovan">Moldovan</option>
							  <option value="monacan">Monacan</option>
							  <option value="mongolian">Mongolian</option>
							  <option value="moroccan">Moroccan</option>
							  <option value="mosotho">Mosotho</option>
							  <option value="motswana">Motswana</option>
							  <option value="mozambican">Mozambican</option>
							  <option value="namibian">Namibian</option>
							  <option value="nauruan">Nauruan</option>
							  <option value="nepalese">Nepalese</option>
							  <option value="new zealander">New Zealander</option>
							  <option value="ni-vanuatu">Ni-Vanuatu</option>
							  <option value="nicaraguan">Nicaraguan</option>
							  <option value="nigerien">Nigerien</option>
							  <option value="north korean">North Korean</option>
							  <option value="northern irish">Northern Irish</option>
							  <option value="norwegian">Norwegian</option>
							  <option value="omani">Omani</option>
							  <option value="pakistani">Pakistani</option>
							  <option value="palauan">Palauan</option>
							  <option value="panamanian">Panamanian</option>
							  <option value="papua new guinean">Papua New Guinean</option>
							  <option value="paraguayan">Paraguayan</option>
							  <option value="peruvian">Peruvian</option>
							  <option value="polish">Polish</option>
							  <option value="portuguese">Portuguese</option>
							  <option value="qatari">Qatari</option>
							  <option value="romanian">Romanian</option>
							  <option value="russian">Russian</option>
							  <option value="rwandan">Rwandan</option>
							  <option value="saint lucian">Saint Lucian</option>
							  <option value="salvadoran">Salvadoran</option>
							  <option value="samoan">Samoan</option>
							  <option value="san marinese">San Marinese</option>
							  <option value="sao tomean">Sao Tomean</option>
							  <option value="saudi">Saudi</option>
							  <option value="scottish">Scottish</option>
							  <option value="senegalese">Senegalese</option>
							  <option value="serbian">Serbian</option>
							  <option value="seychellois">Seychellois</option>
							  <option value="sierra leonean">Sierra Leonean</option>
							  <option value="singaporean">Singaporean</option>
							  <option value="slovakian">Slovakian</option>
							  <option value="slovenian">Slovenian</option>
							  <option value="solomon islander">Solomon Islander</option>
							  <option value="somali">Somali</option>
							  <option value="south african">South African</option>
							  <option value="south korean">South Korean</option>
							  <option value="spanish">Spanish</option>
							  <option value="sri lankan">Sri Lankan</option>
							  <option value="sudanese">Sudanese</option>
							  <option value="surinamer">Surinamer</option>
							  <option value="swazi">Swazi</option>
							  <option value="swedish">Swedish</option>
							  <option value="swiss">Swiss</option>
							  <option value="syrian">Syrian</option>
							  <option value="taiwanese">Taiwanese</option>
							  <option value="tajik">Tajik</option>
							  <option value="tanzanian">Tanzanian</option>
							  <option value="thai">Thai</option>
							  <option value="togolese">Togolese</option>
							  <option value="tongan">Tongan</option>
							  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
							  <option value="tunisian">Tunisian</option>
							  <option value="turkish">Turkish</option>
							  <option value="tuvaluan">Tuvaluan</option>
							  <option value="ugandan">Ugandan</option>
							  <option value="ukrainian">Ukrainian</option>
							  <option value="uruguayan">Uruguayan</option>
							  <option value="uzbekistani">Uzbekistani</option>
							  <option value="venezuelan">Venezuelan</option>
							  <option value="vietnamese">Vietnamese</option>
							  <option value="welsh">Welsh</option>
							  <option value="yemenite">Yemenite</option>
							  <option value="zambian">Zambian</option>
							  <option value="zimbabwean">Zimbabwean</option>
        </select>
    </div>
    </form>
    
</div>

<button class="accordion">How can companies contact you?</button>
<div class="panel">

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
    
</div>

<button class="accordion">Add your Education</button>
<div class="panel">
  
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
    
</div>
    
<button class="accordion">Add your Experiences</button>
<div class="panel">
  
    <form>
    <div class="grid-100">
        <label>Role</label><br>
        <input type="text" placeholder="Bachelor of Awesomeness"><br>
    </div>
    
    <div class="grid-50">
        <label>Start Date</label><br>
        <input type="date">
        </div>
    
    <div class="grid-50">
        <label>End Date</label><br>
        <input type="date">
    </div>
    
    <div class="grid-100">
          <label>Top 3 things I learnt here</label><br>
        <input type="text" placeholder="1">
        <input type="text" placeholder="2">
        <input type="text" placeholder="3">
    </div>
    
    <button class="button orange">Add another Experience</button>    
    </form>
    
</div>
    
<button class="accordion">Personalize your profile!</button>
<div class="panel">
    
    <form>
    <div class="grid-100">
        <label>What can I add to the company?</label><br>
        <textarea></textarea><br>
        
        <label>Add a Quote</label><br>
        <input type="textarea" placeholder="To be or not to be, that is the question..."<br>
        
        <label>Profile Picture</label><br>
        <input type="file"><br>
        
        <label>Profile Header</label><br>
        <input type="file"><br>
        
        <label>CV</label><br>
        <input type="file"><br>
    </div>
    </form>

</div>
<br><br>
    <a class="button grey outline" onclick="skipButton()" style="margin-right:1em;">SKIP</a>
    <a class="button orange">SAVE MY INFORMATION</a>

</div>
<br>

<script>
    function skipButton() {
        var x = confirm("Are you sure you want to skip this process?");
        
        if(x == true) {
            alert("You can continue by going to settings in your profile."); 
        }
    }
</script>    
    
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>
<?php include 'footer.php'; ?>