<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlcc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if($_SERVER["REQUEST_METHOD"]=="POST"){
	for($ngay=1;$ngay<=date('t');$ngay++){
		$sang="txtSang" . $ngay;
		$macongsang=$_POST[$sang];
		$chieu="txtChieu" . $ngay;
		$macongchieu=$_POST[$chieu];
		$magv=$_SESSION['magv'];
		$ghichu=$_POST['txtGhiChu'];
		$ngaycham = "".date('y')."-".date('m')."-".$ngay;
		$sqlsang="UPDATE ctcongviec SET macongviec='$macongsang', ghichu='$ghichu' WHERE magv = '$magv' AND ngaythuchien='$ngaycham' AND buoi='sang'";
		$sqlchieu="UPDATE ctcongviec SET macongviec='$macongchieu', ghichu='$ghichu' WHERE magv = '$magv' AND ngaythuchien='$ngaycham' AND buoi='chieu'";
		
		if ($conn->query($sqlsang)&&$conn->query($sqlchieu)) {
			echo "Thành công";
			header("Location: bangchamcong.php");

		}
		else{
			$_SESSION['loi_insert'] = TRUE;
			echo "Error: " . $sqlsang . "<br>" . $conn->error;
			echo "Error: " . $sqlchieu . "<br>" . $conn->error;
		}
	}
	}
	/*$ngay=$_POST['slNgay'];
	$cc=$_POST['txtMaCong'];
	$buoi=$_POST['buoi'];
	$ghichu=$_POST['txtGhiChu'];
	$magv=$_SESSION['magv'];
	if(!empty($ngay)&&!empty($cc)){
		$sql="INSERT INTO ctcongviec(magv,macongviec,ngaythuchien,buoi,ghichu) VALUES('$magv','$cc','$ngay','$buoi','$ghichu')";
		if ($conn->query($sql)) {
			echo "Thành công";
			header("Location: bangchamcong.php");

		}
		else
			echo "Thất Bại";
			echo "Error: " . $sql . "<br>" . $conn->error;
	}

}*/
// $sql="SELECT * FROM gv  ";
// $result=$con->query($sql);
// if($result->num_rows>0){
// 	while ($row = $result->fetch_assoc()) {
// 		echo "<table> ";
// 		echo "<tr><td>" . $row["username"] . "</td><td>" . $row["password"] . "</td></tr>";
// 		echo "</table";
// 	}
// }

// $sql1="SELECT * FROM tbl_chucvu";
// $result1=$con->query($sql1);
// if($result1->num_rows>0){
// 	while ($row=$result1->fetch_assoc()) {
// 		echo "<table> ";
// 		echo "<tr><td>" . $row["name"] . "</td></tr>";
// 		echo "</table";
// 	}
// }

$conn->close();
?>