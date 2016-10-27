<?php 
//Active State in Nav Bar
function activeNav($page) {
   
    $self = $_SERVER['PHP_SELF'];    
   
    if($self == '/majra/workplaces.php' and $page=='workplaces') {
        echo "class='active'";
    } else if($self == '/majra/opportunities.php' and $page=='opportunities') {
        echo "class='active'";
    } else if($self == '/majra/resources.php' and $page=='resources') {
        echo "class='active'";
    //MOBILE LINKS
    } else if ($self == '/majra/index.php' and $page=='home') {
        echo "class='active'";
    } else if ($self == '/majra/login.php' and $page=='login') {
        echo "class='active'";
    //OTHERWISE, SHOW NOTHING
    } else {
        echo '';
    }
    
}


//Change the <title>
function title() {
    
    $self = $_SERVER['PHP_SELF']; 
    $majra = " :: Majra";
    $serverLocation = '/majra/'; //Change to your server

    switch($self) {
        case $serverLocation . 'settings/index.php': 
            echo 'Settings' . $majra; 
            break;
        case $serverLocation . 'about/index.php':
            echo 'About' . $majra;
            break;
        case $serverLocation . 'companyProfile.php':
            echo 'COMPANY NAME' . $majra;
            break;
        case $serverLocation . 'blogPost.php':
            echo 'TITLE OF THE POST' . $majra;
            break;
        case $serverLocation . 'resources.php':
            echo 'Learning Resources' . $majra;
            break;
        case $serverLocation . 'opportunities.php':
            echo 'Find Opportunities' . $majra;
            break;
        case $serverLocation . 'opportunities-single.php':
            echo 'TITLE OF OPPORTUNITY' . $majra;
            break;
        case $serverLocation . 'workplaces.php':
            echo 'Explore Places' . $majra;
            break;
        case $serverLocation.'forEmployees.php':
            echo 'For Employers' . $majra;
            break;
        default:
            echo 'Not another job site'.$majra;
    }

}

//Working hours based on "Fixed", "Internship" or "Part Time"
function workHours() {
    
    $workingHours = "internship";
    
    switch($workingHours) {
	   case "fixed": 
            echo "<span class='workingHours' style='background:var(--green)'>full-time</span>";
			break;
        case "internship":
            echo "<span class='workingHours' style='background:var(--blue)'>internship</span>";
			break;
        default:
            echo "<span class='workingHours' style='background:var(--darkGray)'>part-time</span>";
    }
    
}

//Size of the company (Startup, SME or Enterprise)
function sizeOfCompany() {
    $type = "startup";
	
	switch($type) {
		case "startup": 
            echo "<span class='type' style='background:var(--green)'>startup</span>";
            break;
		case "sme":
            echo "<span class='type' style='background:var(--blue)'>sme</span>";
			break;
        default:
			echo "<span class='type' style='background:var(--darkGray)'>enterprise</span>";
		}
}

//Changes the body class
function bodyClass() {
    $self = $_SERVER['PHP_SELF'];
          
    if($self == '/majra/forEmployees.php') {
        echo "<body class='darkBody'>";
    } else {
        echo "<body>";
    }
}

//Adds "..." to links
function folder() {
	$self = $_SERVER['PHP_SELF'];
	
	switch($self) {
		case '/majra/about/index.php':
		case '/majra/settings/index.php':
        case '/majra/companyUser/index.php':
			echo "../";
			break;
		default:
			echo "";
	}		
	
}

/* 
Changes the background color
when the user goes to "For Employees" page
*/

	$self = $_SERVER['PHP_SELF'];
          
    if($self == '/majra/forEmployees.php') {
        echo "<html style='background-color:var(--darkGray)'>";
    } else {
        echo "<html>";
    }















?>