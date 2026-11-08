<?php 

function get_all_users($conn){
    $sql = "SELECT * FROM tbl_users WHERE role!='admin'";
    $stmt = $conn->prepare($sql);
    $stmt->execute([]);

    if($stmt->rowCount() > 0){
        $users = $stmt->fetchAll();
    } else {
        $users = 0;
    }
    return $users;
}

function insert_user($conn, $data){
    $sql = "INSERT INTO tbl_users (first_name, email, password, role) VALUES(?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}

function update_user($conn, $data, $update_password) {
    if ($update_password) {
        $sql = "UPDATE tbl_users SET first_name=?, email=?, login=?, status=? WHERE id=?";
    } else {
        $sql = "UPDATE tbl_users SET first_name=?, email=?, status=? WHERE id=?";
    }
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}

function delete_user($conn, $data){
    $sql = "DELETE FROM tbl_users WHERE id=? AND role=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}

function get_user_by_id($conn, $id){
    $sql = "SELECT * FROM tbl_users WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);

    if($stmt->rowCount() > 0){
        $user = $stmt->fetch();
    } else {
        $user = 0;
    }
    return $user;
}

function update_profile($conn, $data){
    $sql = "UPDATE tbl_users SET first_name=?, login=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}

function count_users($conn){
    $sql = "SELECT id FROM tbl_users WHERE role='employee' OR role='employer'";
    $stmt = $conn->prepare($sql);
    $stmt->execute([]);
    return $stmt->rowCount();
}