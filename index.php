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
    <title>Hướng Dẫn Bảng Châm Công</title>
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
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a  href="quantri.php">Quản Trị</a></li>
                            <li><a href="bangchamcong.php">Bảng Chấm Công</a></li>
                            <li><a class="menu-top-active" href="index.php">Hướng Dẫn Chấm Công</a></li>
                            <li><a href="thongke.php">Thống Kê</a></li>
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
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" style="font-family: Tangerine;">Hướng Dẫn Chấm Công</h1>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <table style="text-align: center; margin: auto;width: 50%;" class="table table-hover">
                        <tr>
                            <td style="font-weight: bold">SỐ TT</td>
                            <td style="font-weight: bold">NỘI DUNG CHẤM CÔNG</td>
                            <td style="font-weight: bold">KÝ HIỆU</td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td style="text-align: left;">Ngày làm việc theo quy định</td>
                            <td>+</td>
                        </tr>
                         <tr>
                            <td>2.</td>
                            <td style="text-align: left;">Làm việc ngoài giờ</td>
                            <td>X</td>
                        </tr>
                         <tr>
                            <td>3.</td>
                            <td style="text-align: left;">Giảng dạy buổi sáng</td>
                            <td>S</td>
                        </tr>
                         <tr>
                            <td>4.</td>
                            <td style="text-align: left;">Giảng dạy buổi chiều</td>
                            <td>C</td>
                        </tr>
                         <tr>
                            <td>5.</td>
                            <td style="text-align: left;">Giảng dạy buổi tối</td>
                            <td>T</td>
                        </tr>
                         <tr>
                            <td>6.</td>
                            <td style="text-align: left;">Thai sản, nghỉ hưởng chế độ thai sản</td>
                            <td>Ts</td>
                        </tr>
                         <tr>
                            <td>7.</td>
                            <td style="text-align: left;">Nghỉ dưỡng sức sau thai sản</td>
                            <td>Ds</td>
                        </tr>
                         <tr>
                            <td>8.</td>
                            <td style="text-align: left;">Nghỉ bù</td>
                            <td>Nb</td>
                        </tr>
                         <tr>
                            <td>9.</td>
                            <td style="text-align: left;">Nghĩ các ngày lễ, Tết</td>
                            <td>L</td>
                        </tr>
                         <tr>
                            <td>10.</td>
                            <td style="text-align: left;">Nghĩ không phép</td>
                            <td>V</td>
                        </tr>
                         <tr>
                            <td>11.</td>
                            <td style="text-align: left;">Nghỉ việc riêng(kết hôn, tang theo quy định)</td>
                            <td>R</td>
                        </tr>
                         <tr>
                            <td>12.</td>
                            <td style="text-align: left;">Nghỉ phép năm (kể cả bị ốm không có giấy của bác sĩ)</td>
                            <td>P</td>
                        </tr>
                         <tr>
                            <td>13.</td>
                            <td style="text-align: left;">Nghĩ không hưởng lương</td>
                            <td>No</td>
                        </tr>
                         <tr>
                            <td>14.</td>
                            <td style="text-align: left;">Nghĩ tuyển sinh</td>
                            <td>TS</td>
                        </tr>
                         <tr>
                            <td>15.</td>
                            <td style="text-align: left;">Nghĩ trong giờ giảng dạy (phải dạy bù)</td>
                            <td>P</td>
                        </tr>
                         <tr>
                            <td>16.</td>
                            <td style="text-align: left;">Nghỉ hè</td>
                            <td>NH</td>
                        </tr>
                         <tr>
                            <td>17.</td>
                            <td style="text-align: left;">Con ốm (có chỉ định của bác sĩ)</td>
                            <td>Cô</td>
                        </tr>
                         <tr>
                            <td>18.</td>
                            <td style="text-align: left;">Viên chức ốm, điều dưỡng (có chỉ định của bác sĩ)</td>
                            <td>Ô</td>
                        </tr>
                         <tr>
                            <td>19.</td>
                            <td style="text-align: left;">Coi thi (tốt nghiệp, tuyển sinh..)</td>
                            <td>CT</td>
                        </tr>
                         <tr>
                            <td>20.</td>
                            <td style="text-align: left;">Chấm thi</td>
                            <td>ct</td>
                        </tr>
                         <tr>
                            <td>21.</td>
                            <td style="text-align: left;">Đi thanh tra</td>
                            <td>TR</td>
                        </tr>
                         <tr>
                            <td>22.</td>
                            <td style="text-align: left;">Đi học, đi tập huấn</td>
                            <td>Đ</td>
                        </tr>
                         <tr>
                            <td>23.</td>
                            <td style="text-align: left;">Đi du lịch (theo chương trình của công đoàn)</td>
                            <td>DL</td>
                        </tr>
                         <tr>
                            <td>24.</td>
                            <td style="text-align: left;">Đi du lịch (tự túc)</td>
                            <td>DT</td>
                        </tr>
                         <tr>
                            <td>25.</td>
                            <td style="text-align: left;">Tổ chức thi tuyển sinh/tốt nghiệp/hết môn</td>
                            <td>TC</td>
                        </tr>
                         <tr>
                            <td>26.</td>
                            <td style="text-align: left;">Đi việc công, thi giáo viên dạy giỏi, công tác khác (ngoài tổ chức thi tuyển sinh ...)</td>
                            <td>c</td>
                        </tr>
                         <tr>
                            <td>27.</td>
                            <td style="text-align: left;">Họp</td>
                            <td>H</td>
                        </tr>
                         <tr>
                            <td colspan="3" style="text-align: left;">
                            <p style="font-weight: bold;text-decoration: underline;">*Cách chấm công:</p>
                                <span>
                                    + Làm việc buổi nào đánh dấu + buổi đó <br>
                                    + Trường hợp viên chức bị bệnh/con ốm khống có chỉ định của bác sĩ và các lý do việc riêng khác quy ước thành nghỉ phép năm<br>
                                    + Giảng dạy: ghi thêm số tiết sau chữ ký hiệu - vd: S3 (sáng dạy 03 tiết)<br>
                                    + Nghỉ phép trong giờ giảng dạy: ghi thêm số tiết sau chữ ký hiệu - vd: P3 (nghỉ phép trong giờ giảng dạy 03 tiết)<br>
                                    + Nội dung chấm công:<br>
                                    &nbsp;&nbsp; - Có thể ghi phần giải thích cho các nội dung chấm công vào bảng chấm công<br>
                                    &nbsp;&nbsp; - Có thể ghi phần giải thích cho các nội dung chấm công vào cột Ghi chú trong bảng chấm công nếu không đủ khoảng trống<br>
                                    + Tuyển sinh (áp dụng cho cả giảng viên và viên chức làm việc giờ hành chính):<br>
                                    &nbsp;&nbsp; - Cán bộ boi thi tuyển sinh (co thông báo nghỉ toàn trường): chấm công với ký hiệu là TS (nghỉ tuyển sinh)<br>
                                    &nbsp;&nbsp; - Cán bộ coi thi tuyển sinh hoặc thi tốt nghiệp trong giờ hành chính (không có thông báo nghỉ toàn trường): chấm công Ct (coi thi) và ghi chú thêm phần giải thích coi thi. Ví dụ: coi thi tốt nghiệp cao đẳng 2009<br>
                                    &nbsp;&nbsp; - Trường hợp được nghỉ toàn trường hoặc phòng làm việc được lấy làm phòng ra đề hoặc phòng làm việc thuộc khu vực tuyển sinh/tốt nghiệp: chấm công với ký hiệu TS (nghỉ tuyển sinh) và ghi chú thêm phần giải thích. Ví dụ: Phòng làm việc thuộc khu vự thi
                                </span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>   
                   
             </div>
             
                </div>

            </div>
            </div>
            </div>
    <!-- FOOTER SECTION END-->
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
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
