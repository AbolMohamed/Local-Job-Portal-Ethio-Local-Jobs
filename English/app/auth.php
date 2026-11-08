<?php
// Set timezone
date_default_timezone_set('Africa/Dar_es_salaam');
$last_login = date('Y-m-d H:i:s');

// Include DB config
require '../constants/db_config.php';

// Validate POST input
if (!isset($_POST['email'], $_POST['password'])) {
    header("Location: ../login.php?r=invalid_input");
    exit();
}

$myemail = trim($_POST['email']);
$mypass = md5($_POST['password']);

// Create PDO connection (without try-catch)
$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Prepare and execute SELECT
$stmt = $conn->prepare("SELECT * FROM tbl_users WHERE email = :myemail AND login = :mypassword AND status = 'Active' LIMIT 1");
$stmt->bindParam(':myemail', $myemail);
$stmt->bindParam(':mypassword', $mypass);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    header("Location: ../login.php?r=0346"); // Login failed
    exit();
}

session_start();
$_SESSION['logged'] = true;
$_SESSION['role'] = $user['role'];
$_SESSION['myid'] = $user['member_no'];
$_SESSION['myemail'] = $user['email'];
$_SESSION['myphone'] = $user['phone'];
$_SESSION['mycity'] = $user['city'];
$_SESSION['mystreet'] = $user['street'];
$_SESSION['myzip'] = $user['zip'];
$_SESSION['mycountry'] = $user['country'];
$_SESSION['mydesc'] = $user['about'];
$_SESSION['avatar'] = $user['avatar'];
$_SESSION['lastlogin'] = $user['last_login'];

if ($user['role'] === 'employee') {
    $_SESSION['myfname'] = $user['first_name'];
    $_SESSION['mylname'] = $user['last_name'];
    $_SESSION['mydate'] = $user['bdate'];
    $_SESSION['mymonth'] = $user['bmonth'];
    $_SESSION['myyear'] = $user['byear'];
    $_SESSION['myedu'] = $user['education'];
    $_SESSION['mytitle'] = $user['title'];
    $_SESSION['gender'] = $user['gender'];
} else {
    $_SESSION['compname'] = $user['first_name'];
    $_SESSION['established'] = $user['byear'];
    $_SESSION['comptype'] = $user['title'];
    $_SESSION['myserv'] = $user['services'];
    $_SESSION['myexp'] = $user['expertise'];
    $_SESSION['website'] = $user['website'];
    $_SESSION['people'] = $user['people'];
}

// Update last_login
$updateStmt = $conn->prepare("UPDATE tbl_users SET last_login = :lastlogin WHERE email = :email");
$updateStmt->bindParam(':lastlogin', $last_login);
$updateStmt->bindParam(':email', $myemail);
$updateStmt->execute();

// Redirect to role-specific dashboard
header("Location: ../" . $user['role']);
exit();
?>