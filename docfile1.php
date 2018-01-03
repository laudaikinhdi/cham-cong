<?php
    include 'connect.php';    
?>
<?php  
    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=bangchamcong.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
?>


<?php  
    // Lay du lieu tu Database
    
    $list = array();
    $sql= "SELECT magv,tengv FROM gv";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
            $temp =  array(
                'magv' => $row['magv'],
                'tengv' => $row['tengv'],
            );
            array_push($list, $temp);
        }
    }
?>
<meta charset="utf-8">
<table border="1">

    <h2 style="text-align: center"> Bảng Chấm Công  </h2>
    <h4 style="text-align: center"> Tháng <?php echo date('m') . " Năm " ."20". date('y') ?></h4>
    <thead>    
        <tr style="border: 1px;"><th>Họ Tên\Ngày</th>         
            <?php for($i = 1; $i<=date('t');$i++)
                echo "<th style='width: 30px;'>".$i."</th>";
            ?>
            <th>Ghi Chú</th>
        </tr>
    </thead>
    <tbody>
        <?php  foreach($list as $l):?>
        <tr>
            <td rowspan="2" style="font-size: 13px;"><?php echo $l['tengv'] ?></td>
            <?php  
                $sqlcvs = "SELECT magv,macongviec FROM ctcongviec WHERE magv='".$l['magv']."' AND buoi = 'sang'";
                $rs = $conn->query($sqlcvs);
                if($rs->num_rows > 0){
                    while($r = $rs->fetch_assoc()){
                        echo "<td>".$r['macongviec']."</td>";
                    }
                }
                else{
                    echo "<td></td>";
                    for($i = 1; $i < date('t'); $i++){
                        echo "<td></td>";
                    }
                }
            ?>   
            <?php 
                $sqlghichu= "SELECT magv,ghichu FROM ctcongviec WHERE magv='".$l['magv']."'";
                $ghichu="";
                $result=$conn->query($sqlghichu);
                if($result->num_rows > 0)
                    $ghichu=$result->fetch_assoc()['ghichu'];
                    echo "<td rowspan='2'>" . $ghichu . "</td>";
             ?>   
        </tr>
        <tr>      

            <?php  
                $sqlcvc = "SELECT magv,macongviec FROM ctcongviec WHERE magv='".$l['magv']."' AND buoi = 'chieu'";
                $rs = $conn->query($sqlcvc);
                if($rs->num_rows > 0){
                    while($r = $rs->fetch_assoc()){
                        echo "<td>".$r['macongviec']."</td>";
                    }
                }
                else{
                    echo "<td></td>";
                    for($i = 1; $i < date('t'); $i++){
                        echo "<td></td>";
                    }
                }
                
            ?>  

             
        </tr>
        <?php endforeach; ?>        
    </tbody>

</table>
