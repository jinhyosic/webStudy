<?php
    $con = mysqli_connect("localhost", "root", "qwer", "php_db");
    mysqli_query($con,'SET NAMES utf8');

    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $name = $_POST['name'];
    $hp = $_POST['hp'];
    $email = $_POST['email'];

    $statement = mysqli_prepare($con, "INSERT INTO member VALUES (null,?,?,?,?,?)");
    mysqli_stmt_bind_param($statement, "sssss", $id, $pw, $name, $hp, $email);
    mysqli_stmt_execute($statement);

    echo "<script>alert('회원가입완료!');</script>"; 
    echo("<script>location.href='./login.php';</script>"); 
?> 

