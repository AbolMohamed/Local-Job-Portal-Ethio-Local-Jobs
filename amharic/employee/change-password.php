<!doctype html>
<html lang="am">
<?php 
include '../constants/settings.php'; 
include 'constants/check-login.php';

if ($user_online == "true") {
if ($myrole == "employee") {
}else{
header("location:../");		
}
}else{
header("location:../");	
}
?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>ኢትዮ አካባቢ ስራዎች - የይለፍ ቃል ቀይር</title>
	<meta name="description" content="የመስመር ላይ የስራ አስተዳደር / የስራ ጣቢያ" />
	<meta name="keywords" content="ስራ, ስራ ፈላጊ, መግለጫ, ማመልከቻ, ሰራተኛ, ሀላፊ, ቅጥያ, ሰው ኃይል አስተዳደር, hr, መስመር ላይ የስራ አስተዳደር, ኩባንያ, ሰራተኛ, ሙያ, ማቅረብ, አግኝተኛ" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Bwire Jobs" />
    <meta property="og:description" content="የመስመር ላይ የስራ አስተዳደር / የስራ ጣቢያ" />

	<link rel="apple-touch-icon" sizes="180x180" href="../images/ico/favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../images/ico/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../images/ico/favicon_io/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
	
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="../css/animate.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/component.css" rel="stylesheet">
	

	<link rel="stylesheet" href="../icons/linearicons/style.css">
	<link rel="stylesheet" href="../icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="../icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="../icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="../icons/rivolicons/style.css">
	<link rel="stylesheet" href="../icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="../icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="../icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="../icons/flaticon-ventures/flaticon-ventures.css">


	<link href="../css/style.css" rel="stylesheet">

	
</head>
  <style>
  
    .autofit2 {
	height:80px;
	width:100px;
    object-fit:cover; 
  }
  
  </style>

<body class="not-transparent-header">

<style>
/* Add this CSS for the header */
.navbar-fixed-top {
    background-color: #028fc3 !important; /* Using your existing blue color */
    transition: background-color 0.3s ease;
}

