<!doctype html>
<html lang="am">
<?php 
require 'constants/settings.php'; 
require 'constants/check-login.php';

if (isset($_GET['token'])) {
$token = $_GET['token'];	
}else{
	header("location:./");
}

?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>ናይቲንጌል ስራዎች - የይለፍ ቃል እንደገና ያዘምኑ</title>
	
	<meta name="description" content="ኦንላይን የስራ አስተዳደር / የስራ ድህረ ገጽ" />
	<meta name="keywords" content="ስራ, ስራ ፈላጊ, ስራ አጋር, ማመልከቻ, ሰራተኛ, ሀይል ሂደት, ኦንላይን የስራ አስተዳደር, ኩባንያ, ሙያ, ቅጥያ, ቅጥያ ማግኘት" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="ብዋየር ስራዎች" />
    <meta property="og:description" content="ኦንላይን የስራ አስተዳደር / የስራ ድህረ ገጽ" />

	<link rel="shortcut icon" href="images/ico/favicon.png">

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

</head>


<body class="not-transparent-header">

	<div class="container-wrapper">


		<header id="header">


			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

				<div class="container">
					
					<div class="logo-wrapper">
						<div class="logo">
							<a href="./"><img src="images/logo.png" alt="አርማ" /></a>
						</div>
					</div>
					
					<div id="navbar" class="navbar-nav-wrapper navbar-arrow">
					
						<ul class="nav navbar-nav" id="responsive-menu">
						
							<li>
								<a href="./">መነሻ</a>
							</li>
							
							<li>
								<a href="job-list.php">የስራ ዝርዝር</a>
							</li>
							
							<li>
								<a href="employers.php">ስራ አስገባቢዎች</a>
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
							<li><a  href="login.php">ግባ</a></li>
							<li><a data-toggle="modal" href="#registerModal">መመዝገብ</a></li>
						</ul>
					</div>
				
				</div>
				
				<div id="slicknav-mobile"></div>
				
			</nav>
	
			<div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-center">አካውንትዎን በነፃ ይፍጠሩ</h4>
				</div>
				
				<div class="modal-body">
				
					<div class="row gap-20">
					
						<div class="col-sm-6 col-md-6">
							<a href="register.php?p=Employer" class="btn btn-facebook btn-block mb-5-xs">እንደ ስራ አስገባቢ ይመዝገቡ</a>
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
						<li><a href="./">መነሻ</a></li>
						<li><span>የይለፍ ቃል እንደገና ያዘምኑ</span></li>
					</ol>
					
				</div>
				
			</div>


			<div class="login-container-wrapper">	
	
				<div class="container">
				
					<div class="row">
					
						<div class="col-md-10 col-md-offset-1">
						
							<div class="row">

								<div class="col-sm-6 col-sm-offset-3">
                                <?php
								require 'constants/check_reply.php';	
								?>
                                <form name="frm" action="app/change-pass.php" method="POST" autocomplete="off">
                                <div class="login-box-wrapper">
							
                                <div class="modal-header">
                                <h4 class="modal-title text-center">የይለፍ ቃልዎን ዳግም ያቀይሩ</h4>
                                </div>

                                <div class="modal-body">
																
                                <div class="row gap-20">
								<?php
								require 'constants/db_config.php';
								
								try {
                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
                                $stmt = $conn->prepare("SELECT * FROM tbl_tokens WHERE token = :token limit 1");
								$stmt->bindParam(':token', $token);
                                $stmt->execute();
                                $result = $stmt->fetchAll();
                                $res = count($result);
								
								if ($res == "0") {
									                                  print '
	                            <div class="alert alert-warning">
								<strong>ይህን ቶክን መጠቀም አልተቻለም ምክንያቱም</strong><br>
                                 <li>ቶክኑ ልክ አይደለም</li>
								 <li>ቶክኑ አስቀድሞ ተጠቅመዋል</li>
	                          </div>
                                  ';
								 $invalid_token = true;
								 
								}else{

                                foreach($result as $row)
                                {
									?>
							    <div class="col-sm-12 col-md-12">

                                <div class="form-group"> 
                                <label>አዲስ የይለፍ ቃል</label>
                                <input class="form-control" placeholder="ከ8 እስከ 20 ቁምፊዎች" name="password" required type="password"> 
                                </div>
												
                                 </div>
												
                                <div class="col-sm-12 col-md-12">
												
                                <div class="form-group"> 
                                <label>አዲሱን የይለፍ ቃል ያረጋግጡ</label>
                                <input class="form-control" placeholder="ከ8 እስከ 20 ቁምፊዎች" name="confirmpassword" required type="password"> 
                                </div>
												
                                </div>
								<?php
								$_SESSION['resetmail'] = $row['email'];
								?>
								<?php
								
 
	                            }
								}

					  
	                            }catch(PDOException $e)
                                {
           
                                }
	
	
                                ?>
												
