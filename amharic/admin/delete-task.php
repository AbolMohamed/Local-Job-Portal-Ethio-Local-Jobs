<?php 
require '../constants/settings.php'; 
require '../constants/check-login.php';
if ($user_online == "true") {
}else{
header("location:../");	
}
    include "DB_connection.php";
    include "app/Model/Task.php";
    
    if (!isset($_GET['id'])) {
    	 header("Location: tasks.php");
    	 exit();
    }
    $id = $_GET['id'];
    $task = get_task_by_id($conn, $id);

    if ($task == 0) {
    	 header("Location: tasks.php");
    	 exit();
    }

     $data = array($id);
     delete_task($conn, $data);
     $sm = "Deleted Successfully";
     header("Location: tasks.php?success=$sm");
     exit();
 ?>