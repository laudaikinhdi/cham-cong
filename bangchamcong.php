<?php 
    session_start();
    if(isset($_SESSION['loi_insert']))
    {
            echo "<script> alert('Nhập sai mã công việc rồi!'); ";
            echo 'window.location= "bangchamcong.php";';
            echo "</script>";

            unset($_SESSION['loi_insert']);
    }
    
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Bảng Chấm Công</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/css.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?php 
 if(!isset($_SESSION['emaill'])): ?>
    <script type="text/javascript">
        alert("Bạn không có quyền truy cập vào trang này");
        window.location= "index.php";
    </script>

<?php endif ?> 
<body>

     <div class="container">
    <div class="row">
        <div class="col-sm-3 ">
            <img src="./assets/img/logo-tron.png" class="logo">           
        </div>
        <div class="col-sm-7 bmtt">
                <span style="color: #003399;" >TRƯỜNG ĐẠI HỌC TRÀ VINH </span> <br> <span> BỘ MÔN CÔNG NGHỆ THÔNG TIN</span>         
        </div>
        <div class="col-sm-2">
             <!-- <br><br><button class="btn btn-danger"><a href="http://localhost/web/login_with_google_using_php/"> Login With Google</a></button>   -->   
           <br> <a href="http://localhost/web/login_with_google_using_php/"><?php if(isset($_SESSION['name'])) {echo $_SESSION['name']; echo "<a href='../login_with_google_using_php/logout.php'><button class='btn btn-primary'> Logout </button></a>"; }  ?></a>
         </div>
    </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse " >
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a  href="quantri.php">Quản Trị</a></li>
                            <li><a class="menu-top-active" href="bangchamcong.php">Bảng Chấm Công</a></li>
                            <li><a href="index.php">Hướng Dẫn Chấm Công</a></li>
                            <li><a href="thongke.php">Thống Kê</a></li>
                            <li><a href="http://localhost/web/login_with_google_using_php/"><?php if(!isset($_SESSION['name'])) echo 'Đăng nhập với Google' ?></a></li>
                           <!--   <li><a href="login.html">Login Page</a></li>
                            <li><a href="blank.html">Blank Page</a></li> -->

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-sm-12" > 
                        <h1 class="page-head-line" style="font-family: Tangerine;">Bảng Chấm Công</h1>
                    </div>
            </div>
            <div class="row">
                 <div class="col-sm-12 col-md-12">
                    <?php 
                    include 'taomoi.php';
                    /*
                        
                       echo "<table border='1' style='text-align:center;'><tr><th>Ngày</th>";
                     for($ngay=1;$ngay<=date('t');$ngay++)
                         {

                                echo "<td>". $ngay . "</td>";
                               
                         }
                         echo "</tr><tr><th>Sáng</th>";
                
                         for($ngay=1;$ngay<=date('t');$ngay++)
                         {
                                //echo "<td><input  type='text' size='1' name='txtSang".$ngay."'></td>";
                         }
                            echo "</tr><tr><th>Chiều</th>";
                
                         for($ngay=1;$ngay<=date('t');$ngay++)
                         {
                                //echo "<td><input  type='text' size='1' name='txtChieu".$ngay."'></td>";
                         }
                        echo "</tr></table>";
                        echo "<br><input class='btn btn-primary' type='submit' value='Lưu'>";
                            if(isset($_SESSION['name']))
                                echo "<h2 style='text-align:center;'>" . $_SESSION['name'] . "</h2>";
                                echo "<h4 style='text-align:center;'>Tháng " . date('m') . "</h4><br>";
                               /* echo "<select name='slNgay'>";

                            for($ngay=1;$ngay<=date('t');$ngay++)
                            {

                                echo "<option value='".date('y')."-".date('m')."-".$ngay."'>Ngày ".$ngay."</option>";
                                

                               
                            }
                            echo "</select>";
                            echo "<input type='radio' value='Sang' name='buoi'>Sáng";
                            echo "<input type='radio' value='Chieu' name='buoi'>Chiều";
                            echo "<br><br><lable> Mã Công </lable> ";
                            echo "<input type='text' name='txtMaCong'><br><br>" ;
                            echo "<lable> Ghi Chú </lable> ";
                            echo "<textarea rows='2' cols='50' name='txtGhiChu'></textarea>";*/




                     ?>

                        
                     
                </div>
            </div>

               
               <div class="row">
                    <div class="col-sm-12" >
                       <form action="insertcc.php" method="post">
                       <table border="1" width="100%" style="text-align: center;" >
                            

                           <?php 
                           include "connect.php";
                           $laymagv=$_SESSION['magv'];
                           $sqltengv = "SELECT * FROM gv,ctcongviec WHERE gv.magv=ctcongviec.magv AND ctcongviec.magv = '$laymagv'";
                           $resultgv=$conn->query($sqltengv);
                           $row_laymagv = $resultgv->fetch_assoc();

                            if(isset($_SESSION['name'])){
                                echo "<h3>Chào: " . $row_laymagv['tengv']. "</h3>";
                                echo "<h4 style='text-align:center'>Tháng " .date('m') . "</h4>";
                           }

                                
                                
                                $magv=$_SESSION['magv'];                                                               
                                $mangviecsang = array();
                                $mangviecchieu = array();
                                for($ngay = 0; $ngay < date('t'); $ngay++)
                                {
                                    array_push($mangviecsang, '');
                                    array_push($mangviecchieu, '');
                                }                                                               
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
                                 echo "<tr><td style='font-weight:bold'>Ngày</td>";
                                 for($ngay=1;$ngay<=date('t');$ngay++)
                                {

                                    echo "<td style='font-weight:bold'>". $ngay . "</td>";
                               
                                }
                                // echo "<th>Ghi Chú</th>";
                                echo "</tr>";
                                 echo "<tr><td style='font-weight:bold'>Sáng</td>";
                                 for($i = 0; $i < date('t'); $i++)
                                 {                                                      
                                    echo "<td><input style='border:none;text-align:center;'  type='text' size='1' name='txtSang".($i + 1)."' value='".$mangviecsang[$i]."'></td>";
                                    
                                 }
                                 echo "</tr>";

                                 echo "<tr><td style='font-weight:bold'>Chiều</td>";
                                 for($i = 0; $i < date('t'); $i++)
                                 {                                                     
                                    echo "<td><input style='border:none;text-align:center;'  type='text' size='1' name='txtChieu".($i + 1)."' value='".$mangviecchieu[$i]."'></td>";


                                    //echo "<script></script>";
                                 }

                                
                                 /*echo "<tr>";
                                 echo "<th>Sáng</th>";
                                 for($i = 0; $i < date('t'); $i++)
                                 {
                                    echo "<td>".$mangviecsang[$i]."</td>";
                                 }
                                 echo "</tr>";
                                 echo "<tr>";
                                 echo "<th>Chiều</th>";
                                 for($i = 0; $i < date('t'); $i++)
                                 {
                                    echo "<td>".$mangviecchieu[$i]."</td>";
                                 }
                                 echo "</tr>";*/

                            ?>
                            <tr>
                            
                            </tr>
                       </table>
                       <br>
                       <?php
                       include 'connect.php';
                       $ngay=15;
                       $magv = $_SESSION['magv'];
                       $ngaycham = "".date('y')."-".date('m')."-".$ngay;

                       $sqlghichu = "SELECT ghichu FROM ctcongviec  WHERE magv='$magv' AND ngaythuchien='$ngaycham' ";
                       $result = $conn->query($sqlghichu);
                       $ghichu = "";
                       if($result->num_rows > 0){
                        $ghichu = $result->fetch_assoc()['ghichu'];
                       }
                       echo "<span style='font-weight: bold; text-decoration: underline;'>Ghi chú:</span><br>";
                       echo "<textarea  style='width: 100%;box-shadow: 0 0 10px 0 gray' rows='4' name='txtGhiChu'>".$ghichu."</textarea>";
                       ?>
                       
                       <input type="submit" name="submit" value="Lưu"  class="btn btn-primary">
                    </form>
                    </div>
                 </div> 
            </div>
         </div>
           
                
             
