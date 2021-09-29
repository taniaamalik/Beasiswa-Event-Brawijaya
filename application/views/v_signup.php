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
        <form action="<?php echo base_url()?>/Welcome/signup" onsubmit="return validasi()" method="post">
			<input type="text" id="nama" class="fadeIn second" name="nama" placeholder="Nama Lengkap" required>
			<input type="text" id="username" class="fadeIn second" name="username" placeholder="Username" required>
			<input type="password" id="password" class="fadeIn second" name="password" placeholder="Password" required>
			<input type="password" id="repassword" class="fadeIn second" name="repassword" placeholder="Ketik Ulang Password" required>
			<input type="text" id="kode" class="fadeIn second" name="kodeunik" placeholder="Kode Unik" required>
            <input type="submit" class="fadeIn fourth" value="Sign Up">
        </form>
		<p style="color: red" id="salah"></p>
        <div id="formFooter">
			<a class="underlineHover" href="<?php echo base_url(); ?>">HOME</a><br><br>
			<a class="underlineHover" href="<?php echo base_url('welcome/create_login'); ?>">Login</a><br><br>
        </div>
    </div>
</div>
</body>

</html>
<script>
    function validasi() {
        var pass1 = document.getElementById("password").value;
        var pass2 = document.getElementById("repassword").value;
        var ok = true;
        if (pass1 != pass2) {
            document.getElementById("salah").innerHTML = "Password Tidak Sama";
            document.getElementById("password").style.borderColor = "#E34234";
            document.getElementById("repassword").style.borderColor = "#E34234";
            ok = false;
        }
        return ok;
    }
</script>
