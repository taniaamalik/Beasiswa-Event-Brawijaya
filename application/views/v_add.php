<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/add/data2.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/add/bootstrap2.css">
	<script src="<?php echo base_url()?>assets/add/js1.js"><</script>
	<script src="<?php echo base_url()?>assets/add/js2.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <div class="gbr">
                <img src="<?php echo base_url()?>assets/images/1200px-logo-universitas-brawijaya.svg-192x193.png" id="icon" alt="User Icon"/>
            </div>

        </div>
		<h2>TAMBAH INFORMASI BEASISWA</h2><br><br><br>
        <!-- Login Form -->
        <form action="<?php echo base_url('admin/add'); ?>" method="post">
            <input type="text" id="login" class="fadeIn second" name="nama_bea" placeholder="Nama Beasiswa">
            <input type="text" id="password" class="fadeIn third" name="jenis" placeholder="Jenis Beasiswa">
			<input type="text" id="login" class="fadeIn second" name="fak" placeholder="Fakultas">
			<input type="text" id="password" class="fadeIn third" name="jangka" placeholder="Jangka Waktu">
			<input type="text" id="login" class="fadeIn second" name="deskripsi" placeholder="Deskripsi Beasiswa">
            <input type="submit" class="fadeIn fourth" value="TAMBAHKAN">
        </form>
    </div>
</div>
</body>

</html>
