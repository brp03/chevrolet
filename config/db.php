<?php
define("HOST","localhost");
define("DBNAME","Lacetti");
define("USERNAME","root");
define("PASSWORD","");
$db = new PDO('mysql:host='.HOST.';dbname='.DBNAME,USERNAME,PASSWORD);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>