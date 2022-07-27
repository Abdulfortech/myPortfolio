<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Abdullahi Aminu, @ibn__aminu">
	<!-- <meta name="generator" content="Neutral"> -->
	<!-- title -->
	<title>Abdullahi Aminu | My Projects</title>
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
    
  <main class="mb-0 bg-light">
	<!-- Navigation bar -->
	<?php include 'navbar.php'; include 'header.php';?>
	<!-- Featured Projects -->
	<section class="farko bg-light p-3 mt-5 mb-0">
		<div class="container text-center mt-4 mb-0 p-0">
			<h1 class="featurette-heading fw-bold mt-4 mb-5 text-color1">My <i class="fa fa-briefcase"></i> <span class="text-color2">Projects</span></h1>
			<div class="row mb-4">
                <?php 
                    $projects = $conn->query("SELECT * FROM projects WHERE status=1 and access=1") or die($conn->error);
                    while ($row = $projects->fetch_assoc()) {
                ?>
				<!-- single card -->
				<div class="col-md-4 mb-3">
                    <a href="project?id=<?= $row['project_id']?>" class="text-decoration-none">
                        <div class="card shadow project border-bottom-primary">
                            <img src="img/photo2.png">
                            <div class="card-body p-3 ">
                                <h3 class="text-dark fw-bold text-start"><?= $row['pname']?></h3>
                                <h6 class="text-primary fw-bold text-start"><?= $row['category']?> 
                                    <i class="fa fa-dot-circle-o text-primary fa-sm"></i> 
                                    <?php if($row['progress'] == 1){echo "On-Going";}else{echo "Completed";} ?>
                                </h6>
                                <p class="text-dark text-justify"><?= substr($row['short_des'],0,170)?>..</p>
                            </div> 
                        </div>
                    </a>
                </div>
                <?php } ?>
			</div>
		</div>
	</section>
  </main>

<!--Footer-->
<?php include 'footer.php';?>
<!--/.Footer-->

    <!-- scripts -->
    <!-- jQuery -->
    <script src="vendor/assets/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendor/js/bootstrap.bundle.min.js"></script> 
    <script src="vendor/js/bootstrap.min.js"></script>  
    <!-- overlayScrollbars -->
    <script src="vendor/assets/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  </body>
</html>
