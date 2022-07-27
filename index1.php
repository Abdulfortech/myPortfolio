<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Abdullahi Aminu, @ibn__aminu">
	<!-- <meta name="generator" content="Neutral"> -->
	<!-- title -->
	<title>Abdullahi Aminu | Web Developer, IT Consultant, and Fashion Designer</title>
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
	<!-- Header container -->
	<div class="px-4 py-5 my-5 text-center">
		
		<img class="d-block mx-auto mb-4 mt-5 rounded-circle shadow" src="img/me.png" alt="" width="150" height="150">
		<h1 class="display-5 fw-bold text-color2">Hi, I am Abdullahi </h1>
		<div class="col-lg-6 mx-auto">
		  <H5 class="lead mb-4">
			  I am a fullstack web developer, IT Consultant, Content Creator, I specialized in building custome web applications for individual and businesses  
			  <!-- Shahuci Global Resources is an IT company located in Kano state of Nigeria, focuses 
			  mainly in providing IT solutions to local and international businesses such as Software 
			  development, Digital Marketing, software management and maintainance, IT consultancy and training. -->
		  </p>
		  <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
			<a href="projects" class="btn btn-primary btn-lg px-4"><i class="fa fa-briefcase"></i> My Projects</a>
			<a href="contact" class="btn btn-primary btn-lg px-4"><i class="fa fa-envelope"></i> Get in Touch</a>
		  </div>
		</div>
	</div>
	<!-- my Skills -->
	<section class="farko bg-light p-3">
		<div class="container text-center mt-4 p-0">
			<h1 class="featurette-heading fw-bold mt-4 mb-5 text-color1">My	 <span class="text-color2">Skills</span></h1>
			<div class="row mb-4">
				<?php 
					// skill Infor
					$skills = $conn->query("SELECT * FROM skills WHERE status=1 ") or die($conn->error);
					while ($row = $skills->fetch_assoc()) {
				?>
				<!-- single card -->
				<div class="col-md-3 mb-3">
					<div class="card shadow skill border-0 border-bottom-primary">
						<div class="card-body">
							<h5 class="text-dark fw-bold text-center"><?= $row['title']?></h5>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<!-- Featured Projects -->
	<section class="farko  p-3">
		<div class="container text-center mt-4 p-0">
			<h1 class="featurette-heading fw-bold mt-4 mb-5 text-color1">Featured <span class="text-color2">Projects</span></h1>
			<div class="row mb-4">
                <?php 
                    // school Infor
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
			<a href="projects" class="btn btn-primary  px-3"><i class="fa fa-briefcase"></i> View All Projects</a>
		</div>
	</section>
	<!-- Latest Articles -->
	<section class="farko bg-light p-3">
		<div class="container text-center mt-4 p-0">
			<h1 class="featurette-heading fw-bold mt-4 mb-5 text-color1">Latest <span class="text-color2">Articles</span></h1>
			<div class="row mb-4">
				<!-- single card -->
				<div class="col-md-3 mb-3">
					<a href="#" class="text-decoration-none">
						<div class="card shadow blog">
							<img src="img/photo2.png">
							<div class="card-body p-2 ">
								<h5 class="text-primary fw-bold text-left">HTTPdRequestsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</h5>
								<p class="text-dark">Lorem ipsum dolor sit amet, consectetur sit amet, consectetur sit amet, consectetur </p>
							</div>
						</div>
					</a>
				</div>
				<!-- single card -->
				<div class="col-md-3 mb-3">
					<a href="#" class="text-decoration-none">
						<div class="card shadow blog">
							<img src="img/photo2.png">
							<div class="card-body p-2 ">
								<h5 class="text-primary fw-bold text-left">HTTP Requests : how to use them in a laravel project</h5>
								<p class="text-dark">Lorem ipsum dolor sit amet, consectetur sit amet, consectetur sit amet, consectetur </p>
							</div>
						</div>
					</a>
				</div>
				<!-- single card -->
				<div class="col-md-3 mb-3">
					<a href="#" class="text-decoration-none">
						<div class="card shadow blog">
							<img src="img/photo2.png">
							<div class="card-body p-2 ">
								<h5 class="text-primary fw-bold text-left">HTTP Requests : how to use them in a laravel project</h5>
								<p class="text-dark">Lorem ipsum dolor sit amet, consectetur sit amet, consectetur sit amet, consectetur </p>
							</div>
						</div>
					</a>
				</div>
				<!-- single card -->
				<div class="col-md-3 mb-3">
					<a href="#" class="text-decoration-none">
						<div class="card shadow blog">
							<img src="img/photo2.png">
							<div class="card-body p-2 ">
								<h5 class="text-primary fw-bold text-left">HTTP Requests : how to use them in a laravel project</h5>
								<p class="text-dark">Lorem ipsum dolor sit amet, consectetur sit amet, consectetur sit amet, consectetur </p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<a href="blog" class="btn btn-primary  px-3"><i class="fa fa-newspaper-o"></i> View All Articless</a>
		</div>
	</section>
	<!-- PROJECT HIRING -->
	<section class="farko p-4">
        <center>
            <div class="col-md-6 text-center order-md-1">
                <h1 class="featurette-heading fw-bold mt-5 mb-3 text-primary">Have a project<span class="text-muted"> in mind?</span></h1>
                <div class="container p-1">
                  <p class="lead">For freelancing or consultancy in web development, IT or entrepreneurship, or you have any kind of idea or suggestion related to tech and entrepreneurship</p>
					<a href="sams.html" class="btn btn-primary"><i class="fa fa-envelope"></i> Contact Me</a>
                </div>
            </div>
        </center>
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
