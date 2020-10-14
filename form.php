<?php

// fange data fra web form POST
$formData[] = $_POST;

echo($formData["vikartjenester"]);
echo($formData["headhunting"]);
echo($formData["personalutvikling"]);
echo($formData["kurs"]);
echo($formData["organisasjonsutvikling"]);
echo($formData["karriererådgivning"]);
echo($formData["bedriftsrådgivning"]);
echo($formData["konflikthåndtering"]);

// Løsning 1:
// bruke csv-fil som db

$dbFile = 'bemanning.csv';

$fileAccess = fopen($dbFile, 'a');

/*
for($i = 0 ; $i < array_count_values($formData) ; $i++) {
    echo($i.'\n');
};
*/


// close file after writing and reading
fclose($fileAccess);

// Løsning 2:
// skrive data til sql db
/*
$servername = "peppigue.com.mysql";
$username = "peppigue_combemanning";
$password = "dontbeanegg";
$dbname = "peppigue_combemanning";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to edit table
$sql = "";

if ($conn->query($sql) === TRUE) {
  echo "Edit successful";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
*/

// oppdatere oversikt webside
// $oversiktside = 'oversikt.html';



/*
name="vikartjenester">
name="headhunting">
name="personalutvikling">
name="kurs">
name="organisasjonsutvikling">
name="karriererådgivning">
name="bedriftsrådgivning">
name="konflikthåndtering">
name="event">
name="offboarding">
name="lederutvikling">
name="it">
name="rengjøring">
name="økonomi">
name="ledelse">
name="vaktmester">
name="håndverk">
name="helse">
name="lager">
name="hele_norge">
name="sverige">
name="polen">
name="baltikum">
name="danmark">
name="utenlands">
name="oslo">
name="østfold">
name="follo">
name="ringerike">
name="romerike">
name="asker">
name="bærum">
name="buskerud">
name="vestfold">
name="telemark">
name="agder">
name="rogaland">
name="hordaland">
name="bergen">
name="sunnmøre">
name="romsdal">
name="nordmøre">
name="sør_trøndelag">
name="trondheim">
name="nord_trøndelag">
name="nordland_sør">
name="nordland_nord">
name="lofoten">
name="bodø">
name="narvik">
name="harstad">
name="indre_troms">
name="troms_nord">
name="tromsø">
name="finnmark_sør">
name="finnmark_nord">
*/

?>