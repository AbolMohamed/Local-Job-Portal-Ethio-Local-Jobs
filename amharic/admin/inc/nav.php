<nav class="side-bar" style="background-color: #ffffff; color: #333333;">
			
<?php 

   if($_SESSION['role'] == "employee" || $_SESSION['role'] == "employer"){
 ?>
 <!-- Employee/Employer Navigation Bar -->
<ul id="navList">
	<li>
		<a href="index.php" style="color: #333333;">
			<i class="fa fa-tachometer" aria-hidden="true"></i>
			<span>ዳሽቦርድ</span>
		</a>
	</li>
	<li>
		<a href="my_task.php" style="color: #333333;">
			<i class="fa fa-tasks" aria-hidden="true"></i>
			<span>ተግባራቶቼ</span>
		</a>
	</li>
	<li>
		<a href="profile.php" style="color: #333333;">
			<i class="fa fa-user" aria-hidden="true"></i>
			<span>መገለጫ</span>
		</a>
	</li>
	<li>
		<a href="notifications.php" style="color: #333333;">
			<i class="fa fa-bell" aria-hidden="true"></i>
			<span>ማስታወቂያዎች</span>
		</a>
	</li>
	<li>
		<a href="logout.php" style="color: #333333;">
			<i class="fa fa-sign-out" aria-hidden="true"></i>
			<span>ውጣ</span>
		</a>
	</li>
</ul>
<?php }else { ?>
<!-- Admin Navigation Bar -->
<ul id="navList">
	<li>
		<a href="index.php" style="color: #333333;">
			<i class="fa fa-tachometer" aria-hidden="true"></i>
			<span>ዳሽቦርድ</span>
		</a>
	</li>
	<li>
		<a href="user.php" style="color: #333333;">
			<i class="fa fa-users" aria-hidden="true"></i>
			<span>ተጠቃሚዎችን አስተዳድር</span>
		</a>
	</li>
	<li>
		<a href="create_task.php" style="color: #333333;">
			<i class="fa fa-plus" aria-hidden="true"></i>
			<span>ለተጠቃሚዎች ማስታወቂያ ላክ</span>
		</a>
	</li>
	<li>
		<a href="tasks.php" style="color: #333333;">
			<i class="fa fa-bell" aria-hidden="true"></i>
			<span>ሁሉም ማስታወቂያዎች</span>
		</a>
	</li>
	<li>
		<a href="#" class="nav-link" style="color: #333333; text-decoration: none;">
		  <i class="fa fa-envelope" aria-hidden="true" style="margin-right: 8px;"></i>
		   <span class="nav-text">ሁሉም ሪፖርቶች</span>
		 </a>
	</li>
	<li>
		<a href="logout.php" style="color: #333333;">
			<i class="fa fa-sign-out" aria-hidden="true"></i>
			<span>ውጣ</span>
		</a>
	</li>
</ul>
<?php } ?>
</nav>