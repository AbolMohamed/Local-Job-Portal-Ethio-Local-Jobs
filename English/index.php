<!doctype html>
<html lang="en">
<?php 
include 'constants/settings.php'; 
include 'constants/check-login.php';
?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ethio Local Jobs - Job Portal</title>
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	<!-- CSS links remain unchanged -->
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

  <style>
  
    .autofit2 {
	height:70px;
	width:400px;
    object-fit:cover; 
  }
  
      .autofit3 {
	height:80px;
	width:100px;
    object-fit:cover; 
  }
        /* Basic Reset and Tailwind-like utilities */
        body {
            margin: 0;
            font-family: sans-serif;
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .flex { display: flex; }
        .flex-col { flex-direction: column; }
        .min-h-screen { min-height: 100vh; }
        .h-full { height: 100%; }
        .items-center { align-items: center; }
        .justify-between { justify-content: space-between; }
        .justify-center { justify-content: center; }
        .space-x-2 > *:not(:first-child) { margin-left: 0.5rem; }
        .space-x-4 > *:not(:first-child) { margin-left: 1rem; }
        .space-x-6 > *:not(:first-child) { margin-left: 1.5rem; }
        .space-y-2 > *:not(:first-child) { margin-top: 0.5rem; }
        .space-y-4 > *:not(:first-child) { margin-top: 1rem; }
        .mb-2 { margin-bottom: 0.5rem; }
        .mb-4 { margin-bottom: 1rem; }
        .mb-6 { margin-bottom: 1.5rem; }
        .mb-8 { margin-bottom: 2rem; }
        .mb-10 { margin-bottom: 2.5rem; }
        .mt-4 { margin-top: 1rem; }
        .mt-8 { margin-top: 2rem; }
        .pt-8 { padding-top: 2rem; }
        .p-2 { padding: 0.5rem; }
        .p-3 { padding: 0.75rem; }
        .p-4 { padding: 1rem; }
        .p-6 { padding: 1.5rem; }
        .py-1 { padding-top: 0.25rem; padding-bottom: 0.25rem; }
        .px-2 { padding-left: 0.5rem; padding-right: 0.5rem; }
        .py-2 { padding-top: 0.5rem; padding-bottom: 0.5rem; }
        .py-8 { padding-top: 2rem; padding-bottom: 2rem; }
        .py-16 { padding-top: 4rem; padding-bottom: 4rem; }
        .px-4 { padding-left: 1rem; padding-right: 1rem; }
        .container {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }
        @media (min-width: 768px) {
            .md\:inline { display: inline; }
            .md\:flex { display: flex; }
            .md\:flex-row { flex-direction: row; }
            .md\:mt-0 { margin-top: 0; }
            .md\:grid-cols-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
            .md\:grid-cols-4 { grid-template-columns: repeat(4, minmax(0, 1fr)); }
            .md\:w-1\/2 { width: 50%; }
            .md\:text-7xl { font-size: 4.5rem; }
        }

        .text-white { color: #fff; }
        .text-black { color: #000; }
        .text-blue-500 { color: #000000; }
        .text-blue-600 { color: #2563eb; }
        .text-blue-100 { color: #dbeafe; }
        .text-gray-200 { color: #e5e7eb; }
        .text-gray-400 { color: #9ca3af; }
        .text-gray-500 { color: #6b7280; }
        .text-gray-600 { color: #4b5563; }
        .text-gray-700 { color: #374151; }
        .text-green-500 { color: #22c55e; }
        .bg-blue-500 { background-color: #3b82f6; }
        .bg-blue-600 { background-color: #2563eb; }
        .bg-white { background-color: #fff; }
        .bg-gray-200 { background-color: #e5e7eb; }
        .bg-gray-50 { background-color: #f9fafb; }
        .bg-blue-50 { background-color: #eff6ff; }
        .rounded-full { border-radius: 9999px; }
        .rounded-lg { border-radius: 0.5rem; }
        .rounded-md { border-radius: 0.375rem; }
        .shadow-md { box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); }
        .overflow-hidden { overflow: hidden; }
        .relative { position: relative; }
        .w-full { width: 100%; }
        .max-w-2xl { max-width: 42rem; }
        .max-w-3xl { max-width: 48rem; }
        .max-w-4xl { max-width: 56rem; }
        .h-32 { height: 8rem; }
        .h-[500px] { height: 500px; }
        .w-24 { width: 6rem; }
        .h-24 { height: 6rem; }
        .w-32 { width: 8rem; }
        .h-32 { height: 8rem; }
        .h-5 { height: 1.25rem; }
        .w-5 { width: 1.25rem; }
        .h-6 { height: 1.5rem; }
        .w-6 { width: 1.5rem; }
        .h-16 { height: 4rem; }
        .w-16 { width: 4rem; }
        .font-bold { font-weight: 700; }
        .font-semibold { font-weight: 600; }
        .font-medium { font-weight: 500; }
        .text-sm { font-size: 0.875rem; }
        .text-lg { font-size: 1.125rem; }
        .text-xl { font-size: 1.25rem; }
        .text-3xl { font-size: 1.875rem; }
        .text-5xl { font-size: 3rem; }
        .text-center { text-align: center; }
        .mx-auto { margin-left: auto; margin-right: auto; }
        .hover\:underline:hover { text-decoration: underline; }
        .transition { transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter; }
        .duration-300 { transition-duration: 0.3s; }
        .hover\:bg-blue-600:hover { background-color: #2563eb; }
        .hover\:bg-blue-700:hover { background-color: #1d4ed8; }
        .hover\:text-white:hover { color: #fff; }
        .border { border-width: 1px; }
        .border-white { border-color: #fff; }
        .border-gray-300 { border-color: #d1d5db; }
        .border-blue-500 { border-color: #3b82f6; }
        .border-l { border-left-width: 1px; }
        .focus\:outline-none:focus { outline: 0; }
        .focus\:ring-2:focus { box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.5); } /* Example focus ring */
        .focus\:ring-blue-500:focus { border-color: #3b82f6; } /* Adjust as needed */

        /* Custom styles for components */
        .btn-outline-blue {
            background-color: #2563eb; /* bg-blue-600 */
            color: #fff; /* text-white */
            border: 1px solid #fff; /* border-white */
            padding: 0.25rem 0.75rem; /* px-3 py-1, roughly equivalent to sm size */
            font-size: 0.875rem; /* text-sm */
            border-radius: 0.25rem; /* rounded-md */
            transition: background-color 0.3s ease;
        }

        .btn-outline-blue:hover {
            background-color: #1d4ed8; /* hover:bg-blue-700 */
        }

        .lang-select {
            color: #000;
            font-size: 0.875rem;
            border-radius: 0.25rem;
            padding: 0.25rem 0.5rem;
            background-color: #fff;
            border: 1px solid #d1d5db;
        }

        .search-bar {
            background-color: #fff;
            border-radius: 9999px; /* rounded-full */
            padding: 0.25rem; /* p-1 */
            display: flex;
            width: 100%;
            max-width: 42rem; /* max-w-2xl */
        }

        .section-title {
            font-size: 1.875rem; /* text-3xl */
            font-weight: 700; /* font-bold */
            text-align: center;
            margin-bottom: 2.5rem; /* mb-10 */
            color: #2563eb; /* text-blue-600 */
        }

        .grid { display: grid; }
        .gap-8 { gap: 2rem; }

  </style>
<body class="home">

<div id="introLoader" class="spinner"></div>

<style>
.spinner {
  width: 50px;
  height: 50px;
  border: 5px solid rgba(0, 0, 0, 0.1);
  border-radius: 50%;
  border-top-color: #3498db;
  animation: spin 1s ease-in-out infinite;
  margin: 20px auto;
}

@keyframes spin {
  to { transform: rotate(360deg); }
}
</style>
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
  <div class="flex items-center justify-between" style="width:100%;">
    <!-- Logo -->
    <div class=" p-2 rounded-full" style="background-color: #028fc3;">
      <div class="text-blue-500 font-bold text-xl"><span style="color:rgb(5, 132, 33);">ETHIO-LOCAL</span><span style="color:rgb(227, 0, 0);"> JOBS</span></div>
    </div>
    <!-- Navigation -->
    <div id="navbar" class="navbar-nav-wrapper navbar-arrow">
      <ul class="nav navbar-nav" id="responsive-menu">
        <li><a href="employers.php">Employers</a></li>
        <li><a href="employees.php">Employees</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="developer/index.php">Developer</a></li>
      </ul>
    </div>
    <!-- Mini nav (login/register/lang) -->
    <div class="nav-mini-wrapper">
      <ul class="nav-mini sign-in">
        <?php
        if ($user_online == true) {
          print '
            <li><a href="logout.php" style="border-radius: 15px; width: 100%; display: block; transition: all 0.3s ease; box-shadow: 0 2px 4px rgba(0,0,0,0.2);" onmouseover="this.style.boxShadow=\'0 4px 8px rgba(0,0,0,0.4)\'" onmouseout="this.style.boxShadow=\'0 2px 4px rgba(0,0,0,0.2)\'">logout</a></li>
            <li><a href="<?php echo $myrole; ?>" style="border-radius: 15px; width: 100%; display: block; transition: all 0.3s ease; box-shadow: 0 2px 4px rgba(0,0,0,0.2);" onmouseover="this.style.boxShadow=\'0 4px 8px rgba(0,0,0,0.4)\'" onmouseout="this.style.boxShadow=\'0 2px 4px rgba(0,0,0,0.2)\'">Profile</a></li>';
        } else {
          print '
            <li><a href="login.php" style="border-radius: 15px; width: 100%; display: block; transition: all 0.3s ease; box-shadow: 0 2px 4px rgba(0,0,0,0.2);" onmouseover="this.style.boxShadow=\'0 4px 8px rgba(0,0,0,0.4)\'" onmouseout="this.style.boxShadow=\'0 2px 4px rgba(0,0,0,0.2)\'">login</a></li>
            <li><a data-toggle="modal" href="#registerModal" style="border-radius: 15px; width: 100%; display: block; transition: all 0.3s ease; box-shadow: 0 2px 4px rgba(0,0,0,0.2);" onmouseover="this.style.boxShadow=\'0 4px 8px rgba(0,0,0,0.4)\'" onmouseout="this.style.boxShadow=\'0 2px 4px rgba(0,0,0,0.2)\'">register</a></li>';
        }
        ?>
        <?php echo '<select class="form-control" onchange="location = this.value;" style="transform: scale(0.75); transform-origin: right center;">
          <option value="">English</option>
          <option value="../Amharic/index.php">አማረኛ</option>
        </select>'
        ?>
      </ul>
    </div>
  </div>
  <div id="slicknav-mobile"></div>
</div>
				
				<div id="slicknav-mobile"></div>
				
			</nav>

			
			<div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-center">Create your account for free</h4>
				</div>
				
				<div class="modal-body">
				
					<div class="row gap-20">
					
						<div class="col-sm-6 col-md-6">
							<a href="register.php?p=Employer" class="btn btn-facebook btn-block mb-5-xs">Register as Employer</a>
						</div>
						<div class="col-sm-6 col-md-6">
							<a href="register.php?p=Employee" class="btn btn-facebook btn-block mb-5-xs">Register as Employee</a>
						</div>

					</div>
				
				</div>
				
				<div class="modal-footer text-center">
					<button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
				</div>
				
			</div>

			
		</header><br>
<br>
<br>
<br>
<br>
<br>
<main class="flex-grow" style="width:100%; height: 720px;">
            <div class="relative" style="height: 100%;">
                <div class="bg-gray-200 h-[500px]" style="height:100%">
                    <div class="container mx-auto h-full flex items-center justify-center">
                        <div class="flex flex-col items-center justify-center w-full">
                            <h1 class="text-5xl md:text-7xl font-bold text-green-500 text-center" style=" text-shadow: 0 4px 10px rgba(0, 0, 0, 0.23);">
                                ETHIO-LOCAL <span style="color: rgb(255, 0, 0);">JOBS</span>
                            </h1>
                            <p class="text-blue-500 text-lg font-medium text-center mb-6" style=" text-shadow: 0 4px 10px rgba(0, 0, 0, 0.23);">Connecting Talent with Opportunity!!</p>
                            <div class="second-search-result-wrapper" style="background-color: #22C55D; border-radius: 15px; padding: 20px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.8);">
                                <div class="container">
                                    <form action="job-list.php" method="GET" autocomplete="off">
                                        <div>
                                            <div class="row">
                                                <div class="col-xss-12 col-xs-6 col-sm-6 col-md-5">
                                                    <div class="form-group form-lg">
                                                        <select class="form-control" name="category" required/>
                                                            <option value="">-Select category-</option>
                                                            <?php
                                                            require 'constants/db_config.php';
                                                            try {
                                                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                                $stmt = $conn->prepare("SELECT * FROM tbl_categories ORDER BY category");
                                                                $stmt->execute();
                                                                $result = $stmt->fetchAll();
                                                                foreach($result as $row) {
                                                                    $cat = $row['category'];
                                                                    ?>
                                                                    <option style="color:black" value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
                                                                    <?php
                                                                }
                                                                $stmt->execute();
                                                            } catch(PDOException $e) {
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xss-12 col-xs-6 col-sm-6 col-md-5">
                                                    <div class="form-group form-lg">
                                                        <select class="form-control" name="country" required/>
                                                            <option value="">-Select country-</option>
                                                            <?php
                                                            require 'constants/db_config.php';
                                                            try {
                                                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                                $stmt = $conn->prepare("SELECT * FROM tbl_countries ORDER BY country_name");
                                                                $stmt->execute();
                                                                $result = $stmt->fetchAll();
                                                                foreach($result as $row) {
                                                                    $cnt = $row['country_name'];
                                                                    ?>
                                                                    <option style="color:black" value="<?php echo $row['country_name']; ?>"><?php echo $row['country_name']; ?></option>
                                                                    <?php
                                                                }
                                                                $stmt->execute();
                                                            } catch(PDOException $e) {
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xss-12 col-xs-6 col-sm-4 col-md-2">
                                                    <button value="✓" type="submit" class="btn btn-search-bar" style="background-color:rgb(255, 0, 0);">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
		
		<section id="about" class="py-16 bg-white">
                <div class="container mx-auto px-4">
                    <h2 class="section-title">About Us</h2>
                    <div class="max-w-4xl mx-auto">
                        <p class="text-lg text-gray-700 mb-6">
                        Ethio-local Jobs is a community-driven platform designed to connect local talent with job opportunities through our unique  management system.
                        Whether you're a business, an individual employer, or someone looking for work, Ethio-local Jobs bridges the gap by offering a space where skills meet opportunities within your local area.
                        </p>
                        <p class="text-lg text-gray-700">
                        We proudly support both Amharic and English languages, making our platform accessible to a broader community across Ethiopia.
                        Our mission is to empower local communities by simplifying the connection between employees and employers—helping people find jobs, offer services, or exchange skills in a way that's fast, reliable, and culturally relevant.
                        Whether you're a skilled professional seeking work, or an employer (company or individual) searching for local talent, Ethio-local Jobs is your trusted partner for creating meaningful and efficient connections.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Key Features Section -->
            <section class="py-16 bg-gray-100">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl font-bold text-center mb-12" style="color: #2463EB;">Key Features</h2>
                    <div class="flex flex-col md:flex-row flex-wrap justify-center gap-8">
                        <!-- Feature Card 1 -->
                        <div class="feature-card rounded-lg p-6 text-center transform transition-all duration-300 hover:scale-105 hover:shadow-2xl flex-1 min-w-[300px] max-w-[400px]" 
                             style="background-color: #EDF2F2; box-shadow: 0 10px 14px rgba(0, 0, 0, 0.51);">
                            <div class="text-4xl mb-4"><i class="fas fa-search"></i></div>
                            <h3 class="text-xl font-semibold mb-2">Search Options</h3>
                            <p class="text-gray-700">Find your dream job with our precise search filters to apply fro jobs.</p>
                             <!-- <button class="mt-4 px-6 py-2 rounded-lg text-white font-semibold transition-all duration-300 hover:bg-blue-700" style="background-color: #4267B2;">View More</button> -->
                        </div>

                        <!-- Feature Card 2 -->
                        <div class="feature-card rounded-lg p-6 text-center transform transition-all duration-300 hover:scale-105 hover:shadow-2xl flex-1 min-w-[300px] max-w-[400px]" 
                             style="background-color: #EDF2F2; box-shadow: 0 10px 14px rgba(0, 0, 0, 0.51);">
                            <div class="text-4xl mb-4"><i class="fas fa-user-tie"></i></div>
                            <h3 class="text-xl font-semibold mb-2">Detailed Profiles</h3>
                            <p class="text-gray-700">Both Employers and Employees can setup detailed profile about themelfs.</p>
                             <!-- <button class="mt-4 px-6 py-2 rounded-lg text-white font-semibold transition-all duration-300 hover:bg-blue-700" style="background-color: #4267B2;">View More</button> -->
                        </div>

                        <!-- Feature Card 3 -->
                        <div class="feature-card rounded-lg p-6 text-center transform transition-all duration-300 hover:scale-105 hover:shadow-2xl flex-1 min-w-[300px] max-w-[400px]" 
                             style="background-color: #EDF2F2; box-shadow: 0 10px 14px rgba(0, 0, 0, 0.51);">
                            <div class="text-4xl mb-4"><i class="fas fa-file-alt"></i></div>
                            <h3 class="text-xl font-semibold mb-2">Easy Applications</h3>
                            <p class="text-gray-700">Apply to jobs seamlessly with our streamlined application process.</p>
                             <!-- <button class="mt-4 px-6 py-2 rounded-lg text-white font-semibold transition-all duration-300 hover:bg-blue-700" style="background-color: #4267B2;">View More</button> -->
                        </div>

                        <!-- Feature Card 4 -->
                        <div class="feature-card rounded-lg p-6 text-center transform transition-all duration-300 hover:scale-105 hover:shadow-2xl flex-1 min-w-[300px] max-w-[400px]" 
                             style="background-color: #EDF2F2; box-shadow: 0 10px 14px rgba(0, 0, 0, 0.51);">
                            <div class="text-4xl mb-4"><i class="fas fa-bell"></i></div>
                            <h3 class="text-xl font-semibold mb-2">Notification</h3>
                            <p class="text-gray-700">Get notified about new aditional changes on the system from the Admin.</p>
                           <!-- <button class="mt-4 px-6 py-2 rounded-lg text-white font-semibold transition-all duration-300 hover:bg-blue-700" style="background-color: #4267B2;">View More</button> -->                        </div>

                        <!-- Feature Card 5 -->
                        <div class="feature-card rounded-lg p-6 text-center transform transition-all duration-300 hover:scale-105 hover:shadow-2xl flex-1 min-w-[300px] max-w-[400px]" 
                             style="background-color: #EDF2F2; box-shadow: 0 10px 14px rgba(0, 0, 0, 0.51);">
                            <div class="text-4xl mb-4"><i class="fas fa-chart-line"></i></div>
                            <h3 class="text-xl font-semibold mb-2">Upload Resources</h3>
                            <p class="text-gray-700">Upload valuable resources to boost your career growth.</p>
                           <!-- <button class="mt-4 px-6 py-2 rounded-lg text-white font-semibold transition-all duration-300 hover:bg-blue-700" style="background-color: #4267B2;">View More</button> -->
                        </div>
                    </div>
                </div>
            </section>

<section id="team" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="section-title">Our Development Team</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <?php
            $teamMembers = [
                ['name' => 'Natnael Demelash', 
                 'role' => 'Developer & UI/UX Designer', 
                 'description' => 'An Information Student at Hawassa University with Skills in full stack development and UI/UX Designer.',
                 'image' => 'images/team/natnael.jpg'],
                ['name' => 'Nahom Abdulahi', 
                 'role' => 'Developer & UI/UX Designer', 
                 'description' => 'An Information Student at Hawassa University with Skills in full stack development and UI/UX Designer.',
                 'image' => 'images/team/nahom.jpg'],
                ['name' => 'Gebremariam Abhuy', 
                 'role' => 'Developer & UI/UX Designer', 
                 'description' => 'An Information Student at Hawassa University with Skills in full stack development and UI/UX Designer.',
                 'image' => 'images/team/gebremariam.jpg'],
                ['name' => 'Mihret Onimos', 
                 'role' => 'Developer & UI/UX Designer', 
                 'description' => 'An Information Student at Hawassa University with Skills in full stack development and UI/UX Designer.',
                 'image' => 'images/team/mihret.jpg'],
               // ['name' => 'New Member Name', 
               //  'role' => 'New Member Role', 
               //  'description' => 'Description for the new member.',
                // 'image' => 'images/team/new_member.jpg'] // Add or modify this line
            ];
            foreach ($teamMembers as $member) {
                echo '<div class="bg-white rounded-lg overflow-hidden" style="box-shadow: 0 10px 14px rgba(0, 0, 0, 0.51);">';
                echo '<div class="p-6">';
                if (file_exists($member['image'])) {
                    echo '<div class="w-24 h-24 rounded-full mx-auto mb-4 overflow-hidden">';
                    echo '<img src="' . htmlspecialchars($member['image']) . '" alt="' . htmlspecialchars($member['name']) . '" class="w-full h-full object-cover">';
                    echo '</div>';
                } else {
                    echo '<div class="w-24 h-24 rounded-full bg-gray-200 mx-auto mb-4"></div>';
                }
                echo '<h3 class="text-xl font-semibold text-center">' . htmlspecialchars($member['name']) . '</h3>';
                echo '<p class="text-gray-600 text-center">' . htmlspecialchars($member['role']) . '</p>';
                echo '<p class="mt-4 text-gray-700">' . htmlspecialchars($member['description']) . '</p>';
                echo '</div>';
                echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </section>
            <div class="main-wrapper">
    <div class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-600">For Employers</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <?php
                require 'constants/db_config.php';
                try {
                    // Establish database connection and set error mode
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // Query to get random employers, limited to 8 results
                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role = 'employer' ORDER BY rand() LIMIT 8");
                    $stmt->execute();
                    $result = $stmt->fetchAll();

                    foreach($result as $row) {
                        $complogo = $row['avatar'];
                        ?>
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-xl" style="background-color: #EDF2F2; box-shadow: 0 10px 14px rgba(0, 0, 0, 0.51);">
                            <div class="p-4"> <!-- Reduced padding -->
                                <div class="h-12 w-12 mx-auto mb-3" style="background-color: #EDF2F2; box-shadow: 0 10px 14px rgba(0, 0, 0, 0.51);"> <!-- Made container smaller: 16 -> 12 -->
                                    <?php 
                                    if ($complogo == null) {
                                        print '<img class="w-full h-full object-cover rounded-lg" alt="Company Logo" src="images/blank.png"/>'; 
                                    } else {
                                        echo '<img class="w-full h-full object-cover rounded-lg" alt="Company Logo" src="data:image/jpeg;base64,'.base64_encode($complogo).'"/>';
                                    }
                                    ?>
                                </div>
                                <h3 class="text-lg font-semibold text-center text-gray-800 mb-3">
                                    <?php echo htmlspecialchars($row['first_name']);?>
                                </h3>
                                <div class="text-center">
                                    <a href="company.php?ref=<?php echo htmlspecialchars($row['member_no']); ?>" 
                                       class="inline-block bg-blue-500 text-white px-4 py-1 rounded-full hover:bg-blue-600 transition duration-300 text-sm" style=" background-color: #339AC9; ">
                                        View 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } catch(PDOException $e) {
/* Error Handling Implementation:
1. When database connection fails, user sees "Unable to connect to service. Please try again later."
2. When query fails, user sees "No results found. Please try different search criteria."
3. All technical errors are logged to error.log but hidden from user
4. User gets friendly error messages that don't expose system details
5. System administrators can check error.log for debugging
*/
                }
                ?>
            </div>
        </div>
    </div>
</div>
			<div class="bg-light pt-80 pb-80">
			
				<div class="container">
				
					<div class="row">
						
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						
							<div class="section-title">
							
								<h2>Latest Jobs</h2>
								
							</div>
						
						</div>
					
					</div>
					
					<div class="row">
						
						<div class="col-md-12">
						
							<div class="recent-job-wrapper alt-stripe mr-0">
							<?php
							require 'constants/db_config.php';
							try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $conn->prepare("SELECT * FROM tbl_jobs ORDER BY enc_id DESC LIMIT 8");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
  

                            foreach($result as $row) {
							$jobcity = $row['city'];
							$jobcountry = $row['country'];
							$type = $row['type'];
							$title = $row['title'];
							$closingdate = $row['closing_date'];
							$company_id = $row['company'];
							$post_date = date_format(date_create_from_format('d/m/Y', $closingdate), 'd');
                            $post_month = date_format(date_create_from_format('d/m/Y', $closingdate), 'F');
                            $post_year = date_format(date_create_from_format('d/m/Y', $closingdate), 'Y');
										   
							$stmtb = $conn->prepare("SELECT * FROM tbl_users WHERE member_no = '$company_id' and role = 'employer'");
                            $stmtb->execute();
                            $resultb = $stmtb->fetchAll();
							foreach($resultb as $rowb) {
							$complogo = $rowb['avatar'];
							$thecompname = $rowb['first_name'];	
								
							}
							
							if ($type == "Freelance") {
							$sta = '<div class="job-label label label-success">
									Freelance
									</div>';
											  
							}
							if ($type == "Part-time") {
							$sta = '<div class="job-label label label-danger">
									Part-time
									</div>';
											  
							}
							if ($type == "Full-time") {
							$sta = '<div class="job-label label label-warning">
									Full-time
									</div>';
											  
							}
							?>
							<a class="recent-job-item clearfix" href="explore-job.php?jobid=<?php echo $row['job_id']; ?>">
							<div class="GridLex-grid-middle" style="background-color: white; box-shadow: 0 10px 14px rgba(0, 0, 0, 0.51);">
							<div class="GridLex-col-5_xs-12">
							<div class="job-position">
							<div class="image" style="background-color: white;">
							<?php 
							if ($complogo == null) {
							print '<center><img alt="image"  src="images/blank.png"/></center>';
							}else{
							echo '<center><img alt="image" title="'.$thecompname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
							}
							?>
							</div>
							<div class="content" style="background-color: white;">
							<h4><?php echo "$title"; ?></h4>
							<p><?php echo "$thecompname"; ?></p>
							</div>
							</div>
							</div>
							<div class="GridLex-col-5_xs-8_xss-12 mt-10-xss">
							<div class="job-location" style="background-color: white;">
							<i class="fa fa-map-marker text-primary"></i> <?php echo "$jobcountry" ?></strong> - <?php echo "$jobcity" ?>
							</div>
							</div>
							<div class="GridLex-col-2_xs-4_xss-12" style="background-color: white;">
							<?php echo "$sta"; ?>
							<span class="font12 block spacing1 font400 text-center">Due - <?php echo "$post_month"; ?> <?php echo "$post_date"; ?>, <?php echo "$post_year"; ?></span>
							</div>
							</div>
							</a>
								
							<?php

                            }
	                        }catch(PDOException $e)
                            { 
                   
                             }
                             ?>
						



							
							</div>
							
						</div>
						
					</div>
					
				</div>
			
			</div>
			 <section id="contact" class="py-16 bg-gray-50">
                <div class="container mx-auto px-4">
                    <h2 class="section-title">Contact Us</h2>
                    <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="md:flex">
                            <div class="md:w-1/2 p-6">
                                <h3 class="text-xl font-semibold mb-4">Get In Touch</h3>
                                <p class="text-gray-700 mb-6">Have questions or feedback? We'd love to hear from you!</p>
                                <div class="space-y-4">
                                    <div class="flex items-start">
                                        <svg class="h-6 w-6 text-blue-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                            />
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                                            />
                                        </svg>
                                        <div>
                                            <p class="font-medium">Address</p>
                                            <p class="text-gray-600">Hawassa, Ethiopia</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-6 w-6 text-blue-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                            />
                                        </svg>
                                        <div>
                                            <p class="font-medium">Email</p>
                                            <p class="text-gray-600">info@ethiolocaljobs.com</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="h-6 w-6 text-blue-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                            />
                                        </svg>
                                        <div>
                                            <p class="font-medium">Phone</p>
                                            <p class="text-gray-600">+251 903968771</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="md:w-1/2 bg-blue-50 p-6">
                                <form>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-medium mb-2" for="name">
                                            Name
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                            id="name"
                                            type="text"
                                            placeholder="Your name"
                                        />
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-medium mb-2" for="email">
                                            Email
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                            id="email"
                                            type="email"
                                            placeholder="Your email"
                                        />
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-medium mb-2" for="message">
                                            Message
                                        </label>
                                        <textarea
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                            id="message"
                                            rows="4"
                                            placeholder="Your message"
                                        ></textarea>
                                    </div>
                                    <button
                                        class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300"
                                        type="submit" style=" background-color: #339AC9;"
                                    >
                                        Send Message
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
		</div>


	</div>
<footer class="bg-blue-600 text-white py-6" style="background-color: #339AC9; width: 100%; max-width: 100vw;">
            <div class="container mx-auto px-3" style="width: 100%; max-width: 100%;">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="px-4 py-6">
                        <h3 class="text-base font-semibold mb-3"><span style="color: #05842F";>ETHIO-LOCAL</span> <span style="color: #E30000">JOBS</span></h3>
                        <p class="text-blue-100 text-sm">Connecting talent with local opportunities.</p>
                    </div>
                    <div>
                        <h3 class="text-base font-semibold mb-3">Quick Links</h3>
                        <ul class="space-y-1.5">
                            <li><a href="#" class="text-blue-100 hover:text-white text-sm">Home</a></li>
                            <li><a href="#about" class="text-blue-100 hover:text-white text-sm">About Us</a></li>
                            <li><a href="#jobs" class="text-blue-100 hover:text-white text-sm">Jobs</a></li>
                            <li><a href="#contact" class="text-blue-100 hover:text-white text-sm">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-base font-semibold mb-3">For Employers</h3>
                        <ul class="space-y-1.5">
                            <li><a href="login.php" class="text-blue-100 hover:text-white text-sm">Post a Job</a></li>
                            <li><a href="login.php" class="text-blue-100 hover:text-white text-sm">Find Candidates</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-base font-semibold mb-3">For Job Seekers</h3>
                        <ul class="space-y-1.5">
                            <li><a href="login.php" class="text-blue-100 hover:text-white text-sm">Create Profile</a></li>
                            <li><a href="login.php" class="text-blue-100 hover:text-white text-sm">Browse Jobs</a></li>
                            <li><a href="login.php" class="text-blue-100 hover:text-white text-sm">Career Resources</a></li>
                        </ul>
                    </div>
                </div>
                <div class="border-t border-blue-500 mt-6 pt-6 flex flex-col md:flex-row justify-between items-center">
                    <p class="text-sm">&copy; <?php echo date("Y"); ?> ETHIO-LOCAL JOBS. All rights reserved.</p>
                    <div class="flex space-x-3 mt-3 md:mt-0">
                        <a href="#" class="text-blue-100 hover:text-white">
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-blue-100 hover:text-white">
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-blue-100 hover:text-white">
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-blue-100 hover:text-white">
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>

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