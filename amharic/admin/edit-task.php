<?php 
require '../constants/settings.php'; 
require '../constants/check-login.php';
if ($user_online == "true") {
}else{
header("location:../");	
}
    include "DB_connection.php";
    include "app/Model/Task.php";
    include "app/Model/User.php";
    
    if (!isset($_GET['id'])) {
    	 header("Location: tasks.php");
    	 exit();
    }
    $id = $_GET['id'];
    $task = get_task_by_id($conn, $id);

    if ($task == 0) {
    	 header("Location: tasks.php");
    	 exit();
    }
   $users = get_all_users($conn);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ማስታወቂያ አርትዕ</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<input type="checkbox" id="checkbox">
	<?php include "inc/header.php" ?>
	<div class="body">
		<?php include "inc/nav.php" ?>
		<section class="section-1">
			<h4 class="title">ማስታወቂያ አርትዕ <a href="tasks.php">ተመለስ</a></h4>
			<form class="form-1"
			      method="POST"
			      action="app/update-task.php">
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
					<input type="text" name="title" class="input-1" placeholder="ሙሉ ስም" value="<?=$task['title']?>"><br>
				</div>
				<div class="input-holder">
					<lable>መግለጫ</lable>
					<textarea name="description" rows="5" class="input-1" ><?=$task['description']?></textarea><br>
				</div>
				<div class="input-holder">
					<lable>
					የተጻፈበት ቀን</lable>
					<input type="date" name="due_date" class="input-1" placeholder="ማቆሚያ" value="<?=$task['due_date']?>"><br>
				</div>
				
            <div class="input-holder">
					<lable>ላክ ወደ</lable>
					<select name="assigned_to" class="input-1">
						<option value="0">ተጠቃሚ ይምረጡ</option>
						<?php if ($users !=0) { 
							foreach ($users as $user) {
								if ($task['assigned_to'] == $user['id']) { ?>
									<option selected value="<?=$user['id']?>"><?=$user['first_name']?></option>
						<?php }else{ ?>
                  <option value="<?=$user['id']?>"><?=$user['first_name']?></option>
						<?php } } } ?>
					</select><br>
				</div>
				<input type="text" name="id" value="<?=$task['id']?>" hidden>

				<button class="edit-btn">አዘምን</button>
			</form>
			
		</section>
	</div>

<script type="text/javascript">
	var active = document.querySelector("#navList li:nth-child(4)");
	active.classList.add("active");
</script>
</body>
</html>