<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> <?php echo $title_page; ?></title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>asserts/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asserts/bower_components/font-awesome/css/font-awesome.min.css">
        <link href="<?php echo base_url(); ?>asserts/common/css_style.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>asserts/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?php echo base_url(); ?>asserts/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>



    <body onkeypress="press()" onload="document.FormName.txtName.focus();" style="background-image:url(asserts/common/img/background_4.jpg)">
        <!-- background-repeat: no-repeat; background-size:cover;"-->
    <section class="sec-all blue-color">
        <div class="logo">
            <h1 class="image pull-left"><img class="logo_login" src="<?php echo base_url(); ?>asserts/common/img/logo.png" width="49" height="62" /></h1>
            <div class="header pull-left">
                <h2>VNPT Gia Lai</h2>
                <p>Quản trị Web</p>
            </div>
        </div>
    </section>
    <!--  <span class="title_top pull-right"><a href="/download"><i class="icon-download "></i><span class="fa fa-chevron-down"></span></a></span> -->
    <div class="bgr page-wrap">

        <form method="POST" action="<?php echo base_url('Home/login'); ?>" name="FormName">
            <input type="hidden" name="srcwidth" value="1024">
            <!-- <div style="display:block; min-height: 400px"></div> -->
            <div class="box-signin">
                <div class="box-top ">  
                    Đăng nhập
                </div>                
                <div class="pd10">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <?php if (isset($error)) { ?><span style="color:#EA3838"><?php echo $error;
                            } ?></span>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <label class="mb10 user-name " for="login-username" style="margin-top:3px;margin-left:15px;">
                            Tên đăng nhập <span style="color:#EA3838">(*)<?php echo form_error('username'); ?></span>
                        </label>
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="username" value="">                                        
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom:0 !important;">
                        <label class="mb10 password " for="login-password" style="margin-top:6px;margin-left:15px;">	
                            Mật khẩu <span style="color:#EA3838">(*)<?php echo form_error('password'); ?></span>
                        </label>
                        <div class="col-md-12">
                            <div class="input-group" >
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="password" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <div class="clearfix">
                        <div class="pull-left" style="width:50%;">
                            <div class="ckbox ckbox-primary">
                                <input type="checkbox" id="rememberMe" value="1">
                                <label for="rememberMe" class="remember-me ">Remeber me</label>
                            </div>
                        </div>
                        <div class="pull-right"  style="width:50%; text-align: right; height:20%">
                            <button type="submit" class="btn btn-primary login " style="border-radius: 0px !important;" id="btn-login">
                                <span class="glyphicon glyphicon-ok" style="height:20px">Đăng nhập</span>
                            </button>			  					
                        </div>
                        <span class="pull-right"></span>
                    </div> 
                </div>
            </div>
        </form>

    </div>
    <div class="clear"></div>
    <footer class="sec-all footer2 site-footer">
        <div class="container"> 
            <div class="footer-left">    
                <p style="margin-top: 3px;font: 13px/1.7em 'Tahoma';">TẬP ĐOÀN BƯU CHÍNH VIỄN THÔNG GIA LAI</p>
            <!-- <p>Địa chỉ: 57 Huỳnh Thúc Kháng - Q.Đống Đa - TP.Hà Nội</p> -->
                <p style="margin-bottom: 3px; font: 13px/1.7em 'Tahoma';">Website: http://vnpt.vn</p> 
            </div>
            <div class="footer-right ">          
            </div>
        </div>
    </footer>

</body>
</html>

