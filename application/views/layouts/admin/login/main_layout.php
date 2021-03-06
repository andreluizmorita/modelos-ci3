<!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Material Admin</title>
        
        <!-- Vendor CSS -->
        <link href="../assets/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="../assets/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
            
        <!-- CSS -->
        <link href="../assets/css/app.css" rel="stylesheet">
    </head>
    
    <body class="login-content">
        
        <!-- Login -->
        <div class="lc-block toggled" id="l-login">
            <?=form_open('admin/login/autenticar')?>
                <div class="input-group m-b-20">
                    <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                    <div class="fg-line">
                        <input type="text" name="email" class="form-control" placeholder="E-mail">
                    </div>
                </div>
                
                <div class="input-group m-b-20">
                    <span class="input-group-addon"><i class="zmdi zmdi-key"></i></span>
                    <div class="fg-line">
                        <input type="password" name="senha" class="form-control" placeholder="Senha">
                    </div>
                </div>
                
                <div class="clearfix"></div>
                
                <button type="submit" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></button>
                
                <ul class="login-navigation">
                    <li data-block="#l-forget-password" class="bgm-orange">Esqueceu a senha?</li>
                </ul>
            <?=form_close()?>
        </div>
        
        <div class="lc-block" id="l-forget-password">
            <p class="text-left">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.
            </p>
            
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                <div class="fg-line">
                    <input type="text" class="form-control" placeholder="Email Address">
                </div>
            </div>
            
            <a href="" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></a>
            
            <ul class="login-navigation">
                <li data-block="#l-login" class="bgm-green">Login</li>
            </ul>
        </div>
        
        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>   
        <![endif]-->
        
        <!-- Javascript Libraries -->
        <script src="../assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="../assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <script src="../assets/vendors/bower_components/Waves/dist/waves.min.js"></script>
        
        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="../assets/vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->
        
        <script src="../assets/js/functions.js"></script>
        
    </body>
</html>