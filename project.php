<?php include 'header.php';
    if($_GET){
        $projectid = $_GET['id'];
    }elseif (isset($_POST['id'])) {
        $projectid = $_POST['id'];
    }else{
        // echo "<script> window.open('users', '_self')</script>";
        header("Location:projects");
    }

    $project = $conn->query("SELECT * FROM projects WHERE project_id=$projectid") or die($conn->error);
    while ($row = $project->fetch_assoc()) {
        $pname = $row['pname'];
        $category = $row['category'];
        $link = $row['link'];
        $rlink = $row['rlink'];
        $sdate = $row['sdate'];
        $fdate = $row['fdate'];
        $short = $row['short_des'];
        $long = $row['long_des'];
        $thumbnail = $row['thumbnail'];
        $access = $row['access'];
        $progress = $row['progress'];
        $status = $row['status'];
        $date = $row['date'];
        $uptime = $row['uptime'];
    }
?>
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
    
  <main>
	<!-- Navigation bar -->
	<?php include 'navbar.php'; include 'header.php';?>
	<!-- Featured Projects -->
	<section class="farko p-3 mt-5">
        <div class="col-md-7">                
		    <div class="container text-center mt-4 page-card">
                <h1 class="text-dark fw-bold text-start"><?= $pname?></h1>
                <h6 class="text-primary fw-bold text-start"><?= $category?> 
                    <i class="fa fa-dot-circle-o text-primary fa-sm"></i> 
                    <?php if($progress == 1){echo "On-Going";}else{echo "Completed";} ?>
                </h6>

                <p class="text-justify"><?= $short?></p>
                <!-- <img src="<?= $thumbnail?>" class="mb-5"> -->
                <img src="img/photo2.png" class="mb-5">
                <div class="body"><?= $long; ?>  </div>
                <center>
                    <?php  if ($link != '') { ?>
                    <a href="<?= $link?>" class="btn btn-sm btn-primary shadow-sm">
                        <i class="fa fa-globe fa-sm text-white-50"></i> Preview
                    </a> 
                    <?php }elseif ($github != ''){?>
                    <a href="<?= $rlink?>" target="_blank" class="btn btn-sm btn-dark shadow-sm">
                        <i class="fa fa-github fa-sm text-white-50"></i> GitHub 
                    </a>
                    <?php }else{ }?>
                    <a href="<?= $rlink?>" target="_blank" class="btn btn-sm btn-dark shadow-sm">
                        <i class="fab fa-github fa-sm text-white-50"></i> GitHub 
                    </a>   
                </center>
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