/* Optional: If you want the header to be slightly transparent when at top */
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
							<a href="./"><img src="../images/ico/1.PNG" style="width:80%;height:50%;" alt="አርማ">
						</div>
					</div>
					
					<div id="navbar" class="navbar-nav-wrapper navbar-arrow">
					
						<ul class="nav navbar-nav" id="responsive-menu">
							
							<li>
								<a href="../employers.php">ሀላፊዎች</a>
							</li>
							
							<li>
								<a href="../employees.php">ሰራተኞች</a>
							</li>
							
							<li>
								<a href="../contact.php">አግኙን</a>
							</li>

						</ul>
				
					</div>

					<div class="nav-mini-wrapper">
						<ul class="nav-mini sign-in">
							<li><a href="../logout.php">ውጣ</a></li>
							<li><a href="./">መገለጫ</a></li>
						</ul>
					</div>
				
				</div>
				
				<div id="slicknav-mobile"></div>
				
			</nav>

			
		</header>

		<div class="main-wrapper">
		
			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list booking-step">
						<li><a href="../">ኢትዮ አካባቢ ስራዎች</a></li>
						<li><span>የይለፍ ቃል ቀይር</span></li>
					</ol>
					
				</div>
				
			</div>
		
			
			<div class="admin-container-wrapper">

				<div class="container">
				
					<div class="GridLex-gap-15-wrappper">
					
						<div class="GridLex-grid-noGutter-equalHeight">
						
							<div class="GridLex-col-3_sm-4_xs-12">
							
								<div class="admin-sidebar">
										
									<div class="admin-user-item">
									<div class="image">	
									
										<?php 
										if ($myavatar == null) {
										print '<center><img class="img-circle autofit2" src="../images/default.jpg" title="'.$myfname.'" alt="ምስል"  /></center>';
										}else{
										echo '<center><img class="img-circle autofit2" alt="ምስል" title="'.$myfname.'"  src="data:image/jpeg;base64,'.base64_encode($myavatar).'"/></center>';	
										}
										?>
										</div>
										<br>
										
										
										<h4><?php echo "$myfname"; ?> <?php echo "$mylname"; ?></h4>
										<p class="user-role"><?php echo "$mytitle"; ?></p>
										
									</div>
									
									<div class="admin-user-action text-center">
									
										<a target="_blank" href="my_cv" class="btn btn-primary btn-sm btn-inverse">የስራ ታሪኬን ይመልከቱ</a>
										
									</div>
									
									<ul class="admin-user-menu clearfix">
										<li  class="">
											<a href="./"><i class="fa fa-user"></i> መገለጫ</a>
										</li>
										<li class="active">
										<a href="change-password.php"><i class="fa fa-key"></i> የይለፍ ቃል ቀይር</a>
										</li>
										<li>
											<a href="qualifications.php"><i class="fa fa-trophy"></i> ሙያዊ ብቃት</a>
										</li>
										<li>
											<a href="language.php"><i class="fa fa-language"></i> የቋንቋ ክህሎት</a>
										</li>
										<li>
											<a href="training.php"><i class="fa fa-gears"></i> ስልጠና እና ዉል</a>
										</li>
										<li>
											<a href="referees.php"><i class="fa fa-users"></i> አጋሮች</a>
										</li>
										<li>
											<a href="academic.php"><i class="fa fa-graduation-cap"></i> የትምህርት ብቃት</a>
										</li>
										<li>
											<a href="experience.php"><i class="fa fa-briefcase"></i> የስራ ልምድ</a>
										</li>
										<li>
											<a href="attachments.php"><i class="fa fa-folder-open"></i> ሌሎች አባሪዎች</a>
										</li>
										<li>
											<a href="applied-jobs.php"><i class="fa fa-bookmark"></i> የተመዘገቡ ስራዎች</a>
										</li>
										<li>
											<a href="../logout.php"><i class="fa fa-sign-out"></i> ውጣ</a>
										</li>
									</ul>
									
								</div>

							</div>
							
							<div class="GridLex-col-9_sm-8_xs-12">
							
								<div class="admin-content-wrapper">

									<div class="admin-section-title">
									
										<h2>የይለፍ ቃል ቀይር</h2>
	
										
									</div>
									
									<form name="frm" class="post-form-wrapper" action="app/new-pass.php" method="POST">
								
											<div class="row gap-20">
                                             <?php include 'constants/check_reply.php'; ?>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>አዲስ የይለፍ ቃል</label>
														<input type="password" class="form-control" name="password" required placeholder="አዲሱን የይለፍ ቃል ያስገቡ">
													</div>
													
												</div>
												
												<div class="clear"></div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>የይለፍ ቃል ያረጋግጡ</label>
														<input type="password" class="form-control"  name="confirmpassword" required placeholder="አዲሱን የይለፍ ቃል ያረጋግጡ">
													</div>
													
												</div>
												
												<div class="col-sm-12 mt-10">
													<button type="submit" onclick="return check_passwords();" class="btn btn-primary">አዘምን</button>
													<button type="reset" class="btn btn-primary btn-inverse">ይቅር</button>
												</div>

											</div>
											
										</form>
									
								</div>

							</div>
							
						</div>

					</div>

				</div>
			
			</div>
			<?php include '../footer.php';?>
			
		</div>
	

	</div> 

<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>

<script type="text/javascript">
function check_passwords(){
if(frm.password.value == "")
{
	alert("የይለፍ ቃል ያስገቡ።");
	frm.password.focus(); 
	return false;
}
if((frm.password.value).length < 8)
{
	alert("የይለፍ ቃል ቢያንስ 8 ቁምፊዎች መሆን አለበት።");
	frm.password.focus();
	return false;
}

if(frm.confirmpassword.value == "")
{
	alert("የይለፍ ቃል ማረጋገጫ ያስገቡ።");
	return false;
}
if(frm.confirmpassword.value != frm.password.value)
{
	alert("የይለፍ ቃል ማረጋገጫው አይዛመድም።");
	return false;
}

return true;
}
</script>

<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="../js/bootstrap-modal.js"></script>
<script type="text/javascript" src="../js/smoothscroll.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="../js/wow.min.js"></script>
<script type="text/javascript" src="../js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="../js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="../js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.js"></script>
<script type="text/javascript" src="../js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="../js/handlebars.min.js"></script>
<script type="text/javascript" src="../js/jquery.countimator.js"></script>
<script type="text/javascript" src="../js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="../js/slick.min.js"></script>
<script type="text/javascript" src="../js/easy-ticker.js"></script>
<script type="text/javascript" src="../js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="../js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="../js/customs.js"></script>

<script type="text/javascript" src="../js/fileinput.min.js"></script>
<script type="text/javascript" src="../js/customs-fileinput.js"></script>


</body>

</html>