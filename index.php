<?php
include "personne.php"; 
require_once("employee.php");
$p1 = new Personne("amin", "mokdad", "casa");
echo $p1 . '<br>'. '<br>'; 
$p2 = new Personne("amin", "mokdad", "casa");
echo $p2 . '<br>' .'<br>'; 
$p3 = new Personne("amin", "mokdad", "casa");
echo $p3 . '<br>' .'<br>'; 
?>
