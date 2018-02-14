<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Google Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


        <link href="style.css" rel="stylesheet" type="text/css" media="all" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script src="https://apis.google.com/js/api:client.js"></script>
    </head>
    <body>
        <div class="header cake_header">
            <div class="container" style="width: 100%">
                <div class="header-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="navbar-brand">
                                    <h1><a href="">Google</a></h1>
                                </div>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse set_navbar_collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav nav_left">
                                    <li class="active"><a href="#" class="scroll">HOME</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right nav_right">
                                    <li><button class="set_login_button login-menu" onclick="document.getElementById('login_model').style.display = 'block'" style="width:auto;">LOGIN / REGISTER</button></li>
                                </ul>

                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                    <div class="clearfix"></div>
                </div>	
            </div> 
        </div>



        <div id="login_model" class="modal home_page_model">
            <form action="javascript:void(0)" class="modal-content animate" id="signin_form" name="signin_form" role="form">
                <input type="hidden" name="ci_csrf_token" value="">
                <input type="email" class="hidden"/>
                <input type="password" class="hidden"/>
                <div class="imgcontainer">
                    <h3 class="set_login_model_title">Login to Your Site<span onclick="document.getElementById('login_model').style.display = 'none'" class="close" title="Close Modal">&times;</span></h3>
                    <img class="img-responsive" alt="" src="model_line.png" style="width: 100%;height: 4px;">
                </div>
                <div class="container">
                    <div class="row set_social_div">
                        <div class="col-sm-12 col-xs-12">
                            <div class="col-sm-6 col-xs-12 set_social_div_content">
                                <a href="javascript:void(0);" id="customBtn">
                                    <img src="login_with_google.png" alt="" class="img-responsive">
                                </a>
                                <div class="g-signin2" data-onsuccess="onSignIn"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 set_or_div">
                            <h3>OR</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 signin_main_form">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                                <div class="login-error-message"></div>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="remember"> Remember me</label>
                            </div>
                            <button type="submit" class="login_model_botton">Login</button> <span class="open_forgot_model">Forgot password?</span>
                        </div>
                    </div>
                </div>
                <div class="container" style="background-color:#f1f1f1;">
                    <button type="button" onclick="document.getElementById('login_model').style.display = 'none'" class="cancelbtn" style="width: auto;padding: 10px 18px;background-color: #f44336;">Cancel</button>
                    <span class="psw">Don't have an account? <a href="javascript:void(0);"  onclick="document.getElementById('login_model').style.display = 'none'" class="open_registration_model">sign up</a></span>
                </div>
            </form>
        </div>






        <div id="registration-popup" class="modal home_page_model">
            <form action="javascript:void(0)" class="modal-content animate" id="signup_model_form" name="signup_model_form" role="form">
                <input type="hidden" name="ci_csrf_token" value="">
                <input type="email" class="hidden"/>
                <input type="password" class="hidden"/>
                <div class="imgcontainer">
                    <h3 class="set_login_model_title">Register to Your Site<span data-dismiss="modal" aria-label="Close" class="close" title="Close Modal">&times;</span></h3>
                    <img class="img-responsive" alt="" src="model_line.png" style="width: 100%;height: 4px;">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 signin_main_form">
                            <div class="form-group">
                                <label for="su_firstname">First name:</label>
                                <input type="text" class="form-control" id="su_firstname" placeholder="Enter first name" name="first_name" required>
                            </div>
                            <div class="form-group">
                                <label for="su_lastname">Last name:</label>
                                <input type="text" class="form-control" id="su_lastname" placeholder="Enter last name" name="last_name" required>
                            </div>
                            <div class="form-group">
                                <label for="su_email">Email:</label>
                                <input type="email" class="form-control" id="su_email" placeholder="Enter email" name="email">
                                <div class="register-error-message"></div>

                            </div>
                            <div class="form-group">
                                <label for="su_password">Password:</label>
                                <input type="password" class="form-control" id="su_password" placeholder="Enter password" name="password" required>
                            </div>
                            <input type="hidden" name="social_id" id="su_social_id"/>
                            <input type="hidden" name="user_type" id="su_user_type"/>
                            <button type="submit" class="login_model_botton register_model_botton">REGISTER</button>
                        </div>
                    </div>

                </div>
                <div class="container" style="background-color:#f1f1f1;">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="cancelbtn" style="width: auto;padding: 10px 18px;background-color: #f44336;">Cancel</button>
                </div>
            </form>
        </div>

        <div id="main_registration_popup" class="modal home_page_model">
            <form action="javascript:void(0)" id="main_registration_popup_form" name="main_registration_popup_form" role="form" class="modal-content animate">
                <input type="hidden" name="ci_csrf_token" value="">
                <input type="email" class="hidden"/>
                <input type="password" class="hidden"/>
                <div class="imgcontainer">
                    <h3 class="set_login_model_title">Register to Your Site<span onclick="document.getElementById('main_registration_popup').style.display = 'none'"  class="close" title="Close Modal">&times;</span></h3>
                    <img class="img-responsive" alt="" src="model_line.png" style="width: 100%;height: 4px;">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="wr_firstname">First name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control required" id="wr_firstname" placeholder="Enter first name" name="first_name">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="wr_lastname">Last name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control required" id="wr_lastname" placeholder="Enter last name" name="last_name">
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="wr_contact_number">Mobile <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="wr_contact_number" name="contact_number" placeholder="Enter mobile number">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="wr_email">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="wr_email" placeholder="Enter email" name="email">
                                <div class="register-error-message"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="wr_password">Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control required" id="wr_password" placeholder="Enter password" name="password">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="wr_cpassword">Confirm Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="wr_cpassword" name="cpassword" placeholder="Enter confiorm password">
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="wr_birth_date">Birth Date <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input name="birth_date" id="wr_birth_date" type="text" class="form-control required" placeholder="Select date" readonly="readonly"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="wr_gender">Gender <span class="text-danger">*</span></label>
                                <select class="selectpicker col-sm-12 col-xs-12" name="gender" id="wr_gender">
                                    <option value="" selected="selected">--- Select Gender ---</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="wr_user_city">City <span class="text-danger">*</span></label>
                                <input name="user_city" id="wr_user_city" type="text" class="form-control required" placeholder="Enter your city name">
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-12 register-response-message">
                    </div>
                    <button type="submit" class="login_model_botton register_model_botton">REGISTER</button>
                </div>
                <div class="container" style="background-color:#f1f1f1;">
                    <button type="button" onclick="document.getElementById('main_registration_popup').style.display = 'none'" class="cancelbtn" style="width: auto;padding: 10px 18px;background-color: #f44336;">Cancel</button>
                    <span class="psw">You have an account? <a href="javascript:void(0);"  onclick="document.getElementById('main_registration_popup').style.display = 'none'" class="open_login_model">Log in</a></span>
                </div>
            </form>
        </div>

        <script type="text/javascript">
            var home_url = "/home";
            var user_id = "";
            alert(" Before test demo create yout google client id with domain URL.");
            $(document).ready(function () {
                jQuery(document).on('click', '.open_registration_model', function () {
                    jQuery("#login_model").css('display', 'none');
                    jQuery("#main_registration_popup").css('display', 'block');
                });

                jQuery(document).on('click', '.open_login_model', function () {
                    jQuery("#login_model").css('display', 'block');
                    jQuery("#main_registration_popup").css('display', 'none');
                });

                jQuery(document).on('click', '.open_forgot_to_login_model', function () {
                    jQuery("#login_model").css('display', 'block');
                    jQuery("#forgot_password").css('display', 'none');
                });
            });
        </script>


        <script type="text/javascript">

            function attachSignin(element) {
                auth2.attachClickHandler(element, {},
                        function (googleUser) {
                            var social_id = googleUser.getBasicProfile().getId();
                            var full_name = googleUser.getBasicProfile().getName();
                            var email = googleUser.getBasicProfile().getEmail();
                            full_name = full_name.split(" ");

                            var first_name = '';
                            var last_name = '';
                            if (full_name[0].length > 0) {
                                first_name = full_name[0];
                            }
                            if (full_name[1].length > 0) {
                                last_name = full_name[1];
                            }

                            jQuery.ajax({
                                type: 'POST',
                                async: false,
                                url: home_url + "/login",
                                data: {"social_id": social_id, "user_type": 3},
                                dataType: 'json',
                                success: function (ajax_response) {
                                    if (ajax_response.success) {
                                        window.location.reload();
                                    } else {
                                        if (ajax_response.no_user) {
                                            jQuery("#login_model").css('display', 'none');
                                            jQuery("#signup_model_form #su_firstname").val(first_name);
                                            jQuery("#signup_model_form #su_lastname").val(last_name);
                                            jQuery("#signup_model_form #su_email").val(email);
                                            jQuery("#signup_model_form #su_password").val("");
                                            jQuery("#signup_model_form #su_user_type").val("3");
                                            jQuery("#signup_model_form #su_social_id").val(social_id);

                                            jQuery("#registration-popup").modal();
                                            setTimeout(function () {
                                                jQuery("body").addClass("modal-open");
                                            }, 2000);
                                        } else {
                                            alert(ajax_response.message);
                                        }
                                    }
                                },
                                error: function () {
                                    alert('Opps. something went wrong,Please try again later..!');
                                }
                            });

                        }, function (error) {
                    console.log(error);
                    alert('Opps. something went wrong,Please try again later....!');
                });
            }

        </script>
        <script type="text/javascript">
            var googleUser = {};
            var startApp = function () {
                gapi.load('auth2', function () {
                    // Retrieve the singleton for the GoogleAuth library and set up the client.
                    auth2 = gapi.auth2.init({
                        client_id: '', // set your google client id here // 64705429845-78b4j71ou02lbjrmnrb4sp0gis7r1dt558.apps.googleusercontent.com
                        cookiepolicy: 'single_host_origin',
                        // Request scopes in addition to 'profile' and 'email'
                        //scope: 'additional_scope'
                        scope: 'https://www.googleapis.com/auth/userinfo.email'
                    });

                    attachSignin(document.getElementById('customBtn'));

                    if (document.getElementById('checkout_customBtn')) {
                        attachSignin(document.getElementById('checkout_customBtn'));
                    }
                });
            };
        </script>
        <script>startApp();</script>
    </body>
</html>
