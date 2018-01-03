<?php 
	include 'connect.php';

		$sql="SELECT * FROM gv ";

		if(isset($_POST['slnghi'])){
			$magv=$_POST['slnghi'];
			
		$sqlnghi = "SELECT macongviec FROM ctcongviec WHERE magv='$magv'";

		$result = $conn->query($sqlnghi);
		$_SESSION['magv']=$_POST['slnghi'];
		$luungaynghi=array();
		if($result->num_rows > 0)
		{
			while($row=$result->fetch_assoc()){
				if($row['macongviec']=='P1')
					array_push($luungaynghi, 'P1');
				if($row['macongviec'] =='P2')
					array_push($luungaynghi,'P2');
				if($row['macongviec'] == 'P3')
					array_push($luungaynghi, 'P3');
				if($row['macongviec'] =='P4')
					array_push($luungaynghi,'P4');
				if($row['macongviec'] =='P5')
					array_push($luungaynghi, 'P5');
			}
		}
		
		$tongngaynghi=0;
		$tongluungaynghi= count($luungaynghi);
		for($y=0;$y<$tongluungaynghi;$y++){
		$songayngi = explode('P', $luungaynghi[$y]);
		$tongngaynghi += (int)$songayngi[1];
		}
		$tongngaynghi=$tongngaynghi*50;
		
		$gio=$phut=0;
		if($tongngaynghi!=0){
			$gio=(int)$tongngaynghi/60;
			$phut=(int)$tongngaynghi%60;
		}
		
		echo " Tổng số ngày nghỉ " .(int)$gio ." giờ " .$phut . " phút ";
	
	}

		$result=$conn->query($sql);
		
		echo "<form action='thongke.php' method='post'>";
		echo "<select name='slnghi'>";
		if($result->num_rows >0)
		{
			while ($row=$result->fetch_assoc()) {
				if(isset($_SESSION['magv']))
				{
					if($_SESSION['magv']==$row['magv'])
						echo "<option  value='".$row['magv']."' selected >".$row['tengv']." </option>"; 	
					else
						echo "<option  value='".$row['magv']."'>".$row['tengv']." </option>";
				}
				else if(!isset($_SESSION['magv']))
					echo "<option  value='".$row['magv']."'>".$row['tengv']." </option>";
			}
		}
		echo "</select>";
		echo "<input class='btn btn-primary' type='submit' value='Thống Kê'>";
		echo "</form>";



								/*$mangviecsang = array();
                                $mangviecchieu = array();
		  						for($ngay = 0; $ngay < date('t'); $ngay++)
                                {
                                    array_push($mangviecsang, '');
                                    array_push($mangviecchieu, '');
                                }    

                                $magv=$row['magv'];
							    $sql= "SELECT macongviec,ngaythuchien,buoi,ghichu FROM ctcongviec WHERE magv='$magv'";
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
                                $soluongmang= count($mangviecsang);
                                      $luungaynghi=array();
                                      for($j=0;$j<$soluongmang;$j++)
                                      {
                                      		if($mangviecsang[$j]=='P1'){
                                      			array_push($luungaynghi, 'P1');
                                      			echo "321321";
                                      		}
                                      }*/
               //if($mangviecsang == "P1,P2,P3,P4,P5")


 ?>