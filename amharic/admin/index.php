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

	if ($myrole == "admin") {
		  $todaydue_task = count_tasks_due_today($conn);
	     $overdue_task = count_tasks_overdue($conn);
	     $nodeadline_task = count_tasks_NoDeadline($conn);
	     $num_task = count_tasks($conn);
	     $num_users = count_users($conn);
	     $pending = count_pending_tasks($conn);
	     $in_progress = count_in_progress_tasks($conn);
	     $completed = count_completed_tasks($conn);
	}else {
        $num_my_task = count_my_tasks($conn, $_SESSION['id']);
        $overdue_task = count_my_tasks_overdue($conn, $_SESSION['id']);
        $nodeadline_task = count_my_tasks_NoDeadline($conn, $_SESSION['id']);
        $pending = count_my_pending_tasks($conn, $_SESSION['id']);
	     $in_progress = count_my_in_progress_tasks($conn, $_SESSION['id']);
	     $completed = count_my_completed_tasks($conn, $_SESSION['id']);

	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ዳሽቦርድ</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<input type="checkbox" id="checkbox">
	<?php include "inc/header.php" ?>
	<div class="body" >
		<?php include "inc/nav.php" ?>
		<section class="section-1" >
			<?php if ($_SESSION['role'] == "admin") { ?>
				<div class="dashboard" >
					<div class="dashboard-item" style="background-color: #028fc3; color: #333333;">
						<i class="fa fa-users"></i>
						<span><?=$num_users?> ተጠቃሚዎች</span>
					</div>
					<div class="dashboard-item" style="background-color: #028fc3; color: #333333;">
						<i class="fa fa-bell"></i>
						<span><?=$num_task?> ሁሉም የተጠበቁ ማስታወቂያዎች</span>
					</div>
					<div class="dashboard-item" style="background-color: #028fc3; color: #333333;">
						<i class="fa fa-envelope"></i>
						<span><?=$overdue_task?> ሁሉም ሪፖርቶች</span>
					</div>
				</div>
			<?php }else{ ?>
				<div class="dashboard">
					<div class="dashboard-item">
						<i class="fa fa-tasks"></i>
						<span><?=$num_my_task?> የኔ ተግባራት</span>
					</div>
					<div class="dashboard-item">
						<i class="fa fa-window-close-o"></i>
						<span><?=$overdue_task?> የጊዜውን ያልያዙ</span>
					</div>
					<div class="dashboard-item">
						<i class="fa fa-clock-o"></i>
						<span><?=$nodeadline_task?> የድረሰኝ ጊዜ የለም</span>
					</div>
					<div class="dashboard-item">
						<i class="fa fa-square-o"></i>
						<span><?=$pending?> በመጠባበቅ ላይ</span>
					</div>
					<div class="dashboard-item">
						<i class="fa fa-spinner"></i>
						<span><?=$in_progress?> በሂደት ላይ</span>
					</div>
					<div class="dashboard-item">
						<i class="fa fa-check-square-o"></i>
						<span><?=$completed?> ተጠናቋል</span>
					</div>
				</div>
			<?php } ?>
		</section>
	</div>

<script type="text/javascript">
	var active = document.querySelector("#navList li:nth-child(1)");
	active.classList.add("active");
</script>
</body>
</html>