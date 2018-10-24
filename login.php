<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>CvChain</title>
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

        <!-- My css -->
        <link href="assets/css/MyStyle.css" rel="stylesheet" type="text/css" />     

    </head>


    <body style="background: url(assets/images/background.jpg);background-repeat: no-repeat; background-size: cover;">

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="account-pages">
                                <div class="account-box">
                                    <div class="account-logo-box">
                                        <h2 class="text-uppercase text-center">
                                            <a href="index.html" class="text-success">
                                                <span><img src="assets/images/logo_dark.png" alt="" height="55"></span>
                                            </a>
                                        </h2>
                                        <h6 class="text-uppercase text-center font-bold mt-4">Đăng Nhập</h6>
                                    </div>
                                    <div class="account-content">
                                        <form method="post" class="form-horizontal" action="login_process.php">

                                            <div id="text_username" class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="username_login">Tên đăng nhập</label>
                                                    <input class="form-control" type="text" name="username_login" id="username_login" required="" placeholder="" value="">
                                                </div>
                                            </div>

                                            <div  class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="password_login">Mật khẩu</label>
                                                    <input class="form-control" type="password" name="password_login" required="" id="password_login" placeholder " value="">
                                                </div>
                                            </div>

                                            <div class="row m-b-20">
                                                <div class="col-12" style="margin-left:5%;">
                                                  <label class="form-check-label"  >
                                                    <input type="checkbox" class="form-check-input" id="check_remember">Ghi nhớ mật khẩu.
                                                  </label>
                                                </div>
                                            </div>                                                                                    
                                            <div class="form-group row text-center m-t-50">
                                                <div class="col-12">
                                                    <button class="btn btn-block btn-gradient waves-effect waves-light" type="submit" name="submit_login" id="submit_login">Đăng nhập</button>
                                                </div>
                                            </div>

                                            <div  class="form-group row m-b-20">
                                                <div class="col-12"><a href="#">Bạn quên mật khẩu ?</a></div>
                                            </div>    
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-box-->


                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->

        <!-- jQuery js  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script src="assets/js/modernizr.min.js"></script>

        <!-- blockchain library js -->
        <script src='web3.js-1.0/dist/web3.min.js'> </script>
        <script src="https://github.com/ethereumjs/browser-builds/raw/2fb69a714afe092b06645286f14b94f41e5c062c/dist/ethereumjs-tx.js"></script>
        <script src="https://cdn.rawgit.com/ethereumjs/browser-builds/2fb69a714afe092b06645286f14b94f41e5c062c/dist/ethereumjs-tx.js"></script>
        
        <!-- My JS -->
        <script src="assets/js/myJS.js"></script>
    </body>
</html>