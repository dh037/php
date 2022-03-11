<?php

require_once 'database.php';


$file_tmp = $_FILES['image']['tmp_name'];
$file_name = $_FILES['image']['name'];

$user_id = $_POST['id'];


$file_path = 'image/'.$file_name;
move_uploaded_file($file_tmp,$file_path);

$conn = mysqli_connect(db_host,db_user,db_password,db_name);

$sql = "UPDATE board_user SET
     user_profile_image='{$file_name}'
      WHERE user_id='{$user_id}'";

$result = mysqli_query($conn,$sql);

if ($result) {
    $sql = "SELECT * FROM board_user WHERE user_id='{$user_id}'";
    $result2 = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result2)){
          $result_array[] = $row;
    }
    if (isset($result_array)){
          echo json_encode($result_array);
    } else {
          echo json_encode("updateFail");
    }
} else {
    echo "queryError";
}