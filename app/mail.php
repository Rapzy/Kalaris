<?php 

if (!empty($_POST['phone']) || !empty($_POST['email'])){
    $mailto = 'info@kalaris.by';
    //$mailto = 'andrushko.egor@gmail.com';
    $name = htmlspecialchars(trim($_POST['name']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $email = htmlspecialchars(trim($_POST['email']));
    $site = htmlspecialchars(trim($_POST['site']));
    $check_site = htmlspecialchars(trim($_POST['check_site']));
    $check_seo = htmlspecialchars(trim($_POST['check_seo']));
    $check_SMM = htmlspecialchars(trim($_POST['check_SMM']));
    $check_idk = htmlspecialchars(trim($_POST['check_idk']));
    $quest = htmlspecialchars(trim($_POST['quest']));


    $eol = "\n";
    $subject = '=?utf-8?B?'. base64_encode('Письмо от клиента с сайта kalaris.by') .'?=';
    $headers= "MIME-Version: 1.0\r";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers  .= 'From: info@kalaris.by'.$eol;

    if($name) {
      $msg.=  "Имя: $name \r\n\n";
    }
    if($phone){
       $msg.=  "Телефон: $phone \r\n\n";
    }
    if($email){
       $msg.=  "E-mail: $email \r\n\n";
    }
    if($site){
       $msg.=  "Сайт: $site \r\n\n";
    }
    if($check_site){
       $msg.=  "$check_site \r\n\n";
    }
    if($check_seo){
       $msg.=  "$check_seo \r\n\n";
    }
    if($check_SMM){
       $msg.=  "$check_SMM \r\n\n";
    }
    if($check_idk){
       $msg.=  "$check_idk \r\n\n";
    }
    if($quest){
       $msg.=  "Вопрос: $quest \r\n\n";
    }
          

    if (mail($mailto, $subject, $msg, $headers)) {
    } 
} 
?>