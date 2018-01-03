<?php 
    session_start();
    if(isset($_SESSION['emaill']))
    {
        if($_SESSION['emaill']!='laudaikinhdi@gmail.com')
        {
            echo '<script type="text/javascript">';
            echo 'alert("Bạn không có quyền truy cập vào trang này");';
            echo 'window.location= "index.php";';
            echo '</script>';
        }
    }
    else {
            echo '<script type="text/javascript">';
            echo 'alert("Bạn không có quyền truy cập vào trang này");';
            echo 'window.location= "index.php";';
            echo '</script>';
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
    <title>Chấm Công TVU</title>
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
        <div class="col-sm-3 col-md-3 ">
            <img src="./assets/img/logo-tron.png" class="logo">           
        </div>
        <div class="col-sm-7 col-md-7 bmtt">
                <span style="color: #003399;" >TRƯỜNG ĐẠI HỌC TRÀ VINH </span> <br> <span> BỘ MÔN CÔNG NGHỆ THÔNG TIN</span>         
        </div>
        <div class="col-sm-2 col-md-2">
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
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="menu-top-active" href="quantri.php">Quản Trị</a></li>
                            <li><a href="bangchamcong.php">Bảng Chấm Công</a></li>
                            <li><a href="index.php">Hướng Dẫn Chấm Công</a></li>
                            <li><a href="thongke.php">Thống Kê</a></li>
                            <li><a href="http://localhost/web/login_with_google_using_php/"><?php if(!isset($_SESSION['name'])) echo 'Đăng nhập với Google' ?></a></li>
                            <!--  <li><a href="login.html">Login Page</a></li>
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
                <div class="col-md-12">
                    <h4 class="page-head-line" style="font-family: Tangerine;">xuất excel</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12" style="text-align: center;">
                       <a href="http://localhost/web/chamcong/docfile1.php"> <button  class="btn btn-primary">Xuất Excel</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line" style="font-family: Tangerine;">Gửi Gmail</h4>
                </div>
                </div>
            <div class="row">
            <div class="col-md-12 col-sm-12" style="text-align: center;">
                
                
                <form method="post" action="mail/index.php" enctype="multipart/form-data">
                
                    <input  type="file" name="attachment">
                     <br>
                    <input class="btn btn-primary" type="submit" name="btnGui" value="Gửi Gmail">
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
