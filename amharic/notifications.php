<?php 
require 'constants/settings.php'; 
require 'constants/check-login.php';
if ($user_online == "true") {
}else{
header("location:../");	
}
include "admin/DB_connection.php";
include "admin/app/Model/Task.php";
include "admin/app/Model/User.php";

// Amharic translations
$text = "ሁሉም ማሳወቂያዎች";
if (isset($_GET['due_date']) &&  $_GET['due_date'] == "Due Today") {
	$text = "ዛሬ የተጻፉ";
	$tasks = get_all_tasks_due_today($conn);
	$num_task = count_tasks_due_today($conn);
}else{
	$tasks = get_all_tasks($conn);
	$num_task = count_tasks($conn);
}
$users = get_all_users($conn);
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>ኢትዮ ሎካል ስራዎች - ማሳወቂያዎች</title>
	<meta name="description" content="የመስመር ላይ የስራ አስተዳደር / የስራ ፖርታል" />
	<meta name="keywords" content="ስራ, ስራ ፈላጊ, አመልካች, ስራ ማመልከቻ, ሰራተኛ, ሀላፊ, መቅጠር, ሰው ኃይል, ኦንላይን የስራ አስተዳደር, ኩባንያ, አደራ, ክህሎት, መቅጠር, አጠናቀቀ" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="ናይትንጌል ስራዎች" />
    <meta property="og:description" content="የመስመር ላይ የስራ አስተዳደር / የስራ ፖርታል" />

	<link rel="apple-touch-icon" sizes="180x180" href="images/ico/favicon_io/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/ico/favicon_io/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/ico/favicon_io/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/component.css" rel="stylesheet">
	
	<link rel="stylesheet" href="icons/linearicons/style.css">
	<link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="icons/rivolicons/style.css">
	<link rel="stylesheet" href="icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="icons/flaticon-ventures/flaticon-ventures.css">

	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="admin/css/style.css">
			
</head>

<body class="not-transparent-header">
<style>
.navbar-fixed-top {
    background-color: #028fc3 !important;
    transition: background-color 0.3s ease;
}
.navbar-default {
    background-color: rgba(2, 143, 195, 0.9) !important;
}
</style>
<div class="container-wrapper">

	<header id="header">
		<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

			<div class="container">
				
				<div class="logo-wrapper">
					<div class="logo">
						<a href="./"><img src="images/ico/1.png" style="width:80%;height:50%;" alt="Logo" /></a>
					</div>
				</div>
				
				<div id="navbar" class="navbar-nav-wrapper navbar-arrow">
				
					<ul class="nav navbar-nav" id="responsive-menu">
						
						<li>
							<a href="employers.php">አሠራተኞች</a>
						</li>
						
						<li>
							<a href="employees.php">ሰራተኞች</a>
						</li>
						
						<li>
							<a href="contact.php">አግኙን</a>
						</li>
					</ul>
			
				</div>

				<div class="nav-mini-wrapper">
					<ul class="nav-mini sign-in">
					<?php
					if ($user_online == true) {
					print '
					    <li><a href="logout.php">ውጣ</a></li>
						<li><a href="'.$myrole.'">መገለጫ</a></li>';
					}else{
					print '
						<li><a href="login.php">ግባ</a></li>
						<li><a data-toggle="modal" href="#registerModal">መዝግብ</a></li>';						
					}
					?>

					</ul>
				</div>
			
			</div>
			
			<div id="slicknav-mobile"></div>
			
		</nav>

		<div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
		
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title text-center">አካውንትዎን ያቀናብሩ (ነፃ)</h4>
			</div>
			
			<div class="modal-body">
			
				<div class="row gap-20">
				
					<div class="col-sm-6 col-md-6">
						<a href="register.php?p=Employer" class="btn btn-facebook btn-block mb-5-xs">እንደ አሠራተኛ ይመዝገቡ</a>
					</div>
					<div class="col-sm-6 col-md-6">
						<a href="register.php?p=Employee" class="btn btn-facebook btn-block mb-5-xs">እንደ ሰራተኛ ይመዝገቡ</a>
					</div>

				</div>
			
			</div>
			
			<div class="modal-footer text-center">
				<button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">ዝጋ</button>
			</div>
			
		</div>
		
	</header>

	<div class="main-wrapper">

		<div class="breadcrumb-wrapper">
		
			<div class="container">
			
				<ol class="breadcrumb-list">
					<li><a href="./">መነሻ ገፅ</a></li>
					<li><span>ማሳወቂያዎች</span></li>
				</ol>
				
			</div>
			
		</div>
		
		<input type="checkbox" id="checkbox">
		
		<div class="body">
	<section class="section-1">
		<center>
		<h4 class="title-2">
			<a href="all_notifications.php?due_date=Due Today"><button class="edit-btn">አዲስ ማሳወቂያ</button></a>
			<a href="all_notifications.php"><button class="edit-btn">ሁሉም ማሳወቂያዎች</button></a>
		</center>
		</h4>
	 <h4 class="title-2"><?=$text?> (<?=$num_task?>)</h4>
		<?php if (isset($_GET['success'])) {?>
			<div class="success" role="alert">
			  <?php echo stripcslashes($_GET['success']); ?>
			</div>
	<?php } ?>
		<?php if ($tasks != 0) { ?>
		<table class="main-table">
			<tr>
				<th>ቁጥር</th>
				<th>ርዕስ</th>
				<th>መግለጫ</th>
				<th>የተላከው ለ</th>
				<th>የተጻፈበት ቀን</th>
				<th>ሁኔታ</th>
				<th width="20%">ተግባር</th>
			</tr>
			<?php $i=0; foreach ($tasks as $task) { ?>
			<tr>
				<td><?=++$i?></td>
				<td><?=$task['title']?></td>
				<td><?=$task['description']?></td>
				<td>
					<?php 
			  foreach ($users as $user) {
					if($user['id'] == $task['assigned_to']){
						echo $user['first_name'];
					}}?>
			</td>
			<td><?php if($task['due_date'] == "") echo "መያዣ ቀን የለም";
					  else echo $task['due_date'];
			   ?></td>
			<td><?=$task['status']?></td>
				<td>
					<a href="edit-task.php?id=<?=$task['id']?>" class="edit-btn">አስተካክል</a>
					<a href="delete-task.php?id=<?=$task['id']?>" class="delete-btn">ሰርዝ</a>
				</td>
			</tr>
		   <?php	} ?>
		</table>
	<?php }else { ?>
		<h3>ባዶ ነው</h3>
	<?php  }?>
		
	</section>
	</div>
		<?php include 'footer.php';?>
		
	</div>
</div>

<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>
<script type="text/javascript">
	var active = document.querySelector("#navList li:nth-child(4)");
	active.classList.add("active");
</script>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="js/bootstrap-modal.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.js"></script>
<script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="js/handlebars.min.js"></script>
<script type="text/javascript" src="js/jquery.countimator.js"></script>
<script type="text/javascript" src="js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/easy-ticker.js"></script>
<script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="js/customs.js"></script>

<script src="js/validator.min.js"></script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/infobox.js"></script>

<script>
	function initialize() {
	// ... Google Map code unchanged ...
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

</body>
</html>