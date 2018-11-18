<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

   
    <!-- bootstrap & fontawesome -->
    <?= link_tag('assetss/css/bootstrap.min.css')?>
 <?= link_tag('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');?>
    <!-- text fonts -->
  <?= link_tag('assetss/css/fonts.googleapis.com.css')?>
    <!-- ace styles -->
    
<?= link_tag('assetss/css/ace.min.css')?>
    <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ace-part2.min.css" />
    <![endif]-->
    
<?= link_tag('assetss/css/ace-rtl.min.css')?>
    <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="login-layout light-login">
    <div class="main-container">
      <div class="main-content">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="login-container">
              <div class="center">
                <h1>
                  <i class="ace-icon fa fa-envelope green bigger-150"></i>
                  <span class="white">Bulk</span>
                  <span class="green" id="id-text2" style="font-size: 20px">mailing</span>
                </h1>
                <h4 class="blue" id="id-company-text">&copy; StartupsMail</h4>
              </div>

              <div class="space-6"></div>

              <div class="position-relative">
                <div id="login-box" class="login-box visible widget-box no-border">
                  <div class="widget-body">
                    <div class="widget-main">
                      <h4 class="header blue lighter bigger">
                        <i class="ace-icon fa fa-coffee green"></i>
                        Please Enter Your Information
                      </h4>

                      <div class="space-6"></div>
                      <div id="result">
                        <img src="<?= base_url('assets/images/avatars/valid.gif')?>" class="msg-photo" alt="success" style="width:30px;height: 30px; display: none;" />
                      </div>
                    <form id="login_form" >
                         <fieldset>
                            
                          <label class="block clearfix">
                            <div id="error_username" class="form-group  has-feedback">
                            <span class="block input-icon input-icon-right">
                              <input type="text" id="username" class="form-control" placeholder="Username" />
                              <i class="ace-icon fa fa-user"></i>
                            </span>
                          </label>
                        </div>
                        <div id="error_password" class="form-group  has-feedback">
                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="password" id="password" class="form-control" placeholder="Password" />
                              <i class="ace-icon fa fa-lock"></i>
                            </span>
                          </label>
                        </div>
                          <div class="space"></div>

                          <div class="clearfix">
                            <label class="inline">
                              <input type="checkbox" class="ace" />
                              <span class="lbl"> Remember Me</span>
                            </label>

                            <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                              <i class="ace-icon fa fa-key"></i>
                              <span class="bigger-110">Login</span>
                            </button>
                          </div>

                          <div class="space-4"></div>
                        </fieldset>
                      </form>

                      <div class="social-or-login center">
                        <span class="bigger-110">Or Login Using</span>
                      </div>

                      <div class="space-6"></div>

                      <div class="social-login center">
                        <a class="btn btn-primary">
                          <i class="ace-icon fa fa-facebook"></i>
                        </a>

                        <a class="btn btn-info">
                          <i class="ace-icon fa fa-twitter"></i>
                        </a>

                        <a class="btn btn-danger">
                          <i class="ace-icon fa fa-google-plus"></i>
                        </a>
                      </div>
                    </div><!-- /.widget-main -->

                    <div class="toolbar clearfix">
                      <div>
                        <a href="#" data-target="#forgot-box" class="forgot-password-link">
                          <i class="ace-icon fa fa-arrow-left"></i>
                          I forgot my password
                        </a>
                      </div>

                      <div>
                        <a href="#" data-target="#signup-box" class="user-signup-link">
                          I want to register
                          <i class="ace-icon fa fa-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div><!-- /.widget-body -->
                </div><!-- /.login-box -->

                <div id="forgot-box" class="forgot-box widget-box no-border">
                  <div class="widget-body">
                    <div class="widget-main">
                      <h4 class="header red lighter bigger">
                        <i class="ace-icon fa fa-key"></i>
                        Retrieve Password
                      </h4>

                      <div class="space-6"></div>
                      <p>
                        Enter your email and to receive instructions
                      </p>

                      <form>
                        <fieldset>
                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="email" class="form-control" placeholder="Email" />
                              <i class="ace-icon fa fa-envelope"></i>
                            </span>
                          </label>

                          <div class="clearfix">
                            <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                              <i class="ace-icon fa fa-lightbulb-o"></i>
                              <span class="bigger-110">Send Me!</span>
                            </button>
                          </div>
                        </fieldset>
                      </form>
                    </div><!-- /.widget-main -->

                    <div class="toolbar center">
                      <a href="#" data-target="#login-box" class="back-to-login-link">
                        Back to login
                        <i class="ace-icon fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div><!-- /.widget-body -->
                </div><!-- /.forgot-box -->

                <div id="signup-box" class="signup-box widget-box no-border">
                  <div class="widget-body">
                    <div class="widget-main">
                      <h4 class="header green lighter bigger">
                        <i class="ace-icon fa fa-users blue"></i>
                        New User Registration
                      </h4>

                      <div class="space-6"></div>
                      <p> Enter your details to begin: </p>

                      <form>
                        <fieldset>
                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="email" class="form-control" placeholder="Email" />
                              <i class="ace-icon fa fa-envelope"></i>
                            </span>
                          </label>

                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="text" class="form-control" placeholder="Username" />
                              <i class="ace-icon fa fa-user"></i>
                            </span>
                          </label>

                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="password" class="form-control" placeholder="Password" />
                              <i class="ace-icon fa fa-lock"></i>
                            </span>
                          </label>

                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="password" class="form-control" placeholder="Repeat password" />
                              <i class="ace-icon fa fa-retweet"></i>
                            </span>
                          </label>

                          <label class="block">
                            <input type="checkbox" class="ace" />
                            <span class="lbl">
                              I accept the
                              <a href="#">User Agreement</a>
                            </span>
                          </label>

                          <div class="space-24"></div>

                          <div class="clearfix">
                            <button type="reset" class="width-30 pull-left btn btn-sm">
                              <i class="ace-icon fa fa-refresh"></i>
                              <span class="bigger-110">Reset</span>
                            </button>

                            <button type="button" class="width-65 pull-right btn btn-sm btn-success">
                              <span class="bigger-110">Register</span>

                              <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                            </button>
                          </div>
                        </fieldset>
                      </form>
                    </div>

                    <div class="toolbar center">
                      <a href="#" data-target="#login-box" class="back-to-login-link">
                        <i class="ace-icon fa fa-arrow-left"></i>
                        Back to login
                      </a>
                    </div>
                  </div><!-- /.widget-body -->
                </div><!-- /.signup-box -->
              </div><!-- /.position-relative -->

            <!--  <div class="navbar-fixed-top align-right">
                <br />
                &nbsp;
                <a id="btn-login-dark" href="#">Dark</a>
                &nbsp;
                <span class="blue">/</span>
                &nbsp;
                <a id="btn-login-blur" href="#">Blur</a>
                &nbsp;
                <span class="blue">/</span>
                &nbsp;
                <a id="btn-login-light" href="#">Light</a>
                &nbsp; &nbsp; &nbsp;
              </div>-->
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.main-content -->
    </div><!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="<?= base_url('assetss/js/jquery-2.1.4.min.js')?>"></script>

    <!-- <![endif]-->
    <!-- <![endif]-->
