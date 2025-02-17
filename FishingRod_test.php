<?php
require_once("FishingRod.php");
//példányosítás
$fishingRod=new FishingRod();

//Összes horgászbot lekérdezése
echo "<h2>Összes horászbot:</h2>";
$allRods=$fishingRod->getAllFishingRods();
if(!empty($allRods))
{
    foreach($allRods as $rod)
    {
        echo "ID: " . $rod['fr_ID'] . " - Név: " . $rod['name'] . "<br>";
    }
}
else
{
    echo "Nincs találat az összes horgászbot lekérdezésére.<br>";
}

//Horgászbot lekérdezés ID alapán
echo "<h2>Az 1-es ID-s horgászbot:</h2>";
$rodById=$fishingRod->getFishingRodById(1);
if(!empty($rodById))
{
    foreach($rodById as $rod)
    {
        echo "ID: " . $rod['fr_ID'] . " - Név: " . $rod['name'] . "<br>";
    }
}
else
{
    echo "Nincs találat a megadott Id-val a horgászbot lekérdezésére.<br>";
}

//Nem létező Id-ra teszt
echo "<h2>Nemlétező ID-ra horgászbot:</h2>";
$invalidrodById=$fishingRod->getFishingRodById(9999);
if(!empty($invalidrodById))
{
    foreach($invalidrodById as $rod)
    {
        echo "ID: " . $rod['fr_ID'] . " - Név: " . $rod['name'] . "<br>";
    }
}
else
{
    echo "Nincs találat a megadott Id-val a horgászbot lekérdezésére.<br>";
}

//Típusra jó lekérdezés
echo "<h2>Query to type:</h2>";
$rodByType=$fishingRod->getFishingRodByType('Rakos');
if(!empty($rodByType))
{
    foreach($rodByType as $rod)
    {
        echo "ID: " . $rod['fr_ID'] . " - Név: " . $rod['name'] . "<br>";
    }
}
else
{
    echo "Nincs találat a megadott TÍPUSÚ horgászbot lekérdezésére.<br>";
}
//Nem létező típusra lek.
echo "<h2>Nemlétező TYPE-ra horgászbot:</h2>";
$invalidrodByType=$fishingRod->getFishingRodByType('Unkown type');
if(empty($invalidrodByType))
{
    echo "Ahogy vártuk, nincs találat.<br>";
}
else
{
    echo "Hiba. Nem várt találat a hibás típusra.<br>";
}
?>