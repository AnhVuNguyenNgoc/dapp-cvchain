<?php 
    session_start(); 
    if(!$_SESSION['username'])
    {
        header("Location: login.php");
    }
    else
    {
        $user = $_SESSION['username'];
        include 'connect_db.php';

        $sql = "SELECT * FROM user WHERE USER_NAME='".$user."'";
        
        $result = mysqli_query($con,$sql);

        foreach ($result as $row)
        {


?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>Cv Chain</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
            <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
            <meta content="Coderthemes" name="author" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />

            <!-- App favicon -->
            <link rel="shortcut icon" href="assets/images/favicon.ico">

            <!-- App css -->
            <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/MyStyle.css" rel="stylesheet" type="text/css" />

            <!-- App javascript -->
            <script src="assets/js/modernizr.min.js"></script>

        </head>


        <body>

            <!-- Begin page -->
            <div id="wrapper">

                <!-- làm đỡ như vậy tg tác client để mai mốt chuyển MVC ln  -->

                <input type="hidden" id="accountaddress" value="<?php echo $row['ACCOUNT_ADDRESS'] ?>" />
                <input type="hidden" id="accountkey" value="<?php echo $row['PRIVATE_KEY'] ?>" />
                 <input type="hidden" id="iduser" value="<?php echo $_SESSION['username'] ?>" />
                <!-- Top Bar Start -->
                <div class="topbar">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="index.html" class="logo">
                             <span>
                                  <img src="assets/images/logo.png" alt="" height="55">
                             </span>
                            <i>
                                <img src="assets/images/logo_sm.png" alt="" height="28">
                            </i>
                        </a>
                    </div>

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="dropdown notification-list hide-phone">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                   <i class="fa fa-credit-card" aria-hidden="true"></i> Nhận Ether  <i class="mdi mdi-chevron-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <!-- item-->
                                    <a target="_blank" rel="noopener noreferrer" href="https://buyselleth.com" class="dropdown-item">
                                        Mua Ether
                                    </a>
                                    <!-- item-->
                                    <?php echo '<a href="https://faucet.ropsten.be/donate/'.$row['ACCOUNT_ADDRESS'].'" class="dropdown-item">
                                        Lấy Ether
                                    </a>';
                                    ?>
                                </div>
                            </li>

                            <li class="notification-list hide-phone">
                                <a class="nav-link waves-effect waves-light nav-user" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false" >
                                    <i class='fa fa-money'></i> <span id='amountether' ></span>
                                </a>                                
                            </li>
                                
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1"><?php echo $_SESSION['username'] ?><i class="mdi mdi-chevron-down"></i> </span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>My Account</span>
                                    </a>
                            
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left waves-light waves-effect">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li class="hide-phone app-search">
                                <form role="search" class="">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->


                <!-- ========== Left Sidebar Start ========== -->
                <div class="left side-menu">
                    <div class="slimscroll-menu" id="remove-scroll">

                        <!--- Sidemenu -->
                        <div id="sidebar-menu">
                            <!-- Left Menu Start -->
                            <ul class="metismenu" id="side-menu">
                                <li class="menu-title">Chức năng</li>
                                <li>
                                    <a href="index.php?lk=index">
                                        <i class="fi-air-play"></i><span> Trang chủ </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php?lk=certificate">
                                        <i class="fa fa-certificate"></i><span> Bằng cấp </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php?lk=majors">
                                        <i class="fa fa-object-group"></i><span> Chuyên ngành </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php?lk=school">
                                        <i class="fa fa-bank"></i><span> Hình thức đào tạo </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php?lk=setting">
                                        <i class="fa fa-cog"></i><span>Hệ đào tạo </span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <!-- Sidebar -->
                        <div class="clearfix"></div>

                    </div>
                    <!-- Sidebar -left -->

                </div>
                <!-- Left Sidebar End -->



                <!-- ============================================================== -->
                <!--                    Start right Content here                    -->
                <!-- ============================================================== -->
                <div class="content-page">
                    <!-- Content -->

                    <?php
                       $opt = isset($_GET['lk']) ? $_GET['lk'] : '';
                       switch ($opt) {
                           case 'certificate':
                               include('certificate.php');
                               break;
                           case 'majors':
                                include('majors.php');
                                break;
                            case 'setting':
                                include('setting.php');
                                break;
                            case 'faucet':
                                include('faucet.php');
                                break;         
                       }
                    ?>
                    <!-- End Content-->
                    <footer class="footer text-right">
                        2018 SGU-CvChain
                    </footer>

                </div>

                <!-- ============================================================== -->
                <!-- End Right content here -->
                <!-- ============================================================== -->


            </div>
            <!-- END wrapper -->



            <!-- jQuery  -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/popper.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/metisMenu.min.js"></script>
            <script src="assets/js/waves.js"></script>
            <script src="assets/js/jquery.slimscroll.js"></script>

            <!-- App js -->
            <script src="assets/js/jquery.core.js"></script>
            <script src="assets/js/jquery.app.js"></script>

             <!-- Blockchain js -->
            <script src='./assets/js/qrcode.min.js'> </script>
            <script type="text/javascript">
                var qrcode = new QRCode(document.getElementById("qrcode"), {
                text: "https://www.google.com.vn/",
                width: 128,
                height: 128,
                colorDark : "#000000",
                colorLight : "#ffffff",
                correctLevel : QRCode.CorrectLevel.H
            });
            </script>

            <script src='web3.js-1.0/dist/web3.min.js'> </script>
            <script src="https://github.com/ethereumjs/browser-builds/raw/2fb69a714afe092b06645286f14b94f41e5c062c/dist/ethereumjs-tx.js"></script>
            <script src="https://cdn.rawgit.com/ethereumjs/browser-builds/2fb69a714afe092b06645286f14b94f41e5c062c/dist/ethereumjs-tx.js"></script>            
            <!-- End blockchain js -->
            <!-- My JS -->
            <script>            
                
             </script>

             
             <script src="assets/js/appGUI.js"></script>
            

        </body>
    </html>

<?php
        }
    }
?>