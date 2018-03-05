<?php
require_once("config/db.php");
if(isset($_POST['id']) && $_POST['id']!=''){
    $images = [];
    $stmt = $db->prepare("SELECT * FROM accessories WHERE id=(:id)");
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $dir = scandir(trim($result[0]['file_path'],'/'));
    foreach($dir as $item){
        if($item!='.' && $item!='..'){
           $images[]=$item;
        }
    }
    $result[0]['images']=$images;
    echo json_encode($result);
}
    
    
?>