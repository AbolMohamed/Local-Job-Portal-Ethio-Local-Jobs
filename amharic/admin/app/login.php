<?php 
session_start();
if (isset($_POST['email']) && isset($_POST['login'])) {
	include "../DB_connection.php";

    function validate_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$user_name = validate_input($_POST['email']);
	$password = validate_input($_POST['login']);

	if (empty($user_name)) {
		$em = "User name is required";
	    header("Location: ../login.php?error=$em");
	    exit();
	}else if (empty($password)) {
		$em = "Password name is required";
	    header("Location: ../login.php?error=$em");
	    exit();
	}else {
    
       $sql = "SELECT * FROM tbl_users WHERE email = ?";
       $stmt = $conn->prepare($sql);
       $stmt->execute([$user_name]);

       if ($stmt->rowCount() == 1) {
       	   $user = $stmt->fetch();
       	   $usernameDb = $user['email'];
       	   $passwordDb = $user['login'];
       	   $role = $user['role'];
       	   $id = $user['id'];

       	   if ($user_name === $usernameDb) {
	       	   	if (password_verify($password, $passwordDb)) {
	       	   		if ($role == "admin") {
	       	   			$_SESSION['role'] = $role;
	       	   			$_SESSION['id'] = $id;
	       	   			$_SESSION['email'] = $usernameDb;
                        header("Location: ../index.php");
	       	   		}else if ($role == 'employee') {
	       	   			$_SESSION['role'] = $role;
	       	   			$_SESSION['id'] = $id;
	       	   			$_SESSION['email'] = $usernameDb;
                        header("Location: ../index.php");
	       	   		}else {
	       	   		   $em = "Unknown error occurred ";
							   header("Location: ../login.php?error=$em");
							   exit();
	       	   		}
	       	   	}else {
	       	   	   $em = "Incorrect username or password ";
						   header("Location: ../login.php?error=$em");
						   exit();
	       	   }
       	   }else {
       	   	   $em = "Incorrect username or password ";
			   header("Location: ../login.php?error=$em");
			   exit();
       	   }
       }
      

	}
}else {
   $em = "Unknown error occurred";
   header("Location: ../login.php?error=$em");
   exit();
}