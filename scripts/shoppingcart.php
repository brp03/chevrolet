<?php
require_once("config/db.php");
if(isset($_POST['id']) && $_POST['id']!=''){
    $id = strip_tags($_POST['id']);
   try{
        $db = new PDO('mysql:host='.HOST.';dbname='.DBNAME,USERNAME,PASSWORD);
        $stmt = $db->prepare("SELECT `title`,`price`,`file_path` FROM accessories WHERE id=(:id)");
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
       
        echo json_encode($result);
    }catch(PDOException $e){
        echo $e->getMessage();
    } 
}
?>