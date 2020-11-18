<?php

require_once("alumnes.php");
require_once("assignatura.php");

$alumne1 = new alumne("Pep", "30", "42936810P");
$alumne2 = new alumne("Joan", "20", "43728193J");
$alumne3 = new alumne("Ignasi", "22", "49170655A");
$alumne4 = new alumne("Marc", "19", "47911238L");
$alumne5 = new alumne("Pere", "25", "49000125N");

$alumnes = array($alumne1, $alumne2, $alumne3, $alumne4);

$assig = new assignatura("Diseny web", "034", $alumnes);

$alOrd = $assig->ordenar();

echo "<ul>";
foreach($alOrd as $alumne){
    echo "<li>" . $alumne->__toString() . "</li> ";
}
echo "</ul>";
?>