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
		<h2>EDIT INFORMASI BEASISWA</h2>
        <!-- Login Form -->
		<?php foreach ($dd as $d): ?>
        <form action="<?php echo base_url('admin/update'); ?>" method="post">
			<input type="hidden" name="id_bea" value="<?php echo $d->id ?>">
			<p>NAMA BEASISWA</p>
            <input type="text" id="login" class="fadeIn second" name="nama_bea" value="<?php echo $d->nama_bea ?>">
			<p>JENIS BEASISWA</p>
            <input type="text" id="password" class="fadeIn third" name="jenis" value="<?php echo $d->Jenis_bea ?>">
			<p>FAKULTAS</p>
			<input type="text" id="login" class="fadeIn second" name="fak" value="<?php echo $d->Fak_bea ?>">
			<p>JANGKA WAKTU</p>
			<input type="text" id="password" class="fadeIn third" name="jangka" value="<?php echo $d->jangka_bea ?>">
			<p>DESKRIPSI</p>
			<input type="text" id="login" class="fadeIn second" name="deskripsi" value="<?php echo $d->deskripsi ?>">
            <input type="submit" class="fadeIn fourth" value="UPDATE">
        </form>
		<?php endforeach; ?>
    </div>
</div>
</body>

</html>
