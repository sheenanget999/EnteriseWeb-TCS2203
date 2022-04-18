<?php
function GuiMail(){   
    require "PHPMailer-master/src/PHPMailer.php"; 
    require "PHPMailer-master/src/SMTP.php"; 
    require 'PHPMailer-master/src/Exception.php'; 
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug. khi chạy ngon thì chỉnh lại 0 nhé
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'nam28102001@gmail.com'; // SMTP username
        $mail->Password = 'Bolamvua3';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('nam28102001@gmail.com', 'Nam' ); 
        $mail->addAddress('tmquan204@gmail.com', 'Quan'); //mail và tên người nhận  
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'test thư gửi';
        $mailcontent = '<p>author!<hr><b>posted new idea</b></p>'; 
        $mail->Body = $mailcontent;
        $mail->smtpConnect( array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        echo 'Đã gửi mail xong';
    } catch (Exception $e) {
        echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
    }
 }//function GuiMail
 ?>
 <?php
    Guimail();
 ?>