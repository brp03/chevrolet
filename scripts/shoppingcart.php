<?php
require_once("config/db.php");
if(isset($_POST['id']) && $_POST['id']!=''){
    $stmt = $db->prepare("SELECT `title`,`price`,`file_path` FROM accessories WHERE id=(:id)");
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
       
    echo json_encode($result);

}
?>