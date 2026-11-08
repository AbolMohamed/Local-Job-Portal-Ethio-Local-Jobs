<?php 
require '../../constants/settings.php'; 
require '../../constants/check-login.php';

if ($user_online != "true" || $_SESSION['role'] != 'admin') {
    header("location:../");    
    exit();
}

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['first_name']) && isset($_POST['status'])) {
    include "../DB_connection.php";

    function validate_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate_input($_POST['email']);
    $password = validate_input($_POST['password']);
    $first_name = validate_input($_POST['first_name']);
    $status = validate_input($_POST['status']);
    $id = validate_input($_POST['id']);

    if (empty($email)) {
        $em = "Email is required";
        header("Location: ../edit-user.php?error=$em&id=$id");
        exit();
    } else if (empty($first_name)) {
        $em = "Full name is required";
        header("Location: ../edit-user.php?error=$em&id=$id");
        exit();
    } else {
        include "Model/User.php";
        
        // Only hash password if it's not empty (allow keeping existing password)
        if (!empty($password)) {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $data = [$first_name, $email, $password, $status, $id];
            update_user($conn, $data, true); // true indicates password is being updated
        } else {
            $data = [$first_name, $email, $status, $id];
            update_user($conn, $data, false); // false indicates no password update
        }

        $em = "User updated successfully";
        header("Location: ../edit-user.php?success=$em&id=$id");
        exit();
    }
} else {
    $em = "Required fields are missing";
    header("Location: ../edit-user.php?error=$em");
    exit();
}