<?php
function declareContent($arg){
	if($arg == "Home"){
		require("./contents/main.php");	
	}
	elseif($arg == "Menu"){
		require("./contents/menu.php");	
	}
	elseif($arg == "Catalogue"){
		require("./contents/catalogue.php");	
	}
	elseif($arg == "Shopping"){
		require("./contents/shopping.php");			
	}
	elseif($arg == "FAQ"){
		require("./contents/FAQ.php");	
	}
	elseif($arg == "Contact"){
		require("./contents/contact.php");	
	}
	elseif($arg == "Login"){
		require("./contents/login.php");	
	}
	elseif($arg == "Register"){
		require("./contents/register.php");	
	}
	elseif($arg == "Forgot"){
	}
	else{
		require("./contents/main.php");	
	}
}
?>
