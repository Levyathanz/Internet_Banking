<?php
$DB_host = "localhost";
$DB_user = "#####";	//Configure with correct username and password
$DB_pass = "######";
$DB_name = "internetbanking_db";
try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}