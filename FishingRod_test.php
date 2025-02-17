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

?>