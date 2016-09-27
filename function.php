<?php 
function folder() {
	$self = $_SERVER['PHP_SELF'];
	
	switch($self) {
		case '/majra/about/index.php':
		case '/majra/settings/index.php':
			echo "../";
			break;
		default:
			echo "";
	}		
	
}

function sizeOfBusiness() {
	$type = 'startup';

	switch($type) {
		case "startup": 
			echo "<span style='background:var(--green)'>startup</span>";
			break;
		case "sme":
			echo "<span style='background:var(--blue)'>sme</span>";
			break;
		default:
			echo "<span style='background:var(--darkGrey)'>enterprise</span>";
		}

}

?>