<?php 

$array = array(
	"key1"  => "value1",
	"key2" => "value2"
); // définition tableau
setcookie("TestCookie", serialize($array), time()+5); // création cookie, on utilise serialise pour transformer le tableau en string

$TestCookie = !isset($_COOKIE["TestCookie"]) ? "Cookie introuvable" : 
	unserialize($_COOKIE["TestCookie"])["key1"] . " " . unserialize($_COOKIE["TestCookie"])["key2"]; // On récupère le cookie

echo "Cookie : $TestCookie"; // on affiche le résultat
?>