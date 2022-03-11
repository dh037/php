<?php

require_once 'database.php';

$user_id = $_POST['id'];
$admin = $_POST['admin'];

$conn = mysqli_connect(db_host,db_user,db_password,db_name);

$sql = "UPDATE board_user SET
     user_admin='{$admin}'
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
            echo json_encode('updateFail');
      }
} else {
      echo json_encode("queryError");
}