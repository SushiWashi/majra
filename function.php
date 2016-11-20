<?php
// Changes depending on if this file is on 
// the main server or localhost
function onServer() {
    $self = $_SERVER['SERVER_NAME'];
    
    if($self = 'localhost') {
        return '/majra/';
    } else {
        return '/';
    }
}

//Show Notification
function notification() {
    
    $notification_active = true;
    
    if($notification_active) {
        echo "<div class='notification'></div>";
        echo "<img src='" . folder() . "img/notifications.svg'>";
    } else {
        echo "<img src='" . folder() . "img/notifications_none.svg'>";
    }
    
}

//Active State in Nav Bar
function activeNav($page) {
    $self = $_SERVER['PHP_SELF']; 
        
    if($self == onServer().'workplaces.php' and $page=='workplaces') {
        echo "class='active'";
    } else if($self == onServer().'opportunities.php' and $page=='opportunities') {
        echo "class='active'";
    } else if($self == onServer().'resources.php' and $page=='resources') {
        echo "class='active'";
    //MOBILE LINKS
    } else if ($self == onServer().'index.php' and $page=='home') {
        echo "class='active'";
    } else if ($self == onServer().'createAccount.php' and $page=='signUp') {
        echo "class='active'";
    } else if ($self == onServer().'login.php' and $page=='login') {
        echo "class='active'";
    //OTHERWISE, SHOW NOTHING
    } else {
        echo '';
    }
    
}

// Replaces content if the user is on
// settings, about or companyUser 
function getPage() {
	$self = $_SERVER['PHP_SELF'];
    $p = $_GET['page'];
    $header = array("<h1 class='header'>",'</h1>');
    
    if($self== onServer().'about/index.php') {
        switch($p) {
            case 'company':
                echo $header[0] . 'company' . $header[1];
                include('company.php');
                break;
            case 'faq':
                echo $header[0] . 'faq' . $header[1];
                include('faq.php');
                break;
            case 'careers':
                echo $header[0] . 'careers' . $header[1];
                include('careers.php');
                break;
            case 'contact':
                echo $header[0] . 'contact' . $header[1];
                include('contact.php');
                break;
            case 'terms':
                echo $header[0] . 'terms & conditions' . $header[1];
                include('terms.php');
                break;
            default:
                echo $header[0] . 'company' . $header[1];
                include('company.php');
        }
    } else if ($self == onServer().'companyUser/index.php') {
        switch($p) {
            case 'addOpportunity':
                echo $header[0] . 'add new opportunity' . $header[1];
                include('addOpportunity.php');
			    break;
            case 'viewApp':
                echo $header[0] . 'view applicants & matches' . $header[1];
				include('viewApp.php');
				break;
			default:
                echo $header[0] . 'add new opportunity' . $header[1];
				include('addOpportunity.php');
			}
        } else if ($self == onServer().'settings/index.php') {
            switch($p) {
                case 'general':
                    echo $header[0] . 'general' . $header[1];
                    include('general.php');
                    break;
                case 'security':
                    echo $header[0] . 'security' . $header[1];
                    include('security.php');
                    break;
                case 'notifications':
                    echo $header[0] . 'notifications' . $header[1];
                    include('notifications.php');
                    break;
                default:
                    echo $header[0] . 'general' . $header[1];
                    include('general.php');
        } 
    }
}

//Change the <title>
function title() {
    
    $self = $_SERVER['PHP_SELF']; 
    $majra = " :: Majra";

    switch($self) {
        case onServer().'settings/index.php': 
            echo 'Settings' . $majra; 
            break;
        case onServer().'about/index.php':
            echo 'About' . $majra;
            break;
        case onServer().'companyProfile.php':
            echo 'COMPANY NAME' . $majra;
            break;
        case onServer().'blogPost.php':
            echo 'TITLE OF THE POST' . $majra;
            break;
        case onServer().'resources.php':
            echo 'Learning Resources' . $majra;
            break;
        case onServer().'opportunities.php':
            echo 'Find Opportunities' . $majra;
            break;
        case onServer().'opportunities-single.php':
            echo 'TITLE OF OPPORTUNITY' . $majra;
            break;
        case onServer().'workplaces.php':
            echo 'Explore Places' . $majra;
            break;
        case onServer().'forEmployees.php':
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


function darkBg() {
/* 
    Changes the background html & body
    when the user goes to "For Employees" page
*/    
    
    $self = $_SERVER['PHP_SELF'];
          
    if($self == onServer().'forEmployees.php') {
        echo "<html style='background-color:var(--darkGray)'> <body class='darkBody'>";
    } else {
        echo "<html> <body>";
    }
    
}

function folder() {
 
/*
    Adds "..." to links
*/
    
	$self = $_SERVER['PHP_SELF'];
    $folderPages = array(onServer()."about/index.php",
                         onServer(). "settings/index.php",
                         onServer(). "companyUser/index.php");
     
    
    foreach ($folderPages as $pages) {

        if($self == $pages) {
            echo '../';
        }
        
    }

}





?>