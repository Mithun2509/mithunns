<?php
if(isset($_POST['fname']) && ($_POST['lname']) && ($_POST['email']) && ($_POST['subject']) && ($_POST['message'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $to = 'mithunsubbu007@gmail.com';
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $body = "<html>
                <body>
                <h2><strong>Contact-Form</strong></h2>
                <hr>
                <p>NAME : '.$fname.'\t'.$lname.' </p>
                <p>EMAIL : '.$email.'</p>
                <p>MESSAGE : '.$message.'</p>
                </body>
             <html>";
    echo $fname;
    echo $lname;
    echo $email;
    echo $message;

    $headers = "From:".$fname." <".$email.">\r\n";
    $headers = "Reply-To: ".$email."\r\n";
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers = "Content-type: text/html; charset=utf-8";

    $send = mail($to,$subject,$body,$headers, "From: ".$fname." <".$email.">\r\n");
    if($send){
        echo '<br>';
        echo "Thanks for contacting us";
    }
    else{
        echo 'error';
    }
}
?>