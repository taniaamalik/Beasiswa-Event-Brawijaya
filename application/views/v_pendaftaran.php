<!DOCTYPE html>
<html>
<head>
	<!-- Site made with Mobirise Website Builder v4.11.4, https://mobirise.com -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="generator" content="Mobirise v4.11.4, mobirise.com">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="shortcut icon"
		  href="<?php echo base_url(); ?>assets/images/1200px-logo-universitas-brawijaya.svg-122x123.png"
		  type="image/x-icon">
	<meta name="description" content="Web Page Generator Description">

	<title>BEBE</title>
	<script src="<?php echo base_url(); ?>/assets/add/js_viewtoastr.js"></script>
	<link href="<?php echo base_url(); ?>/assets/add/css_viewtoastr.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/assets/mobirise-icons/mobirise-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dropdown/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/tether/tether.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/animatecss/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/style.css">
	<link rel="preload" as="style" href="<?php echo base_url(); ?>assets/mobirise/css/mbr-additional.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/mobirise/css/mbr-additional.css" type="text/css">


</head>
<body>
<div>
	<?php
	$this->load->view('alertku');
	?>
</div>
<section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">
	<nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<div class="hamburger">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</button>
		<div class="menu-logo">
			<div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="http://ub.ac.id">
                         <img src="<?php echo base_url(); ?>assets/images/1200px-logo-universitas-brawijaya.svg-122x123.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>

			</div>
		</div>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
				<li class="nav-item"><a class="nav-link link text-white display-4" href="<?php echo base_url(); ?>" aria-expanded="true"><span class="mbrib-home mbr-iconfont mbr-iconfont-btn"></span>Home</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link link text-white dropdown-toggle display-4" data-toggle="dropdown-submenu" aria-expanded="true">
						<span class="mbri-edit mbr-iconfont mbr-iconfont-btn"></span>Opsi</a><div class="dropdown-menu">
						<a class="text-white dropdown-item display-4" href="<?php echo base_url('user/histori'); ?>">Histori Beasiswa</a>
						<a class="text-white dropdown-item display-4" href="<?php echo base_url('user/penerima_bea'); ?>">Penerima Beasiswa</a>
					</div>
				</li><li class="nav-item"><a class="nav-link link text-white display-4" href="<?php echo base_url('user/logout'); ?>"><span class="mbrib-login mbr-iconfont mbr-iconfont-btn"></span>
						Logout</a></li></ul>

		</div>
		
	</nav>
</section>
<section class="engine"><a href="https://mobirise.info/l">free web templates</a></section>
<section class="header1 cid-rHi79XuPhT" id="header16-v">


	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-10 align-center">
				<h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
					FORMULIR PENDAFTARAN BEASISWA
				</h1>

				<p class="mbr-text pb-3 mbr-fonts-style display-5">
					Download Berkas berikut untuk pra syarat Pendaftaran Beasiswa
				</p>
				<a href="<?php echo base_url(); ?>assets/files/formulirBEBE.docx" download>
					<img src="<?php echo base_url(); ?>assets/images/download.png" alt="W3Schools" width="10%"
						 height="20%">
					<br>
					<p class="mbr-text pb-3 mbr-fonts-style display-5">
						Download FILE
				</a>
			</div>
		</div>
	</div>

</section>

<section class="header15 cid-rHi7dtX0BE mbr-fullscreen mbr-parallax-background" id="header15-w">
	<?php foreach ($dt as $d): ?>


		<div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>

		<div class="container align-right">
			<div class="row">
				<div class="mbr-white col-lg-8 col-md-7 content-container">
					<h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1" style="font-size: xxx-large">
						Beasiswa <?php echo $d->nama_bea ?>
					</h1>
					<p class="mbr-text pb-3 mbr-fonts-style display-5">
						<?php echo $d->deskripsi ?>
						<br></p>
				</div>
				<div class="col-lg-4 col-md-5">
					<div class="form-container">
						<form action="<?php base_url('user/store');?>" method="post" enctype="multipart/form-data">
							<div class="dragArea row">
								<div class="col-md-12 form-group ">
									<input type="text" name="name" value="NIM : <?php echo $this->session->userdata('nama') ?>" class="form-control px-3 display-7" id="name-header15-w">
								</div>
								<div class="col-md-12 form-group ">
									<input readonly type="text" name="name" value="Nama : <?php echo $this->session->userdata('namaU') ?>" data-form-field="Name" class="form-control px-3 display-7" id="name-header15-w">
								</div>
								<div class="col-md-12 form-group ">
									<input readonly type="email" name="email" value="Fakultas : <?php echo $d->Fak_bea; ?>" data-form-field="Email" class="form-control px-3 display-7" id="email-header15-w">
								</div>
								<div class="col-md-12 form-group ">
									<input readonly type="email" name="email" value="Jenis Beasiswa : <?php echo $d->Jenis_bea; ?>" data-form-field="Email" class="form-control px-3 display-7" id="email-header15-w">
								</div>
								<div class="col-md-12 form-group ">
									<input readonly type="email" name="email" value="Jangka Waktu : <?php echo $d->jangka_bea; ?>" data-form-field="Email" class="form-control px-3 display-7" id="email-header15-w">
								</div>
								<p style="color: aqua">&nbsp;&nbsp;&nbsp;&nbsp; Upload berkas yang telah diisi</p>
							</div>
						</form>
						<?php echo form_open_multipart("user/store/$d->id"); ?>

						<input type="file" name="fileUpload" id="fileToUpload" accept=".docx" style="color:aqua;" required>
						<div class="col-md-12 input-group-btn">
							<button type="submit" class="btn btn-secondary btn-form display-4">DAFTAR</button>
						</div>
						<?php echo form_close();?>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</section>
