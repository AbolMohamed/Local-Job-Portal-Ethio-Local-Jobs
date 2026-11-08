<?php 
require '../../constants/settings.php'; 
require '../../constants/check-login.php';

if ($user_online != "true" || $_SESSION['role'] != 'admin') {
    header("location:../");    
    exit();
}
    include "../DB_connection.php";
    include "Model/Notification.php";

    $count_notification = count_notification($conn, $_SESSION['id']);
    if ($count_notification) {
        echo "&nbsp;". $count_notification. "&nbsp;";
    }
 ?>