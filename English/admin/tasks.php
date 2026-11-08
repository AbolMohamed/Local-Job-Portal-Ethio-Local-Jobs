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
    
    $text = "All Notification";
    if (isset($_GET['due_date']) &&  $_GET['due_date'] == "Due Today") {
    	$text = "Writen Today";
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
	<title>All Notification</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<input type="checkbox" id="checkbox">
	<?php include "inc/header.php" ?>
	<div class="body">
		<?php include "inc/nav.php" ?>
		<section class="section-1">
			<h4 class="title-2">
				<a href="create_task.php" class="btn">Create New</a>
				<a href="tasks.php?due_date=Due Today">Writen Today</a>
				<a href="tasks.php">All Notification</a>
 
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
					<th>#</th>
					<th>Title</th>
					<th>Description</th>
					<th>Sended To</th>
					<th>Writen Date</th>
					<th>Status</th>
					<th width="20%">Action</th>
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
	            <td><?php if($task['due_date'] == "") echo "No Deadline";
	                      else echo $task['due_date'];
	               ?></td>
	            <td><?=$task['status']?></td>
					<td>
						<a href="edit-task.php?id=<?=$task['id']?>" class="edit-btn">Edit</a>
						<a href="delete-task.php?id=<?=$task['id']?>" class="delete-btn">Delete</a>
					</td>
				</tr>
			   <?php	} ?>
			</table>
		<?php }else { ?>
			<h3>Empty</h3>
		<?php  }?>
			
		</section>
	</div>

<script type="text/javascript">
	var active = document.querySelector("#navList li:nth-child(4)");
	active.classList.add("active");
</script>
</body>
</html>
