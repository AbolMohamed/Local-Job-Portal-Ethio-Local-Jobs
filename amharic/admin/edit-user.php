<?php 
require '../constants/settings.php'; 
require '../constants/check-login.php';
if ($user_online == "true") {
}else{
header("location:../");	
}
    include "DB_connection.php";
    include "app/Model/User.php";
    
    if (!isset($_GET['id'])) {
    	 header("Location: user.php");
    	 exit();
    }
    $id = $_GET['id'];
    $user = get_user_by_id($conn, $id);

    if ($user == 0) {
    	 header("Location: user.php");
    	 exit();
    }

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ተጠቃሚን አስተካክል</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<input type="checkbox" id="checkbox">
	<?php include "inc/header.php" ?>
	<div class="body">
		<?php include "inc/nav.php" ?>
		<section class="section-1">
			<h4 class="title">ተጠቃሚዎችን አስተካክል <a href="user.php">ተመለስ</a></h4>
			<form class="form-1"
			      method="POST"
			      action="app/update-user.php">
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
					<input type="text" name="first_name" class="input-1" placeholder="ሙሉ ስም" value="<?=$user['first_name']?>"><br>
				</div>
				<div class="input-holder">
					<lable>የተጠቃሚ ስም</lable>
					<input type="text" name="email" value="<?=$user['email']?>" class="input-1" placeholder="የተጠቃሚ ስም"><br>
				</div>
				<div class="input-holder">
					<lable>የይለፍ ቃል</lable>
					<input type="text" value="**********" name="password" class="input-1" placeholder="የይለፍ ቃል"><br>
				</div>
				<div class="input-holder">
					<lable>ሁኔታ</lable>
					<input type="text" value="<?=$user['status']?>" name="status" class="input-1"><br>
				</div>
				<input type="text" name="id" value="<?=$user['id']?>" hidden>

				<button class="edit-btn">አዘምን</button>
			</form>
			
		</section>
	</div>

<script type="text/javascript">
	var active = document.querySelector("#navList li:nth-child(2)");
	active.classList.add("active");
</script>
</body>
</html>