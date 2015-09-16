<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>IHT - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="" name="description" />
        <meta content="themes-lab" name="author" />
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.ico">
        <link href="<?php echo base_url()?>assets/global/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/global/css/theme.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/global/css/ui.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/global/css/lada.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    </head>
    <body class="account" data-page="login">
        <!-- BEGIN LOGIN BOX -->
        <div class="container" id="login-block">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <img src="<?php echo base_url()?>assets/images/logo/logo.png"/ class="login-logo col-md-12">
                </div>
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <div class="account-wall" style="background-color: rgb(255, 255, 255);">
                        <h2><center>LOGIN</center></h2>
                        <?php if (isset($error)): ?>
                            <h6 class="w-500 alert bg-red"><?php echo $error ?></h6>
                        <?php endif ?>
                        <form class="form-signin" role="form" method="post" action="<?php echo base_url('index.php/login/submit') ?>">
                            <div class="append-icon">
                                <input type="text" name="user" id="" class="form-control form-white username" placeholder="Username" required>
                                <i class="icon-user"></i>
                            </div>
                            <br/>
                            <div class="append-icon m-b-20">
                                <input type="password" name="password" class="form-control form-white password" placeholder="Password" required>
                                <i class="icon-lock"></i>
                            </div>
                            <button type="submit" id="" class="btn btn-lg btn-primary btn-block ladda-button" data-style="expand-left">LOGIN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url()?>assets/global/scripts/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url()?>assets/global/scripts/jquery-migrate-1.2.1.min.js"></script>
        <script src="<?php echo base_url()?>assets/global/scripts/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/global/scripts/backstretch.min.js"></script>
        <script src="<?php echo base_url()?>assets/global/scripts/bootstrap-loading/lada.min.js"></script>
        <script src="<?php echo base_url()?>assets/global/scripts/login-v1.js"></script>
    </body>
</html>