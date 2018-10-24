<?php include('connect_db.php') ?>
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

<script type="text/javascript">
window.onload =function(){
    if(typeof web3 !== 'undefined')
        web3 = new Web3(web3.currentProvider);
    else 
        web3 = new Web3(new Web3.providers.HttpProvider('https://ropsten.infura.io/v3/c95b09c01bd54f768eb2326d14bb8924'));


    var account_new = web3.eth.accounts.create("CV_CHAIN");
    $("#account_address").val(account_new.address);
    $("#privateKey").val(account_new.privateKey);
}
   
</script>

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
                                        <h6 class="text-uppercase text-center font-bold mt-4">Đăng ký</h6>
                                    </div>
                                    <div class="account-content">
                                        <form method="post" class="form-horizontal" action="register_process.php">

                                            <div id="text_username" class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="username">Tên đăng nhập (Tối đa 8 kí tự !)</label>
                                                    <input class="form-control" type="text" name="username" id="username" required="" placeholder="abcdef" value="DaiHocSaiGon">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="password">Mật khẩu</label>
                                                    <input class="form-control" type="password" name="password" required="" id="password" placeholder="********** " value="thanh9556873">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="password_confirm">Nhập lại mật khẩu <span id="error_password_confirm"></span></label>
                                                    <input class="form-control" type="password" name="password_comfirm" required="" id="password_confirm" placeholder="**********" value="thanh9556873">
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="Email">Email trường</label>
                                                    <input class="form-control" type="Email" name="email" required="" id="email" placeholder="123@gmail.com" value="thanhthao97.qng@gmail.com">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="name_school">Tên trường</label>
                                                    <select class="form-control" name="name_school" id="name_school">
                                                      <option>Đại học Sài Gòn</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="id_school">Mã trường</label>
                                                    <input class="form-control" type="text" name="id_school" id="id_school" required="" placeholder="200000" value="SGD">
                                                </div>
                                            </div>

                                            <div hidden="" class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="account_address">Account address</label>
                                                    <input class="form-control" type="text" name="account_address" id="account_address" required="" placeholder="" value="">
                                                </div>
                                            </div>

                                            <div hidden="" class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="privateKey">Private Key</label>
                                                    <input class="form-control" type="text" name="privateKey" id="privateKey" required="" placeholder="" value="">
                                                </div>
                                            </div>
                                      
                                            <div class="row m-b-50">
                                                <div class="col-12" style="margin-left:5%;">
                                                  <label class="form-check-label"  >
                                                    <input type="checkbox" class="form-check-input" id="check_term">Tôi đồng ý các 
                                                  </label><a href="#"> điều khoản.</a>
                                                </div>
                                            </div>

                                            <div class="form-group row text-center m-t-50">
                                                <div class="col-12">
                                                    <button class="btn btn-block btn-gradient waves-effect waves-light" type="submit" name="sumbit" id="submit_register">Đăng ký</button>
                                                </div>
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
        <script src='appGUI.js'> </script>

        <!-- My JS -->
        <script src="assets/js/myJS.js"></script>

    </body>
</html>