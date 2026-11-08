<?php 
require '../../constants/settings.php'; 
require '../../constants/check-login.php';

// Fixed the if condition syntax and logic
if ($user_online != "true" || ($_SESSION['role'] != 'admin' && !isset($_SESSION['id']))) {
    header("location:../");    
    exit();
}

include "../DB_connection.php";
include "Model/Notification.php";

$notifications = get_all_my_notifications($conn, $_SESSION['id']);

if ($notifications == 0) { 
?>
    <li>
        <a href="#">
            You have zero notifications
        </a>
    </li>
<?php 
} else {
    foreach ($notifications as $notification) {
?>
    <li>
        <a href="app/notification-read.php?notification_id=<?=$notification['id']?>">
            <?php if ($notification['is_read'] == 0) {
                echo "<mark>".htmlspecialchars($notification['type'])."</mark>: ";
            } else {
                echo htmlspecialchars($notification['type']).": ";
            } ?>
            <?=htmlspecialchars($notification['message'])?>
            &nbsp;&nbsp;<small><?=htmlspecialchars($notification['date'])?></small>
        </a>
    </li>
<?php
    }
}
?>