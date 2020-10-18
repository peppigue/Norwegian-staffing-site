<?php

// capture data from web form POST submission
$formDataName = htmlspecialchars($_POST['navn']);
$formDataUrl = htmlspecialchars($_POST['nettadresse']);
$formDataNote = htmlspecialchars($_POST['notat']);


/*
// Solution 1:
// enter data into sql db

// connection to db
include phpdbconnect.php

$openedConnectionToDb = openConn();

echo('Connected to db');


// sql query to edit table
$sqlStatement = "INSERT INTO bemanning(name, url, notat) VALUE $formDataName, $formDataUrl, $formDataNote";

function updateSqlDb() {

  mysqli_query($sqlStatement);

};

closeConn($openedConnectionToDb);
*/


// Solution 2:
// use csv file as db

$dbFile = 'bemanning.csv';

$fileAccess = fopen($dbFile, 'a');

fwrite($fileAccess, PHP_EOL . "navn:" . $formDataName);
fwrite($fileAccess, PHP_EOL . "nettside:" . $formDataUrl);
fwrite($fileAccess, PHP_EOL . "notat:" . $formDataNote);

fwrite($fileAccess, PHP_EOL);

// write to file the checkbox values
fwrite($fileAccess, "tjenester:" . PHP_EOL);

foreach ($_POST['tjenester'] as $arrayMember => $value) {
  fwrite($fileAccess, $value . "££");
}

fwrite($fileAccess, PHP_EOL);

fwrite($fileAccess, "kategori:" . PHP_EOL);

foreach ($_POST['kategori'] as $arrayMember => $value) {
  fwrite($fileAccess, $value . "££");
}

fwrite($fileAccess, PHP_EOL);

fwrite($fileAccess, "område:" . PHP_EOL);

foreach ($_POST['område'] as $arrayMember => $value) {
  fwrite($fileAccess, $value . "££");
}

// separator between entries
fwrite($fileAccess, PHP_EOL . "&&&&&");

// close file after writing and reading
fclose($fileAccess);

// write to db from csv


?>

<html>

<head>

  <!-- redirect automatically back to main/business directory page -->
  <!-- 
  <script>
    setTimeout(function() {
      window.location.href='oversikt.php'
    }, 3500);
  </script>
 -->
  <meta http-equiv="refresh" content="3.5;url=oversikt.php">

</head>

<body style="background-color: black; text-align: center">

  <br>
  <p style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size: 100px; color: white; background-color: black;">
    Database oppdatert
    <br>
    <br>
    redirecting...
  </p>
</body>

</html>