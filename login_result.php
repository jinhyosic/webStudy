<?php
    $con = mysqli_connect("localhost", "root", "qwer", "php_db");
    mysqli_query($con,'SET NAMES utf8');
    $id = $_POST['id'];
    $pwd = $_POST['pwd'];
	$loginCheck=false;       
    $query = "select * from member where id = '".$id."' and pw='".$pwd."'";
    $result = $con->query($query);
    while($row = $result->fetch_row())
     {
        $loginCheck=true;                       
     }

     if($loginCheck == true)
     {
        echo "<script>alert('로그인성공!');</script>"; 
        echo("<script>location.href='index.php';</script>"); 
       
     }
     else{
        echo "<script>alert('아이디/비번이 틀립니다.!');</script>"; 
        echo("<script>history.back();</script>"); 
     }

?> 