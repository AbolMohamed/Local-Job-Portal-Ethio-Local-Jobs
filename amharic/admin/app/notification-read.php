<?php 
require '../../constants/settings.php'; 
require '../../constants/check-login.php';

if ($user_online != "true" || $_SESSION['role'] != 'admin') {
    header("location:../");    
    exit();
}
    include "../DB_connection.php";
    include "Model/Notification.php";

   if (isset($_GET['notification_id'])) {
       $notification_id = $_GET['notification_id'];
       notification_make_read($conn, $_SESSION['id'], $notification_id);
       header("Location: ../notifications.php");
       exit();

     }else {
       header("Location: index.php");
       exit();
     }
 ?>