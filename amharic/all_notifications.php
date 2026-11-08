<?php 
require 'constants/settings.php'; 
require 'constants/check-login.php';
if ($user_online == "true") {
} else {
  header("location:../");
}

include "admin/DB_connection.php";
include "admin/app/Model/Task.php";
include "admin/app/Model/User.php";

$text = "ሁሉም እንቅስቃሴዎች";
if (isset($_GET['due_date']) && $_GET['due_date'] == "Due Today") {
  $text = "ዛሬ የተጻፈ";
  $tasks = get_all_tasks_due_today($conn);
  $num_task = count_tasks_due_today($conn);
} else {
  $tasks = get_all_tasks($conn);
  $num_task = count_tasks($conn);
}
$users = get_all_users($conn);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ኢትዮ ሎካል ስራዎች - ማሳወቂያዎች</title>
  <meta name="description" content="Online Job Management / Job Portal" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Nightingale Jobs" />
    <meta property="og:description" content="Online Job Management / Job Portal" />

	<link rel="apple-touch-icon" sizes="180x180" href="images/ico/favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/ico/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/ico/favicon_io/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
	
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
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="admin/css/style.css">
</head>
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
            <a href="./"><img src="images/ico/1.png" style="width:80%;height:50%;" alt="ምልክት" /></a>
          </div>
        </div>
        <div id="navbar" class="navbar-nav-wrapper navbar-arrow">
          <ul class="nav navbar-nav" id="responsive-menu">
            <li><a href="employers.php">ሰራተኛ ፈላጊዎች</a></li>
            <li><a href="employees.php">ሰራተኞች</a></li>
            <li><a href="contact.php">አግኙን</a></li>
          </ul>
        </div>
        <div class="nav-mini-wrapper">
          <ul class="nav-mini sign-in">
            <?php
            if ($user_online == true) {
              print '<li><a href="logout.php">ውጣ</a></li><li><a href="' . $myrole . '">መገለጫ</a></li>';
            } else {
              print '<li><a href="login.php">ግባ</a></li><li><a data-toggle="modal" href="#registerModal">ይመዝገቡ</a></li>';
            }
            ?>
          </ul>
        </div>
      </div>
      <div id="slicknav-mobile"></div>
    </nav>
  </header>

  <div class="breadcrumb-wrapper">
    <div class="container">
      <ol class="breadcrumb-list">
        <li><a href="./">መነሻ</a></li>
        <li><span>ማሳወቂያዎች</span></li>
      </ol>
    </div>
  </div>

  <div class="body">
    <section class="section-1">
      <h4 class="title-2">
        <center>
          <a href="all_notifications.php?due_date=Due Today">ዛሬ የተጻፈ</a>
          <a href="all_notifications.php">ሁሉም እንቅስቃሴዎች</a>
        </center>
      </h4>
      <h4 class="title-2"><?= $text ?> (<?= $num_task ?>)</h4>
      <?php if (isset($_GET['success'])) { ?>
        <div class="success" role="alert">
          <?= stripcslashes($_GET['success']); ?>
        </div>
      <?php } ?>
      <?php if ($tasks != 0) { ?>
        <table class="main-table" border="2%">
          <tr style="background-color:#337ab7; color:white;">
            <th>#</th>
            <th>ርዕስ</th>
            <th>መልእክት</th>
            <th>የተጻፈበት ቀን</th>
            <th>ሁኔታ</th>
            <th width="20%">ተግባር</th>
          </tr>
          <?php $i=0; foreach ($tasks as $task) { ?>
            <tr>
              <td><?= ++$i ?></td>
              <td><?= $task['title'] ?></td>
              <td><?= $task['description'] ?></td>
              <td><?= $task['due_date'] == "" ? "መያዣ ቀን የለም" : $task['due_date'] ?></td>
              <td><?= $task['status'] ?></td>
              <td><a href="#" class="btn success">እንደተነበበ ምልከት</a></td>
            </tr>
          <?php } ?>
        </table>
      <?php } else { ?>
        <h3>ምንም የለም</h3>
      <?php } ?>
    </section>
  </div>

  <div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title text-center">ነፃ መለያ ይፍጠሩ</h4>
    </div>
    <div class="modal-body">
      <div class="row gap-20">
        <div class="col-sm-6 col-md-6">
          <a href="register.php?p=Employer" class="btn btn-facebook btn-block mb-5-xs">እንደ ሰራተኛ ፈላጊ ይመዝገቡ</a>
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

  <?php include 'footer.php'; ?>
</div>
<script>
  var active = document.querySelector("#navList li:nth-child(4)");
  if (active) active.classList.add("active");
</script>
</body>
</html>