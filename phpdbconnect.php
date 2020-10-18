<?php

function openConn() {

    $dbhost = "localhost";
    $dbuser = "peppigue_combemanning";
    $dbpass = "dontbeanegg";
    $db = "peppigue_combemanning";
 
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
    return $conn;
}
 
function closeConn($conn) {

    $conn -> close();
    echo('Connection to sql db closed');

}
   
?>