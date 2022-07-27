<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Abdullahi Aminu, @ibn__aminu">
	<!-- <meta name="generator" content="Neutral"> -->
	<!-- title -->
	<title>Abdullahi Aminu | Contact Me</title>
	<!-- Favicon -->
	<link rel="icon" href="img/sgr.png" type="image/png">
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">
    <!-- Bootstrap core CSS -->
	<link href="vendor/css/bootstrap.min.css" rel="stylesheet">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="vendor/assets/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Custom styles for this template -->
	<link href="css/heroes.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="vendor/assets/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    
  <main>
	<!-- Navigation bar -->
	<?php include 'navbar.php'; include 'header.php';?>
    <!-- contact container -->
	<section class="farko container p-3 mt-5">
        <h1 class="featurette-heading text-center fw-bold mt-4 mb-5 text-color1">Get in Touch <span class="text-color2"> With Me</span></h1>
        <div class="row">
            <div class="container col-md-6 text-center">
                <form method="POST" action="process.php">
                    <div class="form-group text-start">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group text-start">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group text-start">
                        <label>Subject</label>
                        <input type="text" class="form-control" name="subject" required>
                    </div>
                    <div class="form-group text-start">
                        <label>Message</label>
                        <textarea class="form-control" name="body" rows="4" required></textarea>
                    </div>
                    <button type="sumbit" class="btn btn-primary mt-4 mb-4" name="sendMail">Send</button>
                </form>
            </div>
            <div class="container col-md-6 text-center ">
                <div class="row">
                    <!-- contact card -->
                    <div class="col-6">
                        <a href="<?= $twitter ?>" class="text-decoration-none">
                            <div class="card shadow contact-box border-bottom-primary">
                                <div class="card-body">
                                    <i class="fa fa-twitter"></i>
                                    <h5 class="text-dark fw-bold text-center">Abdulfortech</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- contact card -->
                    <div class="col-6">
                        <a href="<?= $linkedin ?>" class="text-decoration-none">
                            <div class="card shadow contact-box border-bottom-primary">
                                <div class="card-body">
                                    <i class="fa fa-linkedin"></i>
                                    <h5 class="text-dark fw-bold text-center">Abdullahi Aminu</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- contact card -->
                    <div class="col-6">
                        <a href="<?= $whatsapp ?>" class="text-decoration-none">
                            <div class="card shadow contact-box border-bottom-primary">
                                <div class="card-body">
                                    <i class="fa fa-whatsapp"></i>
                                    <h5 class="text-dark fw-bold text-center">+2348067456793</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- contact card -->
                    <div class="col-6">
                        <a href="<?= $instagram ?>" class="text-decoration-none">
                            <div class="card shadow contact-box border-bottom-primary">
                                <div class="card-body">
                                    <i class="fa fa-instagram"></i>
                                    <h5 class="text-dark fw-bold text-center">Abdulfortech</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
	</section>
  </main>

  <?php include 'footer.php';?>



    <!-- scripts -->
    <!-- jQuery -->
    <script src="vendor/assets/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendor/js/bootstrap.bundle.min.js"></script> 
    <script src="vendor/js/bootstrap.min.js"></script>  
    <!-- overlayScrollbars -->
    <script src="vendor/assets/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="vendor/bootstrap-notify-3/bootstrap-notify.js"></script>
    <?php if (isset($_SESSION['msg'])) { $msg = $_SESSION['msg'];?>
    <script type="text/javascript">
        $(document).ready(function() {
            $.notify({
            title: "<b>Alert :</b>",
            message: "<?= $msg?>",
            icon: 'fa fa-bell',
            type: "info"
            });
        });
    </script>
    <?php  unset($_SESSION['msg']); }?>
  </body>
</html>
