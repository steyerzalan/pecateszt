<?php
//beillesszük a db controllerünket
require_once("dbcontroller.php");

//Pecabot osztály elkészítése
class FishingRod{
//adattag egy tömb, amibe a pecabotokat fogom tárolni
private $fishingrods = [];
 
        //konstruktor: feltölti az előző tömböt adatokkal (azz összes pecabot)
        public function __construct()
        {
            $query = "SELECT fr_ID, name FROM fishingrod";
            $dbvez = new DBController();
            $this->fishingrods = $dbvez->executeSelectQuery($query);
            $dbvez->closeDB();
        }
        //A konstruktorban lekérdezett összes pecabot eredmény tömb
        public function getAllFishingRods()
        {
            
            return $this->fishingrods;
        }
        //"Id" szerinti lekérdezés
        public function getFishingRodById($RodsId)
        {
            $query = "SELECT fr_ID, name FROM fishingRod WHERE fr_ID = ".$RodsId;
            $dbvez = new DBController();
            $this->fishingrods = $dbvez->executeSelectQuery($query);
            $dbvez->closeDB();
            return $this->fishingrods;
        }
        //Típus szerinti lekérdezés
        public function getFishingRodByType($TypeId)
        {
            $query = "SELECT fr_ID, name FROM fishingrod
            inner join type on fishingrod.type_ID = type.t_id
            where type.m_name= '".$TypeId."'";
            $dbvez = new DBController();
            $this->fishingrods = $dbvez->executeSelectQuery($query);
            $dbvez->closeDB();
            return $this->fishingrods;
        }

}
?>