<?php
require_once("RestVezerlo.php");
//Teszt: Összes Horgászbot lekérdezése
$FishingRodrest= new $fishingRodRestKezelo();
echo "Összes horgászbot lekérdezése: ";
$_GET["view"] ="all";
$FishingRodrest->getAllFRod();
echo "\n";

//Horgászbot by id
$_GET["view"] ="single";
$_GET["id"]=1; //meglévő id tesztelése
$FishingRodrest->getFRodById($_GET["id"]);
echo "\n";

//horászbot nemlétező id
$_GET["view"] ="single";
$_GET["id"]=99999; //meglévő id tesztelése
$FishingRodrest->getFRodById($_GET["id"]);
echo "\n";

//horgászbot típus alapján
$_GET["view"] ="tipus";
$_GET["tid"]="Rakos"; //létező típus
$FishingRodrest->getFRodByType($_GET["tid"]);
echo "\n";

//horgászbot nemlétező típus
$_GET["view"] ="tipus";
$_GET["tid"]="Unknown"; //nemlétező típus
$FishingRodrest->getFRodByType($_GET["tid"]);
echo "\n";

//Teszt: hibás kérés
$_GET["view"]="invalid"; //nem létező view
$FishingRodrest->getFault();
?>