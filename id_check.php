<?php
    $con = mysqli_connect("localhost", "root", "qwer", "php_db");
    mysqli_query($con,'SET NAMES utf8');
    $id = $_GET['id'];    
	$idCheck =false;
    $query = "select * from member where id = '".$id."'";
    $result = $con->query($query);
    while($row = $result->fetch_row())
     {
        $idCheck =true;
                
     }

     if($idCheck == true)
     {
        echo "<script>alert('아이디가 중복됩니다!');</script>"; 
		echo("<script>history.back();</script>"); 
       
     }
     else{
		echo "<script>alert('가입 가능한 아이디입니다.');</script>"; 
		echo("<script>history.back();</script>"); 
   
     }

?> 