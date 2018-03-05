<?php
require_once("config/db.php");
    try{
        $result=$db->query("SELECT * FROM accessories")->fetchAll(PDO::FETCH_ASSOC);
    }catch(Exception $e){
        $result = array();
        echo "На данный момент товаров нет";
    }
?>