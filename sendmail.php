<?php 
	// if there is post
include 'phpmailer/class.phpmailer.php';

	if (isset($_POST) && !empty($_POST)) {
		//if there is an attachment
			if(!empty($_FILES['attachment']['name'])){
				$file_name = $_FILES['attachment']['name'];
				$temp_name = $_FILES['attachment']['tmp_name'];
				$file_type = $_FILES['attachment']['type']; 
				// get tje extension of the file
				$base = basename($file_name);
				$extension = substr($base, strlen($base)-4,strlen($base));
				//only these file types will be allowed
				$allowed_extensions = array(".doc",".docx",".xls");
				if(in_array($extension, $allowed_extensions)){
					//mail essenstials
					$from = $_POST['email'];
					$to = "thanhtan876362@gmail.com";
					$subject = "Bảng Chấm Công";
					$message = " Bảng Chấm Công";
					//things you need
					$file = $temp_name;
					$content = chunk_split(base64_decode(file_get_contents($file)));
					$uid = md5(uniqid(time()));
					$header = "From: " . $from . "\r\n";
					$header .= "Reply-To" . $replyto . "\r\n";
					$header .= "MIME-Version: 1.0\r\n";  
					//declaring we have multiple kinds of email 
					$header .= "Content-Type: multipart/mixed; boundate=\"".$uid."\"\r\n\r\n";
					$header .= "This is a multi-part message in MIME format.\r\n"; 
					//plain text part
					$header .= "--".$uid. "\r\n";
					$header .= "Content-type:text/plain;charset=iso-8859-1\r\n";
					$header .= $message . "\r\n\r\n";
					//file attachment
					$header .= "--".$uid."\r\n";
					$header .= "Content-Type: ".$file_type.";name=\"".$file_name."\"\r\n";
					$header .= "Content-Transfer-Encoding: base64\r\n";
					$header .= "Content-Disposition: attachment; filename=\"".$file_name."\"\r\n";
					$header .= $content . "\r\n\r\n";
					send the mail
					if (mail($to, $subject,$header)) {
						echo "seccess";
					}else{
						"fail";
					}
				}else{
					echo "file type not allowed";
				}

			}else{
				echo "no file posted";
			}
		}	

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="sendmail.php" enctype="multipart/form-data">
	<input type="text" name="email">
	<br>
	<input type="file" name="attachment">
	<input type="submit" name=" Send mail">
		
	</form>
</body>
</html>