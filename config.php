<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'it330phpserver.mysql.database.azure.com');
define('DB_USERNAME', 'MohayraQuibo@it330phpserver');
define('DB_PASSWORD', 'kalasahantakaw_0926');
define('DB_NAME', 'it330db');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