<script type="text/javascript">
  $(document).ready(function(e){
  $('#login_form').submit(function(event){
          event.preventDefault();
          var username = $('#username').val();
          var password = $('#password').val();

        if(username==''|| password=='')  
        {
        $('#error_username').addClass('has-error');
        $('#error_password').addClass('has-error');
        }
        else  
        { 
        $('#error_username').removeClass('has-error');
        $('#error_password').removeClass('has-error');
        $('#error_username').addClass('has-success');
        $('#error_password').addClass('has-success');
           $.ajax({
                  url:'<?= base_url('Login/user_login')?>',
                  method:'post',
                  data:{postname:username,postpass:password},
                  success:function(data){
                    
                    if(data == '23940jjfio32p30943u249932i4032409'){
                      $('#result').html('<div class="alert alert-success" style="padding-top:2px;padding-bottom:3px;margin-bottom:8px;">You are logged,   loading...</div>');
                      setTimeout(' window.location.href = "<?= base_url("users/dashboard")?>"; ',3000);
                    }
                    else
                    {
                      $('#result').html('<div class="alert alert-danger" style="padding-top:2px;padding-bottom:3px;margin-bottom:8px;">Email or Password wrong</div>');
                      $('#error_username').removeClass('has-success');
                      $('#error_password').removeClass('has-success');
                      $('#error_username').addClass('has-error');
                      $('#error_password').addClass('has-error');
                                  // $("#result").fadeOut(3000);
        
                    }
                  }          
        });
        }
  

});

});
</script>
    
    <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
    <script type="text/javascript">
      if('ontouchstart' in document.documentElement) document.write("<script src='<?= base_url('assets/js/jquery.mobile.custom.min.js')?>'>"+"<"+"/script>");
    </script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
      jQuery(function($) {
       $(document).on('click', '.toolbar a[data-target]', function(e) {
        e.preventDefault();
        var target = $(this).data('target');
        $('.widget-box.visible').removeClass('visible');//hide others
        $(target).addClass('visible');//show target
       });
      });
      
      
      
      //you don't need this, just used for changing background
      jQuery(function($) {
       $('#btn-login-dark').on('click', function(e) {
        $('body').attr('class', 'login-layout');
        $('#id-text2').attr('class', 'white');
        $('#id-company-text').attr('class', 'blue');
        
        e.preventDefault();
       });
       $('#btn-login-light').on('click', function(e) {
        $('body').attr('class', 'login-layout light-login');
        $('#id-text2').attr('class', 'grey');
        $('#id-company-text').attr('class', 'blue');
        
        e.preventDefault();
       });
       $('#btn-login-blur').on('click', function(e) {
        $('body').attr('class', 'login-layout blur-login');
        $('#id-text2').attr('class', 'white');
        $('#id-company-text').attr('class', 'light-blue');
        
        e.preventDefault();
       });
       
      });
    </script>
  </body>
</html>