<footer id="page-footer" class="container-fluid">
            <div class="row-fluid">
        <aside id="block-region-footer-left" class="span4 block-region" data-blockregion="footer-left" data-droptarget="1"></aside><aside id="block-region-footer-middle" class="span4 block-region" data-blockregion="footer-middle" data-droptarget="1"></aside><aside id="block-region-footer-right" class="span4 block-region" data-blockregion="footer-right" data-droptarget="1"></aside>     </div>

    <div class="footerlinks">

        <div class="row-fluid">

            <p class="helplink"></p>
            <div class="footnote">
            <p>Mai Ngọc Thanh Tân - 110114072</p>
            <p>Đề tài: Xây dững website quản lý việc chấm công Bộ môn Công nghệ Thông tin </p>
            
            

</div>      
</div>
        
                    
    <div class="socials row-fluid">
    
            <div class="span6">
            <div class="social_contact">
                        <nobr><i class="fa fa-bookmark-o"></i> &nbsp;<a href='http://sit.tvu.edu.vn' target="_blank" class="social_contact_web" style="color: #FF8800;">http://sit.tvu.edu.vn</a></nobr>
                                    <nobr><i class="fa fa-envelope-o"></i> &nbsp;E-mail: <a  style="color: #FF8800;" href='mailto:bmcntt@tvu.edu.vn'>bmcntt@tvu.edu.vn</a></nobr>
                        </div>
        </div>
        <div class="span6">
                    <div class="social_icons pull-right">
                <a class="social fa fa-facebook" href='https://www.facebook.com/TraVinhUniversity.TVU' target='_blank'> </a>                                                                                         <a class="social fa fa-youtube" href='https://www.youtube.com/channel/UCaxnllxL894OHbc_6VQcGmA' target='_blank'> </a>            </div>
        </div>
        
    </div>
                
    </div>
    

    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
