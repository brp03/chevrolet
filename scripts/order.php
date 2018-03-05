<?php
if((isset($_POST['name']) && $_POST['name']!='') && isset($_POST['surname']) && $_POST['surname']!='' && isset($_POST['region']) && $_POST['region']!='' && isset($_POST['city']) && $_POST['city']!='' && isset($_POST['deliveryMethod']) && $_POST['deliveryMethod']!='' && isset($_POST['adress']) && $_POST['adress']!='' && isset($_POST['typeOfPayment']) && $_POST['typeOfPayment']!='' && isset($_POST['phoneNumber']) && $_POST['phoneNumber']!='' && isset($_POST['arrOfOrders'])){

    foreach($_POST as $key=>$value){
        if(!is_array($value)){
            $_POST[$key] = strip_tags($value);
        }        
    }

    $to = "nata391995@gmail.com";
    $sendFrom ="noreply@site.com";
    $subject = "Новый заказ!";
    $headers  = "From: ".$sendFrom. "\r\n";
    $headers .= "Reply-To: ".$sendFrom. "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers = "Content-Type: text/html;charset=utf-8 \r\n";
    $message = "<html><body style='font-family:Arial,sans-serif; text-align: justify'>";
    $message .= "<h3 style='align:center; font-weight:bold;'>Заказ с сайта Nikuszsklep.com</h3>\r\n";
    $message .= "<p><strong>{$_POST['name']} {$_POST['surname']}</srtrong></p>\r\n";
    $message .= "<p><strong>{$_POST['phoneNumber']}</strong></p>\r\n";
    $message .= "<p>Область: {$_POST['region']}; Город: {$_POST['city']}.</p>\r\n";
    $message .= "<p>Спoсоб доставки: {$_POST['deliveryMethod']}.</p>\r\n";
    $message .= "<p>Адрес доставки (номер отделения): {$_POST['adress']}.</p>\r\n";
    $message .= "<p>Способ оплаты: {$_POST['typeOfPayment']}.</p>\r\n";
    $message .= "<p>Предмет заказа:</p><ul>\r\n";
    foreach($_POST['arrOfOrders'] as $order){
        $message .= "<li>" . $order . ";</li>\r\n";
    }
    $message .= "</ul>";
    $result = mail($to,$subject,$message,$headers);
    if($result){
        echo "<p class='text-success' style='text-align:center'>Ваше письмо успешно отправлено! В ближайшее время с вами свяжется наш менеджер.</p>";
    }else{
        echo "<p class='text-warning'  style='text-align:center'>Ваше письмо не отправлено! Повторите попытку.</p>";
    }
}
?>