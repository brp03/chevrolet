<?php
if((isset($_POST['usermail']) && $_POST['usermail']!='') && (isset($_POST['subject']) && $_POST['subject']!='') && (isset($_POST['description']) && $_POST['description']!='') ){
    $to = "nata391995@gmail.com";
    $sendFrom = strip_tags($_POST['usermail']);
    $subject = strip_tags($_POST['subject']);
    $headers  = "From: ".$sendfrom. "\r\n";
    $headers .= "Reply-To: ".$sendfrom. "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers = "Content-Type: text/html;charset=utf-8 \r\n";
    $message = wordwrap($_POST['description'],70,"<br/>");
    echo $sendFrom;
    $result = mail($to,$subject,$message,$headers);
    if($result){
        echo "<p style='color:white'><span class='label label-success'>Success</span> Ваше письмо отправлено.</p>";
    }else{
        echo "<p style='color:white'><span class='label label-warning'>Warning</span> Ваше письмо не отправлено. Повторите попытку.</p>";
    }
}else{
    echo "<p class=''text-warning>Заполните все поля.</p>";
}
?>