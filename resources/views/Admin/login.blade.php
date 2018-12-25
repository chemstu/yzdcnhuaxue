<!DOCTYPE html>
<head>

    <meta charset="utf-8" />

    <title>Metronic | Login Page</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <meta content="" name="description" />

    <meta content="" name="author" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('admin/css/bootstrap-responsive.min.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('admin/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('admin/css/style-metro.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('admin/css/default.css')}}" rel="stylesheet" type="text/css" id="style_color"/>

    <link href="{{asset('admin/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>

    <!-- END GLOBAL MANDATORY STYLES -->


    <!-- BEGIN PAGE LEVEL STYLES -->

    <link href="{{asset('admin/css/login.css')}}" rel="stylesheet" type="text/css"/>

    <!-- END PAGE LEVEL STYLES -->

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="login">

<!-- BEGIN LOGO -->

<div class="logo">

    <img src="media/image/logo-big.png" alt="" />

</div>

<!-- END LOGO -->

<!-- BEGIN LOGIN -->

<div class="content">

    <!-- BEGIN LOGIN FORM -->

    <form class="form-vertical login-form" action="index.html">

        <h3 class="form-title">网站管理系统</h3>

        <div class="alert alert-error hide">

            <button class="close" data-dismiss="alert"></button>

            <span>Enter any username and password.</span>

        </div>

        <div class="control-group">

            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->

            <label class="control-label visible-ie8 visible-ie9">用户名</label>

            <div class="controls">

                <div class="input-icon left">

                    <i class="icon-user"></i>

                    <input class="m-wrap placeholder-no-fix" type="text" placeholder="用户名" name="username"/>

                </div>

            </div>

        </div>

        <div class="control-group">

            <label class="control-label visible-ie8 visible-ie9">密码</label>

            <div class="controls">

                <div class="input-icon left">

                    <i class="icon-lock"></i>

                    <input class="m-wrap placeholder-no-fix" type="password" placeholder="密码" name="password"/>

                </div>

            </div>

        </div>

        <div class="control-group">

            <label class="control-label visible-ie8 visible-ie9">验证码</label>

            <div class="controls">

                <div class="input-icon left">

                    <i class="icon-lock"></i>

                    <input class="m-wrap placeholder-no-fix" type="text" placeholder="验证码" name="captcha"/>

                    <img class="thumbnail captcha" src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">

                </div>

            </div>

        </div>



        <div class="form-actions">

            <label class="checkbox">

                <input type="checkbox" name="remember" value="1"/> 记住我

            </label>

            <button type="submit" class="btn green pull-right">

                登录系统 <i class="m-icon-swapright m-icon-white"></i>

            </button>

        </div>

    </form>

    <!-- END LOGIN FORM -->

    <!-- BEGIN FORGOT PASSWORD FORM -->

    <form class="form-vertical forget-form" action="index.html">

        <h3 class="">Forget Password ?</h3>

        <p>Enter your e-mail address below to reset your password.</p>

        <div class="control-group">

            <div class="controls">

                <div class="input-icon left">

                    <i class="icon-envelope"></i>

                    <input class="m-wrap placeholder-no-fix" type="text" placeholder="Email" name="email" />

                </div>

            </div>

        </div>

        <div class="form-actions">

            <button type="button" id="back-btn" class="btn">

                <i class="m-icon-swapleft"></i> Back

            </button>

            <button type="submit" class="btn green pull-right">

                Submit <i class="m-icon-swapright m-icon-white"></i>

            </button>

        </div>

    </form>

    <!-- END FORGOT PASSWORD FORM -->

    <!-- BEGIN REGISTRATION FORM -->

    <form class="form-vertical register-form" action="index.html">

        <h3 class="">Sign Up</h3>

        <p>Enter your account details below:</p>

        <div class="control-group">

            <label class="control-label visible-ie8 visible-ie9">Username</label>

            <div class="controls">

                <div class="input-icon left">

                    <i class="icon-user"></i>

                    <input class="m-wrap placeholder-no-fix" type="text" placeholder="Username" name="username"/>

                </div>

            </div>

        </div>

        <div class="control-group">

            <label class="control-label visible-ie8 visible-ie9">Password</label>

            <div class="controls">

                <div class="input-icon left">

                    <i class="icon-lock"></i>

                    <input class="m-wrap placeholder-no-fix" type="password" id="register_password" placeholder="Password" name="password"/>

                </div>

            </div>

        </div>

        <div class="control-group">

            <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>

            <div class="controls">

                <div class="input-icon left">

                    <i class="icon-ok"></i>

                    <input class="m-wrap placeholder-no-fix" type="password" placeholder="Re-type Your Password" name="rpassword"/>

                </div>

            </div>

        </div>

        <div class="control-group">

            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->

            <label class="control-label visible-ie8 visible-ie9">Email</label>

            <div class="controls">

                <div class="input-icon left">

                    <i class="icon-envelope"></i>

                    <input class="m-wrap placeholder-no-fix" type="text" placeholder="Email" name="email"/>

                </div>

            </div>



        </div>

        <div class="control-group">

            <div class="controls">

                <label class="checkbox">

                    <input type="checkbox" name="tnc"/> I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>

                </label>

                <div id="register_tnc_error"></div>

            </div>

        </div>

        <div class="form-actions">

            <button id="register-back-btn" type="button" class="btn">

                <i class="m-icon-swapleft"></i>  Back

            </button>

            <button type="submit" id="register-submit-btn" class="btn green pull-right">

                Sign Up <i class="m-icon-swapright m-icon-white"></i>

            </button>

        </div>

    </form>

    <!-- END REGISTRATION FORM -->

</div>

<!-- END LOGIN -->

<!-- BEGIN COPYRIGHT -->

<div class="copyright">

    2013 &copy; Metronic. Admin Dashboard Template.


</div>

<!-- END COPYRIGHT -->

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<!-- BEGIN CORE PLUGINS -->

<script src="{{asset('admin/js/jquery-1.10.1.min.js')}}" type="text/javascript"></script>

<script src="{{asset('admin/js/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>

<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js')}} before bootstrap.min.js')}} to fix bootstrap tooltip conflict with jquery ui tooltip -->

<script src="{{asset('admin/js/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>

<script src="{{asset('admin/js/bootstrap.min.js')}}" type="text/javascript"></script>


<script src="{{asset('admin/js/jquery.slimscroll.min.js')}}" type="text/javascript"></script>

<script src="{{asset('admin/js/jquery.blockui.min.js')}}" type="text/javascript"></script>

<script src="{{asset('admin/js/jquery.cookie.min.js')}}" type="text/javascript"></script>

<script src="{{asset('admin/js/jquery.uniform.min.js')}}" type="text/javascript" ></script>

<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->

<script src="{{asset('admin/js/jquery.validate.min.js')}}" type="text/javascript"></script>

<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->

<script src="{{asset('admin/js/app.js')}}" type="text/javascript"></script>

<script src="{{asset('admin/js/login.js')}}" type="text/javascript"></script>

<!-- END PAGE LEVEL SCRIPTS -->

<script>

    jQuery(document).ready(function() {

        App.init();

        Login.init();

    });

</script>

<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->

</html>