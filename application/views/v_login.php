<!DOCTYPE html>
<html>
<head>
	<script src="<?php echo base_url(); ?>/assets/add/js_viewtoastr.js"></script>
	<link href="<?php echo base_url(); ?>/assets/add/css_viewtoastr.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/add/data.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/add/bootstrap.css">
	<script src="<?php echo base_url()?>assets/add/js1.js"><</script>
	<script src="<?php echo base_url()?>assets/add/js2.js"></script>
</head>
<body>
<div>
	<?php
	$this->load->view('alertku');
	?>
</div>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <div class="gbr">
                <img src="<?php echo base_url()?>assets/images/1200px-logo-universitas-brawijaya.svg-192x193.png" id="icon" alt="User Icon"/>
            </div>
        </div>

        <!-- Login Form -->
        <form action="<?php echo base_url('welcome/login'); ?>" method="post">
            <input type="text" id="login" class="fadeIn second" name="nim" placeholder="username" required>
            <input type="password" id="password" class="fadeIn third" name="pwd" placeholder="password" required>
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

        <div id="formFooter">
			<a class="underlineHover" href="<?php echo base_url(); ?>">HOME</a><br><br>
			<a class="underlineHover" href="<?php echo base_url('welcome/sign_up_adminBEBE'); ?>">Sign Up For Admin</a><br><br>
        </div>

    </div>
</div>
</body>

</html>