<section class="cid-rGaiOCAfGD" id="footer1-7">


	<div class="container">
		<div class="media-container-row content text-white">
			<div class="col-12 col-md-3">
				<div class="media-wrap">
					<a href="http://ub.ac.id">
						<img
							src="<?php echo base_url(); ?>assets/images/1200px-logo-universitas-brawijaya.svg-192x193.png"
							alt="Mobirise" title="">
					</a>
				</div>
			</div>
			<div class="col-12 col-md-3 mbr-fonts-style display-7">
				<h5 class="pb-3">
					Address
				</h5>
				<p class="mbr-text">Veteran Street, Malang, 65145
					<br>Phone +62-341-551611 ext: 126</p>
			</div>
			<div class="col-12 col-md-3 mbr-fonts-style display-7">
				<h5 class="pb-3">
					Contacts
				</h5>
				<p class="mbr-text">
					Email &nbsp;: humas@ub.ac.id&nbsp;<br>Phone: 085722022999<br></p>
			</div>
			<!-- <div class="col-12 col-md-3 mbr-fonts-style display-7">
				<h5 class="pb-3"></h5>
				<p class="mbr-text">
					<a class="text-primary" href="https://mobirise.co/">Website builder</a>
					<br><a class="text-primary" href="https://mobirise.co/">Download for Windows</a>
					<br><a class="text-primary" href="https://mobirise.co/">Download for Mac</a>
				</p>
			</div> -->
		</div>
		<div class="footer-lower">
			<div class="media-container-row">
				<div class="col-sm-12">
					<hr>
				</div>
			</div>
			<div class="media-container-row mbr-white">
				<div class="col-sm-6 copyright">
					<p class="mbr-text mbr-fonts-style display-7">
						© Copyright RPL FILKOM - All Rights Reserved
					</p>
				</div>
				<div class="col-md-6">
					<div class="social-list align-right">
						<div class="soc-item">
							<a href="https://twitter.com/" target="_blank">
								<span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
							</a>
						</div>
						<div class="soc-item">
							<a href="https://www.facebook.com/" target="_blank">
								<span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
							</a>
						</div>
						<div class="soc-item">
							<a href="https://www.youtube.com/" target="_blank">
								<span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
							</a>
						</div>
						<div class="soc-item">
							<a href="https://instagram.com/" target="_blank">
								<span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
							</a>
						</div>
						<div class="soc-item">
							<a href="https://plus.google.com/" target="_blank">
								<span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
							</a>
						</div>
						<!-- <div class="soc-item">
							<a href="https://www.behance.net/Mobirise" target="_blank">
								<span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
							</a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<script src="<?php echo base_url(); ?>assets/web/assets/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/popper/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/smoothscroll/smooth-scroll.js"></script>
<script src="<?php echo base_url(); ?>assets/dropdown/js/nav-dropdown.js"></script>
<script src="<?php echo base_url(); ?>assets/dropdown/js/navbar-dropdown.js"></script>
<script src="<?php echo base_url(); ?>assets/tether/tether.min.js"></script>
<script src="<?php echo base_url(); ?>assets/viewportchecker/jquery.viewportchecker.js"></script>
<script src="<?php echo base_url(); ?>assets/parallax/jarallax.min.js"></script>
<script src="<?php echo base_url(); ?>assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/js/script.js"></script>
<script src="<?php echo base_url(); ?>assets/formoid/formoid.min.js"></script>


<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i
			class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
<input name="animation" type="hidden">
</body>
</html>
