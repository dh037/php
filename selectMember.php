<?php

require_once 'database.php';

$conn = mysqli_connect(db_host,db_user,db_password,db_name);
$sql = "SELECT * FROM board_user";

$result = mysqli_query($conn,$sql);


if (mysqli_num_rows($result) > 0 ){
    while ($row = mysqli_fetch_assoc($result)) {
        $result_array[]=$row;    
    }
    echo json_encode($result_array);   
} else {
    echo 1;
}
