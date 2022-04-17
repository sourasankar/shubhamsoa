<?php 
// DB credentials.
define('DB_HOST','194.163.35.151');
define('DB_USER','u708245423_5Wpp4');
define('DB_PASS','Kootty123#');
define('DB_NAME','u708245423_eNgPt');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>