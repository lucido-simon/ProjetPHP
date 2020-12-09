<?php 
/*if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > (5))) {
	// if last request was more than 30 minutes ago
	session_unset(); // unset $_SESSION variable for the run-time 
	session_destroy(); // destroy session data in storage
} else {
	$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
}*/

session_start();
$_SESSION['login'] = "alexis";
//unset($_SESSION['login']); // supprimer une variable
$_SESSION['isAdmin'] = true;
$_SESSION['isAdmin'] = array(
	"key1"  => "value1",
	"key2" => "value2"
);
/*session_unset(); // unset $_SESSION variable for the run-time 
session_destroy(); // destroy session data in storage
// Il faut réappeler session_start() pour accéder de nouveau aux variables de session
setcookie(session_name(),'',time()-1);*/

//$_COOKIE[session_name()] c'est l'id de la session
echo $_SESSION['login'];
?>