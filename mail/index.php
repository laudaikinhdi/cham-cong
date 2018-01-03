<?php
require 'vendor\phpmailer\phpmailer\PHPMailerAutoload.php';
if (isset($_FILES['attachment'])) {

$mail = new PHPMailer;
//$_SESSION['attachment'] = trim ($_POST['attachment']);

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

//-----------------------------------------------------------------------
// Khong thay doi phan nay
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'emailquantri2017@gmail.com';                 // SMTP username
$mail->Password = 'zcklclvmrjtwhctp';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('laudaikinhdi@gmail.com', 'Admin'); // Add a recipient


//------------------------------------------------------------------------
$mail->addAddress('thanhtan876362@gmail.com'); // dia chi nhan email

$mail->addAttachment($_FILES['attachment']['tmp_name'], $_FILES['attachment']['name']);         // file dinh kem, tham so dau tien la duong dan cua file kem ten file, tham so thu 2 la ten file
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Bang Cham Cong Thang ' . date('m') ;// tieu de
$mail->Body    = 'Chào <b>Gửi cán bộ phụ trách bảng chấm công</b>';	// noi dung


if(!$mail->send()) {
    echo 'Gửi thất bại';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo "<script>";
    echo 'alert("Gửi thành công");';
    echo 'window.location= "http://localhost/web/chamcong/quantri.php";';
    echo "</script>";

}
}
?>