<?php

require_once 'database.php';

$user_id = $_POST['id'];


$conn = mysqli_connect(db_host,db_user,db_password,db_name);

$sql = "SELECT user_id FROM 
        board_user WHERE user_id = '{$user_id}'";

$result = mysqli_query($conn,$sql);

echo mysqli_num_rows($result);



