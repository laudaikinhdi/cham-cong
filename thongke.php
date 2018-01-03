<?php 
    session_start();
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
    <title>Đăng Nhập</title>
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
<body>
 <!--    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>info@yourdomain.com
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+90-897-678-44
                </div>

            </div>
        </div>
    </header> -->
    <!-- HEADER END-->
  
    <!-- LOGO HEADER END-->
     <div class="container">
    <div class="row">
        <div class="col-sm-3 ">
            <img src="./assets/img/logo-tron.png" class="logo">           
        </div>
        <div class="col-sm-7 bmtt">
                <span style="color: #003399;" >TRƯỜNG ĐẠI HỌC TRÀ VINH </span> <br> <span> BỘ MÔN CÔNG NGHỆ THÔNG TIN</span>         
        </div>
        <div class="col-sm-2">
             <!-- <br><br><button class="btn btn-danger"><a href="http://localhost/web/login_with_google_using_php/"> ,Login With Google</a></button>   -->   
            <br> <a href="http://localhost/web/login_with_google_using_php/"><?php if(isset($_SESSION['name'])) {echo $_SESSION['name']; echo "<a href='../login_with_google_using_php/logout.php'><button class='btn btn-primary'> Logout </button></a>"; }  ?></a>
           <br>
         </div>
    </div>
    </div>
   <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a  href="quantri.php">Quản Trị</a></li>
                            <li><a href="bangchamcong.php">Bảng Chấm Công</a></li>
                            <li><a  href="index.php">Hưỡng Dẫn Chấm Công</a></li>
                            <li><a class="menu-top-active" href="thongke.php">Thống Kê</a></li>
                            <li><a href="http://localhost/web/login_with_google_using_php/"><?php if(!isset($_SESSION['name'])) echo 'Đăng nhập với Google' ?></a></li>
                            <!--  <li><a href="login.html">Login Page</a></li>
                            <li><a href="blank.html">Blank Page</a></li>
 -->
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <div class="content-wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" style="font-family: Tangerine;">Thống Kê Bảng Chấm Công</h1>
                    </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                <form action="#" method="post">
                    <select name='slthang'">
                        <option value="01">Tháng 1</option>
                        <option value="02">Tháng 2</option>
                        <option value="03">Tháng 3</option>
                        <option value="04">Tháng 4</option>
                        <option value="05">Tháng 5</option>
                        <option value="06">Tháng 6</option>
                        <option value="07">Tháng 7</option>
                        <option value="08">Tháng 8</option>
                        <option value="09">Tháng 9</option>
                        <option value="10">Tháng 10</option>
                        <option value="11">Tháng 11</option>
                        <option value="12">Tháng 12</option>
                    </select>
                    <input type="submit" class="btn btn-primary" value="Thống Kê">
                </form>      
        <table border="1"  style="text-align: center;" >
                            

                           <?php 
                           include "connect.php";
                           $laythang=date('m');
                                if (isset($_POST['slthang'])) {
                                    //echo "Tháng" . $_POST['slthang'];
                                    $laythang=$_POST['slthang'];

                                }
                                echo "<h4 style='text-align:center'>Tháng " .$laythang . "</h4>";
                        
                                $danhsachgv = array();
                                $danhsachtengv = array();
                                $sql = "SELECT magv,tengv FROM gv";

                                $result = $conn->query($sql);

                                while ($row = $result->fetch_assoc()) {
                                    array_push($danhsachgv, $row['magv']);
                                    array_push($danhsachtengv, $row['tengv']);
                                }
                                $soluonggv = count($danhsachgv);
                                echo "<tr style='widtd: 3%;'><td style='font-weight:bold;'>Họ Tên</td>";
                                    for($ngay=1;$ngay<=date('t');$ngay++)
                                    {

                                        echo "<td style='font-weight:bold;width:1%;'>". $ngay . "</td>";
                               
                                    }
                                    // echo "<th>Ghi Chú</th>";
                                echo "<td style='font-weight:bold'> Ghi chú</td></tr> ";
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
                                    if(isset($_POST['slthang']))  {
                                            
                                        $layngaythuc=$_POST['slthang'];
                                        }                              
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
                                    echo "<tr><td style='width:7%;height:50px; font-weight:bold;font-family: Tangerine;' rowspan='2' >".$tengv."</td>";
                                    for($i = 0; $i < date('t'); $i++)
                                    {                                                      
                                        echo "<td style='width: 3%'>".$mangviecsang[$i]."</td>";  
                                    }
                                    $nam=date('y'); 
                                    $sqlghichu = "SELECT ghichu FROM ctcongviec  WHERE magv='$magv' AND  ngaythuchien LIKE '".'__'.$nam."-".$layngaythuc."-__'";
                                $result = $conn->query($sqlghichu);
                                $ghichu = "";

                                if($result->num_rows > 0){
                                $ghichu = $result->fetch_assoc()['ghichu'];
                                echo "<td rowspan='2'>$ghichu</td>";
                                
                                }
                                else
                                {
                                    echo "<td rowspan='2'></td>";
                                }
                                echo "</tr>";
                                    
                                    echo "<tr style='width: 3%'>";
                                    for($i = 0; $i < date('t'); $i++)
                                    {                                                     
                                        echo "<td>".$mangviecchieu[$i]."</td>";
                                        //echo "<script></script>";
                                    }
                                    echo "</tr>";

                                }                                  

                        ?>                       
                       </table>
                </div>
                
            </div>
            <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" style="font-family: Tangerine;">Thống Kê Số Ngày Nghỉ</h1>
                    </div>
            </div>
             <?php 
                include "hienthi.php";
              ?>
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
