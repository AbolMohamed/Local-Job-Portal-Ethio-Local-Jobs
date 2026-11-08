<?php 
require '../constants/settings.php'; 
require '../constants/check-login.php';
if ($user_online == "true") {
}else{
header("location:../");	
}
    include "DB_connection.php";
    include "app/Model/User.php";

    $users = get_all_users($conn);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ለተጠቃሚ ያሳውቁ</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<input type="checkbox" id="checkbox">
	<?php include "inc/header.php" ?>
	<div class="body">
		<?php include "inc/nav.php" ?>
		<section class="section-1">
			<h4 class="title">ማስታወቂያ ይፍጠሩ</h4>
		   <form class="form-1"
			      method="POST"
			      action="app/add-task.php">
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
					<lable>ርዕስ</lable>
					<input type="text" name="title" class="input-1" placeholder="ርዕስ"><br>
				</div>
				<div class="input-holder">
					<lable>መግለጫ</lable>
					<textarea type="text" name="description" class="input-1" placeholder="መግለጫ"></textarea><br>
				</div>
				<div class="input-holder">
					<lable>የተጻፈበት ቀን</lable>
					<input type="date" name="due_date" class="input-1" placeholder="ቀን"><br>
				</div>
				<div class="input-holder">
					<lable>ለ</lable>
					<select name="assigned_to" class="input-1">
						<option value="0">ተጠቃሚ ይምረጡ</option>
						<?php if ($users !=0) { 
							foreach ($users as $user) {
						?>
                  <option value="<?=$user['id']?>"><?=$user['first_name']?></option>
						<?php } } ?>
					</select><br>
				</div>
				<button class="edit-btn">ማስታወቂያ ላክ</button>
			</form>
			
		</section>
	</div>

<script type="text/javascript">
	var active = document.querySelector("#navList li:nth-child(3)");
	active.classList.add("active");
</script>
</body>
</html>