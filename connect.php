<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    //Database Connection
    $conn = mysqli_connect('localhost','root','','Hospital') or die("connection failed");
    $SQL ="INSERT INTO connect('name','email',mobile) values('{$name}','{$email}','{$mobile}')";
    $result = mysqli_query($conn,$sql) or die("Query Failed");
    mysqli_close($conn);
?>