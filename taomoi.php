<?php  
	$magv=$_SESSION['magv'];
	include 'connect.php';
                    
                    $ngay = '1';
                    $thang = date('m');
                    $nam = date('y');

                    $dates = $nam . "-" . $thang . "-" . $ngay;

                    $sql = "SELECT * FROM ctcongviec WHERE ngaythuchien='$dates' AND magv='$magv'" ;
                    $result = $conn->query($sql);

                    if($result -> num_rows == 0)
                    {
                        $magv = $_SESSION['magv'];
                        $ghichu="";
                        $macong = "";
                        for($ngay=1;$ngay <= date('t'); $ngay++)
                        {                                                  
                            $ngaycham = "".date('y')."-".date('m')."-".$ngay;
                            $sqlsang = "INSERT INTO ctcongviec(magv,macongviec,ngaythuchien,buoi,ghichu) VALUES('$magv','$macong','$ngaycham','sang','$ghichu')";
                            $sqlchieu = "INSERT INTO ctcongviec(magv,macongviec,ngaythuchien,buoi,ghichu) VALUES('$magv','$macong','$ngaycham','chieu','$ghichu')";
                            $conn->query($sqlsang);
                            $conn->query($sqlchieu);
                        }
                    }
   
?>