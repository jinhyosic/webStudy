<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DIV 프레임나누기</title>
<style>
.main_container {
width:100%;
height:100%;}
#main {
            text-align: center;
        } 
#menu {
            height: 40px;
            width: auto;
            margin-left: auto;
            margin-right: auto;
        }
        #menu ul li {
            list-style: none;
            color: #4F4F4F;
            background-color: white;
            float: left;
            line-height: 35px;
            vertical-align: middle;
            text-align: center;
        }
        #menu ul li:hover {
            text-decoration: none;
            color: #4F4F4F;
            border-bottom: 1px solid #4F4F4F;
            display: block;
            width: 100pxs;
            font-size: 13px;
            font-weight: bolder;
            font-family: verdana;
            outline: 0;
        }


        #menu .menuLink {
            text-decoration: none;
            color: #4F4F4F;
            display: block;
            width: 100px;
            font-size: 13px;
            font-weight: bold;
            font-family: verdana;
        } 

		#menu2 ul li {
            list-style: none;
            color: #4F4F4F;
            background-color: white;
            float: left;
            line-height: 35px;
            vertical-align: middle;
            text-align: center;
        }
		#menu2 .menuList {
            text-decoration: none;
            color: #4F4F4F;
            display: block;
            width: 135px;
            font-size: 12px;
            font-weight: bold;
            font-family: verdana;
        } 
		#menu2 .listItem {
            text-decoration: none;
            color: #4F4F4F;
            display: block;
            width: 135px;
            font-size: 12px;
            font-weight: bold;
            font-family: verdana;
			display: table-cell;
    		vertical-align: middle;
        } 

</style>



</head>

<body>


	<div id="menu">
		<ul>
            <li><a class="menuLink" href=".\index.php">Home</a></li>
            <li><a class="menuLink" href=".\login.php">로그인</a></li>
            <li><a class="menuLink" href=".\member_list.php">회원목록</a></li>
            <li><a class="menuLink" href=".\member_info.php">회원수정</a></li>            
            <li><a class="menuLink" href=".\join.php">회원가입</a></li>
            <li><a class="menuLink" href="#">기타</a></li>
        </ul>


	</div>
<div class="main_container">
<div id="main"><img id="main" src="img/main_bg.png" lt="이미지" ></img></div> 	
</div>


</body>

</html>