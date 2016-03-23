<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FMS Jobs Fair</title>

    <!-- Bootstrap core CSS -->

    <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('fonts/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/animate.min.css'); ?>" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url('css/custom.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/icheck/flat/green.css'); ?>" rel="stylesheet">


    <script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>
<style type="text/css">
body {
    background-image: url("<?php echo base_url('images/bg_login.jpg'); ?>");
}</style>

    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('verifylogin'); ?> 
                        <?php echo form_open('login/createSession'); ?> 
                <section class="login_content">
                    <form>                        
                        <h1>ADMIN LOGIN</h1>
                        <div>
                            <input type="text" name="username" class="form-control" placeholder="Username" value="<?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}?>" />
                        </div><br>
                        <div>
                            <input type="password" name="password" class="form-control" placeholder="Password" value="<?php if(isset($_SESSION['password'])){echo $_SESSION['password'];}?>" />
                        </div><br>
                        <div>
                            <?php
                                if(isset($_SESSION['login'])){
                                    echo "<a href='".base_url()."index.php/login/destroySession'>Sign out</a>&nbsp;&nbsp;
                                    <a href='".base_url()."index.php/home'>หลังบ้าน</a>";
                                }
                                else{
                                    echo '<p><button class="btn btn-lg btn-default btn-block btn-signin" type="submit">Sign in</button></p>';
                                } ?>

                        </div>
                        <div class="clearfix"></div>
                        
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
               <!--  <marquee behavior="scroll" direction="up" style="height:200px;color:#FCF9F8"><center>ระบบจัดการงาน FMS Job Fair
                    <br/><br/>คณะวิทยาการจัดการ<br/><br/>สำหรับผู้ดูแลระบบเท่านั้น !!</center></marquee> -->
                
            </div>
            
    </div>

</body>

</html>