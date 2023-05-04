<?php
    $con = mysqli_connect("localhost", "root", "qwer", "php_db");
    mysqli_query($con,'SET NAMES utf8');
	$search_name = $_GET['search_name'];
	//echo "<script>alert('받은값 : $search_name');</script>"; 
	$query = "select * from member where id = '".$search_name."'";
	$result = $con->query($query);
	$row = $result->fetch_assoc();
	//$id = $row["id"];
	//echo "<script>alert('받은값 :$id ');</script>";

?>

<!DOCTYPE html>
<html dir="ltr" lang="ko">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>회원정보 페이지</title>

<style>
      p{
        text-align: center;
      }
	  div{
        text-align: center;
      }
      #btn{
        width:100px;
        margin:auto;
        display:block;
      }
      img{
        width:200px;
        height:300px;
        margin:auto; 
        display:block;
      }
    </style>



</head >
<body>

<h1><p>회원정보 페이지</p></h1>
<div>

<input type="search" id="search_input" name="search" value="" placeholder="수정 아이디 검색">
	<button onclick="searchFunc()" class="favorite styled" type="button">검색</button>


<script>
    function searchFunc() {
		var name = document.getElementById('search_input').value;		
		location.href="member_info.php?search_name="+name;
    }  
  </script>

</div>
<br/>
<form method="POST" action="edit_result.php">
    <p>아 이 디 : <input type="text" name="id" value="<?=$row["id"]?>"></p>
    <p>비밀번호 : <input type="password" name="pw" value=""></p>
	  <p>비번확인 : <input type="password" name="pw2" value=""></p>
    <p>이    름 : <input type="text" name="name" value="<?=$row["name"]?>"></p>
    <p>연 락 처 : <input type="text" name="hp" value="<?=$row["hp"]?>"></p>
    <p>이 메 일 : <input type="text" name="email" value="<?=$row["email"]?>"></p>

<br/>
<input id="btn" type="submit" value="수정완료"><br/>
</form>
</body>


</html>