</div>

</div>
<?php
if (isset($invalid_token)) {
	
}else{
print '
<div class="modal-footer text-center">
<button type="submit" onclick="return val();"  class="btn btn-primary">የይለፍ ቃሌን ዳግም አቀይር</button>
</div>';	
}

?>

										
</div>
</form>
									
								</div>
							
							</div>
							
						</div>
						
					</div>
					
				</div>
			
			</div>
			<footer class="footer-wrapper">
			
				<div class="main-footer">
				
					<div class="container">
					
						<div class="row">
						
							<div class="col-sm-12 col-md-9">
							
								<div class="row">
								
									<div class="col-sm-6 col-md-4">
									
										<div class="footer-about-us">
											<h5 class="footer-title">ስለ ናይቲንጌል ስራዎች</h5>
											<p>ናይቲንጌል ስራዎች የስራ ድህረገፅ ነው፣ የኦንላይን የስራ አስተዳደር ሲስተም፣ በናታኒዬል ንክሩማ በፌብሩወሪ 2018 ለፕሮጀክቱ የተገነባ ነው።</p>
										
										</div>

									</div>
									
									<div class="col-sm-6 col-md-5 mt-30-xs">
										<h5 class="footer-title">ፈጣን አገናኞች</h5>
										<ul class="footer-menu clearfix">
											<li><a href="./">መነሻ</a></li>
											<li><a href="job-list.php">የስራ ዝርዝር</a></li>
											<li><a href="employers.php">ስራ አስገባቢዎች</a></li>
											<li><a href="employees.php">ሰራተኞች</a></li>
											<li><a href="contact.php">አግኙን</a></li>
											<li><a href="#">ከፍ ወደ ላይ ሂዱ</a></li>

										</ul>
									
									</div>

								</div>

							</div>
							
							<div class="col-sm-12 col-md-3 mt-30-sm">
							
								<h5 class="footer-title">ናይቲንጌል ስራዎች አግኙን</h5>
								
								<p>አድራሻ : ታኮራዲ፣ ትምህርት መድረክ ፒ.ኦ.ቦክስ AX40</p>
								<p>ኢሜይል : <a href="mailto:nightingale.nath2@gmail.com">nightingale.nath2@gmail.com</a></p>
								<p>ስልክ : <a href="tel:+233546607474">+233 546 607 474</a></p>
								

							</div>

							
						</div>
						
					</div>
					
				</div>
				
				<div class="bottom-footer">
				
					<div class="container">
					
						<div class="row">
						
							<div class="col-sm-4 col-md-4">
					
								<p class="copy-right">&#169; የቅጂ መብት <?php echo date('Y'); ?> ናይቲንጌል ቪዥን ሶፍትዌር</p>
								
							</div>
							
							<div class="col-sm-4 col-md-4">
							
								<ul class="bottom-footer-menu">
									<li><a >በናታኒዬል ንክሩማ የተሰራ</a></li>
								</ul>
							
							</div>
							
							<div class="col-sm-4 col-md-4">
								<ul class="bottom-footer-menu for-social">
									<li><a href="<?php echo "$tw"; ?>"><i class="ri ri-twitter" data-toggle="tooltip" data-placement="top" title="ትዊተር"></i></a></li>
									<li><a href="<?php echo "$fb"; ?>"><i class="ri ri-facebook" data-toggle="tooltip" data-placement="top" title="ፌስቡክ"></i></a></li>
									<li><a href="<?php echo "$ig"; ?>"><i class="ri ri-instagram" data-toggle="tooltip" data-placement="top" title="ኢንስታግራም"></i></a></li>
								</ul>
							</div>
						
						</div>

					</div>
					
				</div>
			
			</footer>
			
		</div>


	</div> 


<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>

<script type="text/javascript">
function val(){
if(frm.password.value == "")
{
	alert("የይለፍ ቃል ያስገቡ።");
	frm.password.focus(); 
	return false;
}
if((frm.password.value).length < 8)
{
	alert("የይለፍ ቃሉ ቢያንስ 8 ቁምፊዎች መሆን አለበት።");
	frm.password.focus();
	return false;
}

if((frm.password.value).length > 20)
{
	alert("የይለፍ ቃሉ ከ20 ቁምፊዎች በላይ መሆን አይችልም።");
	frm.password.focus();
	return false;
}

if(frm.confirmpassword.value == "")
{
	alert("የይለፍ ቃሉን ማረጋገጫ ያስገቡ።");
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


</body>

</html>