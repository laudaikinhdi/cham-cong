<?php 
	include 'connect.php';
  include 'Classes/PHPExcel/IOFactory.php';
        // $sql="SELECT * FROM ctcongviec";
        // $result=$conn->query($sql);     
		 //$filename = "bangchamcong.xls"; // File Name

  <meta charset='utf-8'>;
// Loại file cần ghi là file excel phiên bản 2007 trở đi
$fileType = 'Excel2007';
// Tên file cần ghi
$filename = 'product_import.xlsx';
 
// Load file product_import.xlsx lên để tiến hành ghi file
$objPHPExcel = PHPExcel_IOFactory::load("product_import.xlsx");
 
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");

// Write data to file
// $flag=false;
// if($result -> num_rows >0){
// 	while($row= $result -> fetch_assoc()) {
//     if(!$flag) {
//       // display field/column names as first row
//       echo implode("\t", array_keys($row)) . "\r\n";
//       $flag = true;
//     }
//     echo implode("\t", array_values($row)) . "\r\n";
//   }
// }
                                $danhsachgv = array();
                                $danhsachtengv = array();
                                $sql = "SELECT magv,tengv FROM gv";

                                $result = $conn->query($sql);

                                while ($row = $result->fetch_assoc()) {
                                    array_push($danhsachgv, $row['magv']);
                                    array_push($danhsachtengv, $row['tengv']);
                                }
                                $soluonggv = count($danhsachgv);
                                // echo "<tr style='widtd: 3%'><td style='font-weight:bold'>Họ Tên</td>";
                                    for($ngay=1;$ngay<=date('t');$ngay++)
                                    {

                                        echo "\t".$ngay;
                               
                                    }
                                    echo "\r\n";
                                    // echo "<th>Ghi Chú</th>";
                                // echo "<td style='font-weight:bold'> Ghi chú</td></tr> ";
                                for($x = 0; $x < $soluonggv; $x++)
                                {

                                    $magv = $danhsachgv[$x];
                                    $tengv = $danhsachtengv[$x];
                                    $mangviecsang = array();
                                    $mangviecchieu = array();
                                    for($ngay = 0; $ngay < date('t'); $ngay++)
                                    {
                                        array_push($mangviecsang, '');
                                        array_push($mangviecchieu, '');
                                    } 
                                    $ngaycham=array();
                                    for($ngay=1;$ngay<=date('t');$ngay++){
                                        $layngay = "".date('y')."-".date('m')."-".$ngay;
                                        array_push($ngaycham, $layngay);
                                    }
                                    $layngaythuc=date('m');  
                                                              
                                        $nam=date('y');                   
                                    $sql= "SELECT * FROM ctcongviec,gv WHERE ctcongviec.magv=gv.magv AND ctcongviec.magv='$magv' AND  ngaythuchien LIKE '".'__'.$nam."-".$layngaythuc."-__'";      
                                   // $ghichu=$row['ghichu'];                         
                                    $result=$conn->query($sql);
                                    if($result->num_rows > 0 ){                                   
                                        while($row=$result->fetch_assoc()){
                                            $buoi = $row['buoi'];
                                            $ngay = $row['ngaythuchien'];
                                            $mangngay = explode("-", $ngay);
                                            if($buoi == "sang")
                                            {                                           
                                                $mangviecsang[$mangngay[2] - 1] = $row['macongviec'];
                                            }
                                            else
                                            {
                                                $mangviecchieu[$mangngay[2] - 1] = $row['macongviec'];
                                            }                                   
                                        }

                                             }                                                                        
                                    $tengv=mb_convert_encoding($tengv, 'UTF-16LE', 'UTF-8');
                                             
                                    echo "\r\n". $tengv ;

                                    for($i = 0; $i < date('t'); $i++)
                                    {                                                      
                                        echo "\t".$mangviecsang[$i];  
                                    }
                                    $nam=date('y'); 
                                    $sqlghichu = "SELECT ghichu FROM ctcongviec  WHERE magv='$magv' AND  ngaythuchien LIKE '".'__'.$nam."-".$layngaythuc."-__'";
                                $result = $conn->query($sqlghichu);
                                $ghichu = "";

                                if($result->num_rows > 0){
                                $ghichu = $result->fetch_assoc()['ghichu'];
                                echo "\t".$ghichu;
                                
                                }
                                else
                                {
                                    echo "\t";
                                }
                                echo "\r\n";
                                    
                                    // echo "<tr style='width: 3%'>";
                                    for($i = 0; $i < date('t'); $i++)
                                    {                                                     
                                        echo "\t".$mangviecchieu[$i];
                                        //echo "<script></script>";
                                    }
                                    // echo "</tr>";

                                }     

// Tiến hành ghi file

 ?>