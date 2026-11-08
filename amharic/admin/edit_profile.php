<?php 
require '../constants/settings.php'; 
require '../constants/check-login.php';
if ($user_online == "true") {
}else{
header("location:../");	
}
  
    include "DB_connection.php";
    include "app/Model/User.php";
    $user = get_user_by_id($conn, $_SESSION['id']);
    
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>መገለጫ አስተካክል</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<input type="checkbox" id="checkbox">
	<?php include "inc/header.php" ?>
	<div class="body">
		<?php include "inc/nav.php" ?>
		<section class="section-1">
			<h4 class="title">መገለጫ አስተካክል <a href="profile.php">መገለጫ</a></h4>
         <form class="form-1"
			      method="POST"
			      action="app/update-profile.php">
			      <?php if (isset($_GET['error'])) {?>
      	  	<div class="danger" role="alert">
			  <?php echo stripcslashes($_GET['error']); ?>
			</div>
      	  <?php } ?>

      	  <?php if (isset($_GET['success'])) {?>
      	  	<div class="success" role="alert">
			  <?php echo stripcslashes($_GET['success']); ?>
			</div>
      	  <?php } ?>
				<div class="input-holder">
					<lable>ሙሉ ስም</lable>
					<input type="text" name="full_name" class="input-1" placeholder="ሙሉ ስም" value="<?=$user['full_name']?>"><br>
				</div>

				<div class="input-holder">
					<lable>ያለፈው የይለፍ ቃል</lable>
					<input type="text" value="**********" name="password" class="input-1" placeholder="ያለፈው የይለፍ ቃል"><br>
				</div>
				<div class="input-holder">
					<lable>አዲስ የይለፍ ቃል</lable>
					<input type="text" name="new_password" class="input-1" placeholder="አዲስ የይለፍ ቃል"><br>
				</div>
				<div class="input-holder">
					<lable>የይለፍ ቃሉን ያረጋግጡ</lable>
					<input type="text" name="confirm_password" class="input-1" placeholder="የይለፍ ቃሉን ያረጋግጡ"><br>
				</div>

				<button class="edit-btn">ቀይር</button>
			</form>

		</section>
	</div>

<script type="text/javascript">
	var active = document.querySelector("#navList li:nth-child(3)");
	active.classList.add("active");
</script>
</body>
</html>
