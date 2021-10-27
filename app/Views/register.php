<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create Account</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('theme'); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('theme'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('theme'); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url('theme'); ?>/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('theme'); ?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
    <?php 
            $session = session();
            $error = $session->getFlashdata('error');
        ?>

    <?php if($error){ ?>
    <p style="color:red">Terjadi Kesalahan:
    <ul>
        <?php foreach($error as $e){ ?>
        <li><?php echo $e ?></li>
        <?php } ?>
    </ul>
    </p>
    <?php } ?>
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form method="post" action="/kelolauser/input">
                        <h1>Create Account</h1>
                        <div>
                            <input type="text" class="form-control" name="email" placeholder="Email"
                                required="" />
                        </div>
                        <div>
                            <div>
                                <input type="text" class="form-control" name="username" placeholder="Username"
                                    required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                    required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" name="confirm"
                                    placeholder="Confirm Password" required="" />
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="role">
                                    <option>Choose option level</option>
                                    <option>Admin</option>
                                    <option>User</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-info" name="login">Create Account</button>
                    </form>
                    <br><br>
                    <p>
                        <a href="/auth/login">Sudah punya akun?</a>
                    </p>
</body>

</html>