<?php
use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();
    $reset_password_link ="http://localhost/adminkit/reset_password.php";

    //SMTP Settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "bhagyashrishingare212@gmail.com";
    $mail->Password = "sqeaqyvnkowqkalm";
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    $mail->isHTML(true);
    $mail->setFrom($email, $firstname);
    $mail->addAddress($email);
    $mail->Subject = "PASSWORD RECOVERY";
    $mail->Body = "Dear " . $email . ",<br><br>";
    $mail->Body .= "You have requested to recover your password. Below are your login details:<br>";
    // $mail->Body .= "Username: " . $username . "<br>";
    $mail->Body .= "To reset your password, please follow the instructions below:<br><br>";
    $mail->Body .= "1. Click on the following link to reset your password: " . $reset_password_link . "<br>";
    $mail->Body .= "2. Enter your new password twice in the provided fields.<br>";
    $mail->Body .= "3. Click on the 'Submit' button to save your new password.<br><br>";
    $mail->Body .= "If you did not make this request, please ignore this email.<br><br>";
    $mail->Body .= "Thank you,<br>";
    $mail->Body .= "ASDR INFOTECH, BANER";


    if ($mail->send()) {
        $status = "success";
        $response = "Email is send!";
    } else {
        $status = "failed";
        $response = "Something is Wrong: <br> " . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));


}