<nav class="side-bar" style="background-color: #ffffff; color: #333333;">
			
			<?php 

               if($_SESSION['role'] == "employee" || ['role'] == "employer"){
			 ?>
			 <!-- Employee Navigation Bar -->
			<ul id="navList">
				<li>
					<a href="index.php" style="color: #333333;">
						<i class="fa fa-tachometer" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="my_task.php" style="color: #333333;">
						<i class="fa fa-tasks" aria-hidden="true"></i>
						<span>My Task</span>
					</a>
				</li>
				<li>
					<a href="profile.php" style="color: #333333;">
						<i class="fa fa-user" aria-hidden="true"></i>
						<span>Profile</span>
					</a>
				</li>
				<li>
					<a href="notifications.php" style="color: #333333;">
						<i class="fa fa-bell" aria-hidden="true"></i>
						<span>Notifications</span>
					</a>
				</li>
				<li>
					<a href="logout.php" style="color: #333333;">
						<i class="fa fa-sign-out" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
		<?php }else { ?>
			<!-- Admin Navigation Bar -->
            <ul id="navList">
				<li>
					<a href="index.php" style="color: #333333;">
						<i class="fa fa-tachometer" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="user.php" style="color: #333333;">
						<i class="fa fa-users" aria-hidden="true"></i>
						<span>Manage Users</span>
					</a>
				</li>
				<li>
					<a href="create_task.php" style="color: #333333;">
						<i class="fa fa-plus" aria-hidden="true"></i>
						<span>Notify to Users</span>
					</a>
				</li>
				<li>
					<a href="tasks.php" style="color: #333333;">
						<i class="fa fa-bell" aria-hidden="true"></i>
						<span>All Notifications</span>
					</a>
				</li>
				<li>
					<a href="#" class="nav-link" style="color: #333333; text-decoration: none;">
                      <i class="fa fa-envelope" aria-hidden="true" style="margin-right: 8px;"></i>
                       <span class="nav-text">All Reports</span>
                     </a>
				</li>
				<li>
					<a href="logout.php" style="color: #333333;">
						<i class="fa fa-sign-out" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
		<?php } ?>
		</nav>