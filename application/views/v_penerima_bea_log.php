<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.11.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/1200px-logo-universitas-brawijaya.svg-122x123.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>BEBE</title>
<!--	<link rel="stylesheet" href="assets/add/tambahan.css">-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/add/btnAdd.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dropdown/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tether/tether.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/socicon/css/styles.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/style.css">
  <link rel="preload" as="style" href="<?php echo base_url(); ?>assets/mobirise/css/mbr-additional.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/mobirise/css/mbr-additional.css" type="text/css">

  
</head>
<body>
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
						<div class="text-white dropdown-item display-4"><a class="drop-btn" href="<?php echo base_url('user/penerima_bea'); ?>">Penerima Beasiswa</a>
					</div>
				</li><li class="nav-item"><a class="nav-link link text-white display-4" href="<?php echo base_url('user/logout'); ?>"><span class="mbrib-login mbr-iconfont mbr-iconfont-btn"></span>
						Logout</a></li></ul>

		</div>
	</nav>
</section>
<section class="engine"><a href="https://mobirise.info/l">free website templates</a></section><section class="cid-qTkA127IK8 mbr-fullscreen mbr-parallax-background" id="header2-1">



    <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(35, 35, 35);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">EVENT BEASISWA</h1>
				<h1>WELCOME <?php echo strtoupper($this->session->userdata('namaU'))?></h1>
                <p class="mbr-text pb-3 mbr-fonts-style display-5">Sistem Pengelola Informasi Beasiswa<br>Universitas Brawijaya</p>
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>


<section class="section-table cid-rGakfBqhSo" id="table1-9">



  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">Penerima Beasiswa</h2>

      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Cari :</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
				  <th class="head-item mbr-fonts-style display-7">No.</th>
				  <th class="head-item mbr-fonts-style display-7">NIM</th><th class="head-item mbr-fonts-style display-7">Nama Mahasiswa</th><th class="head-item mbr-fonts-style display-7">Nama Beasiswa</th>
				  <th class="head-item mbr-fonts-style display-7">Fakultas</th><th class="head-item mbr-fonts-style display-7">Jenis Beasiswa</th>
				  <th class="head-item mbr-fonts-style display-7">Status</th>
			  </tr>

            <tbody>
			<?php $nmr=1;
			foreach ($dt as $d): ?>
			<tr>
				<td class="body-item mbr-fonts-style display-7"><?php echo $nmr ?></td>
              	<td class="body-item mbr-fonts-style display-7"><?php echo $d->nim ?></td>
				<td class="body-item mbr-fonts-style display-7"><?php echo $d->nama ?></td>
				<td class="body-item mbr-fonts-style display-7"><?php echo $d->nama_bea ?></td>
				<td class="body-item mbr-fonts-style display-7"><?php echo $d->Fak_bea ?></td>
				<td class="body-item mbr-fonts-style display-7"><?php echo $d->Jenis_bea ?></td>
				<td class="body-item mbr-fonts-style display-7"><?php echo $d->status ?></td>
			</tr>
			<?php $nmr++; ?>
			<?php endforeach; ?>

			</tbody>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Menampilkan</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">Data</span>
                <span class="infoFilteredBefore">(filtered from</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> total entries)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="cid-rGaiOCAfGD" id="footer1-7">


    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="http://ub.ac.id">
                        <img src="<?php echo base_url(); ?>assets/images/1200px-logo-universitas-brawijaya.svg-192x193.png" alt="Mobirise" title="">
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
  <script src="<?php echo base_url(); ?>assets/dropdown/js/nav-dropdown.js"></script>
  <script src="<?php echo base_url(); ?>assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="<?php echo base_url(); ?>assets/tether/tether.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/parallax/jarallax.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/datatables/jquery.data-tables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/smoothscroll/smooth-scroll.js"></script>
  <script src="<?php echo base_url(); ?>assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/theme/js/script.js"></script>
</body>
</html>
