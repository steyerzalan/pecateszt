<?php
require_once('restKezelo.php');

//New rest Treater object item produce
$restKezelo=new RestKezelo();

//HTTP status test - 200 OK
echo "<h2>HTTP 200 - OK: </h2>";
echo $restKezelo->gethttpStatusUzenet(200) . "<br>";

//HTTP status test - 400 Bad Request
echo "<h2>HTTP 400 - Bad Request: </h2>";
echo $restKezelo->gethttpStatusUzenet(400) . "<br>";

//HTTP status test - 404 Not Found
echo "<h2>HTTP 404 - Not Found: </h2>";
echo $restKezelo->gethttpStatusUzenet(404) . "<br>";

//HTTP status test - 500 Internal Server Error
echo "<h2>HTTP 500 - Internal Server Error: </h2>";
echo $restKezelo->gethttpStatusUzenet(500) . "<br>";

//Unknown HTTP statuscode test
echo "<h2>Unknown - HTTP statusz teszt: </h2>";
echo $restKezelo->gethttpStatusUzenet(999) . "<br>";

?>