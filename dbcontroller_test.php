<?php
//hibákat szeretném megjeleníteni
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once 'dbcontroller.php';
//objektum példányosítása (létrehozok egy példányt)
$db= new DBController();
//Teszt: adatbázis kapcsolat
if($db->connectDB())
{
    echo "Az adatbázis kapcsolat sikeres!<br>";
}
else
{
    echo "Az adatbázis kapcsolat sikerTELEN!<br>";
}


?>