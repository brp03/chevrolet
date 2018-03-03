<?php
require_once("config/db.php");
    try{
        $db = new PDO('mysql:host='.HOST.';dbname='.DBNAME,USERNAME,PASSWORD);
        $result=$db->query("SELECT * FROM accessories")->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>