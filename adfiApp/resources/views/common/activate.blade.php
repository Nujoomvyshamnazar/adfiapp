<!DOCTYPE html>
<html>

<head>
    <title>Login | ADFI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- end of global level css -->
    <link href="{{asset('assets/vendors/iCheck/css/square/blue.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" rel="stylesheet" />
    <!-- page level css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/pages/login.css')}}" />
    <!-- end of page level css -->
</head>

<body>
    <div class="container">
        <div class="row vertical-offset-100">
            <div class="col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <div id="container_demo">
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <a class="hiddenanchor" id="toforgot"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form action="index.html" id="authentication" autocomplete="on" method="post">
                                <h3 class="black_bg" style="font-size:14px;">
                                    <img src="{{asset('assets/img/logo3.png')}}" alt="ADFI">
                              <br>  Activate Account  </h3>
                                <div class="form-group ">
                                    <label style="margin-bottom:0;" for="email1" class="uname control-label">  Enter Secret Key
                                    </label>
                                    <input id="secret" name="secret" placeholder="Enter Secret Key" value="" />
                                    <div class="col-sm-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label style="margin-bottom:0;" for="password" class="youpasswd">
                                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> Password
                                    </label>
                                    <input id="password1" name="password" required type="password" placeholder="Password" />
                                </div>
                                <div class="form-group">
                                    <label style="margin-bottom:0;" for="password_confirm" class="youpasswd">
                                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> Confirm Password
                                    </label>
                                    <input id="password_confirm" name="password_confirm" required type="password" placeholder="Confirm password" />
                                </div>

                                <p class="login button">
                                    <input type="submit" value="Activate" class="btn btn-success" />
                                </p>
                                <p class="change_link">

                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="{{asset('assets/js/app.js')}}" type="text/javascript"></script>
    <!-- end of global js -->
    <script src="{{asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/iCheck/js/icheck.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/pages/login.js')}}" type="text/javascript"></script>
</body>

</html>
