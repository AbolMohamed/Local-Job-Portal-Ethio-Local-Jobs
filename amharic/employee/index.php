<!doctype html>
<html lang="am">
<?php 
require '../constants/settings.php'; 
require 'constants/check-login.php';

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

	<title>ኢትዮ አካባቢ ስራዎች - የሰራተኛ መገለጫ</title>
	<meta name="description" content="የመስመር ላይ ስራ አስተዳደር / የስራ ፖርታል" />
	<meta name="keywords" content="ስራ, ስራ ፈላጊ, ቅጅ, ማመልከቻ, ሰራተኛ, ሠራተኛ, ስራ አስተዳደር, ኩባንያ, ሙያ, ቦታ, ቅጥያ" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Bwire Jobs" />
    <meta property="og:description" content="የመስመር ላይ ስራ አስተዳደር / የስራ ፖርታል" />

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
								<a href="../employers.php">ሰራተኞች</a>
							</li>
							
							<li>
								<a href="../employees.php">ሠራተኞች</a>
							</li>
							
							<li>
								<a href="../contact.php">ያግኙን</a>
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
						<li><span>መገለጫ</span></li>
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
									
										<a target="blank" href="my_cv" class="btn btn-primary btn-sm btn-inverse">የራሴ ሲቪ ይመልከቱ</a>
										
									</div>
									
									<ul class="admin-user-menu clearfix">
										<li  class="active">
											<a href="./"><i class="fa fa-user"></i> መገለጫ</a>
										</li>
										<li class="">
										<a href="change-password.php"><i class="fa fa-key"></i> የይለፍ ቃል ለውጥ</a>
										</li>
										<li>
											<a href="qualifications.php"><i class="fa fa-trophy"></i> የሙያ ብቃት</a>
										</li>
										<li>
											<a href="language.php"><i class="fa fa-language"></i> የቋንቋ ችሎታ</a>
										</li>
										<li>
											<a href="training.php"><i class="fa fa-gears"></i> ስልጠና እና ዉልቅ ስራዎች</a>
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
									
										<h2>መገለጫ</h2>
										<p>የመጨረሻ ግባዎት፡ <span class="text-primary"><?php echo "$mylogin"; ?></span></p>
										
									</div>
									
									<form class="post-form-wrapper" action="app/update-profile.php" method="POST" autocomplete="off">
								
											<div class="row gap-20">
											<?php require 'constants/check_reply.php'; ?>

												<div class="clear"></div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>የመጀመሪያ ስም</label>
														<input name="fname" required type="text" class="form-control" value="<?php echo "$myfname"; ?>" placeholder="የመጀመሪያ ስም ያስገቡ">
													</div>
													
												</div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>የአባት ስም</label>
														<input name="lname" required type="text" class="form-control" value="<?php echo "$mylname"; ?>" placeholder="የአባት ስም ያስገቡ">
													</div>
													
												</div>
												
												<div class="clear"></div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>የትውልድ ቀን</label>
														<div class="row gap-5">
															<div class="col-xs-3 col-sm-3">
																<select name="date" required class="selectpicker form-control" data-live-search="false">
																	<option disabled value="">ቀን</option>
                                                                     <?php 
                                                                      $x = 1; 

                                                                      while($x <= 31) {
                                         
												                      if ($x < 10) {
														              $x = "0$x";
													                  print '<option '; if ($mydate == $x ) { print ' selected '; } print ' value="'.$x.'">'.$x.'</option>';
													                  }else{
													                  print '<option '; if ($mydate == $x ) { print ' selected '; } print ' value="'.$x.'">'.$x.'</option>';
													                  }
                                                                      $x++;
                                                                       } 
                                                                     ?>
																</select>
															</div>
															<div class="col-xs-5 col-sm-5">
																<select name="month" required class="selectpicker form-control" data-live-search="false">
                                                                     <?php 
                                                                      $x = 1; 

                                                                      while($x <= 12) {
                                         
												                      if ($x < 10) {
														              $x = "0$x";
													                  print '<option '; if ($mymonth == $x ) { print ' selected '; } print ' value="'.$x.'">'.$x.'</option>';
													                  }else{
													                  print '<option '; if ($mymonth == $x ) { print ' selected '; } print ' value="'.$x.'">'.$x.'</option>';
													                  }
                                                                      $x++;
                                                                       } 
                                                                     ?>
																</select>
															</div>
															<div class="col-xs-4 col-sm-4">
																<select name="year" class="selectpicker form-control" data-live-search="false">
													            <?php 
                                                                 $x = date('Y'); 
                                                                 $yr = 60;
													             $y2 = $x - $yr;
                                                                 while($x > $y2) {
                                         
													             print '<option '; if ($myyear == $x ) { print ' selected '; } print ' value="'.$x.'">'.$x.'</option>';
                                                                 $x = $x - 1;
                                                                  } 
                                                                  ?>
																</select>
															</div>
														</div>
													</div>
													
												</div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>ኢሜይል</label>
														<input type="email" name="email" required class="form-control" value="<?php echo "$myemail"; ?>" placeholder="ኢሜይል ያስገቡ">
													</div>
													
												</div>
												
												<div class="clear"></div>

												<div class="form-group">
												
													<div class="col-sm-12">
														<label>የትምህርት ደረጃ</label>
													</div>
													
													<div class="col-sm-6 col-md-4">
                                                    <input value="<?php echo "$myedu"; ?>" name="education" type="text" required class="form-control" placeholder="ምሳሌ፡ ዲፕሎማ፣ ዲግሪ...">
													</div>
													
													<div class="col-sm-6 col-md-4">
														<input value="<?php echo "$mytitle"; ?>" name="title" required type="text" class="form-control mb-15" placeholder="ምሳሌ፡ ኮምፒውተር ሳይንስ፣ አይቲ...">
													</div>
														
												</div>
												
												<div class="clear"></div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>ፆታ</label>
														<select name="gender" required class="selectpicker show-tick form-control" data-live-search="false">
															<option disabled value="">ይምረጡ</option>
															<option <?php if ($mygender == "Male") { print ' selected '; } ?> value="Male">ወንድ</option>
															<option <?php if ($mygender == "Female") { print ' selected '; } ?>value="Female">ሴት</option>
														</select>
													</div>
													
												</div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>ከተማ/ከተማ</label>
														<input name="city" required type="text" class="form-control" value="<?php echo "$mycity"; ?>">
													</div>
													
												</div>
												
												<div class="clear"></div>
												
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>መንገድ</label>
														<input name="street" required type="text" class="form-control" value="<?php echo "$mystreet"; ?>">
													</div>
													
												</div>
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>የፖስታ መለኪያ ቁጥር</label>
														<input name="zip" required type="text" class="form-control" value="<?php echo "$myzip"; ?>">
													</div>
													
												</div>

												<div class="clear"></div>
												

												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>አገር</label>
														<select name="country" required class="selectpicker show-tick form-control" data-live-search="true">
															<option disabled value="">ይምረጡ</option>
						                                   <?php
														   require '../constants/db_config.php';
														   try {
                                                           $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
                                                           $stmt = $conn->prepare("SELECT * FROM tbl_countries ORDER BY country_name");
                                                           $stmt->execute();
                                                           $result = $stmt->fetchAll();
  
                                                           foreach($result as $row)
                                                           {
		                                                    ?> <option <?php if ($mycountry == $row['country_name']) { print ' selected '; } ?> value="<?php echo $row['country_name']; ?>"><?php echo $row['country_name']; ?></option> <?php
	 
	                                                        }

					  
	                                                       }catch(PDOException $e)
                                                           {

                                                           }
	
														   ?>
														</select>
													</div>
													
												</div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>ስልክ ቁጥር</label>
														<input type="text" name="phone" required class="form-control" value="<?php echo "$myphone"; ?>">
													</div>
													
												</div>

												


												<div class="clear"></div>
												
												<div class="col-sm-12 col-md-12">
												
													<div class="form-group bootstrap3-wysihtml5-wrapper">
														<label>ስለ እኔ</label>
														<textarea name="about" class="bootstrap3-wysihtml5 form-control" placeholder="አጭር መግለጫዎን ያስገቡ ..." style="height: 200px;"><?php echo "$mydesc"; ?></textarea>
													</div>
													
												</div>
												
												<div class="clear"></div>

												<div class="col-sm-12 mt-10">
													<button type="submit" class="btn btn-primary">አዘምን</button>
													<button type="reset" class="btn btn-primary btn-inverse">ይቅር</button>
												</div>

											</div>
											
										</form><br>
										
										<form action="app/new-dp.php" method="POST" enctype="multipart/form-data">
										<div class="row gap-20">
										<div class="col-sm-12 col-md-12">
												
										<div class="form-group bootstrap3-wysihtml5-wrapper">
										<label>ምስል ያሳዩ</label>
										<input accept="image/*" type="file" name="image"  required >
										</div>
													
										</div>
												
										<div class="clear"></div>

										<div class="col-sm-12 mt-10">
										<button type="submit" class="btn btn-primary">አዘምን</button>
										<?php 
										if ($myavatar == null) {

										}else{
										?><a onclick = "return confirm('አዎን ምስልዎን ማጥፋት ይፈልጋሉ?')" class="btn btn-primary btn-inverse" href="app/drop-dp.php">ምስል ሰርዝ</a> <?php
										}
										?>
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


</body>
</html>