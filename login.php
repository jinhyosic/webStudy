<!DOCTYPE html>
<html dir="ltr" lang="ko">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>로그인 페이지</title>

<style>
#login_wrapper { 
    border: 20px solid lightblue;
    padding: 5px 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    width: 450px; height: 250px;
    margin-left: -220px;
    margin-top : -170px;
    
    display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
} 
h1{
	font-size: 25px;
	padding-bottom: 20px;
}
.form{
	width: 300px;
}
.form > div{
	display: flex;
	justify-content: center;
	padding-bottom: 7px;
	align-items: center;
}
label{
	flex: 1;
	text-align: left;
}
button{
	width: 85px;
	float: right;
	padding: 4px;
	margin: 3px;
}
input {
	padding: 5px;
}
</style>
</head>
<body>
<div id="login_wrapper">
		<h1>로그인 화면 </h1>
		<form action="login_result.php" method="POST" class="form">
			<div>
				<label>아이디</label>
				<input type="text" id="id" name="id" maxlength="20" placeholder="username" required>
			</div>
			<div>
				<label>비밀번호</label>
				<input type="password" id="pwd" name="pwd" maxlength="20" placeholder="password" required>
			</div>
			<button type="submit" id="btn_login" >로그인</button>
			<button type="button" id="btn_join" onclick="location.href='join.php'">회원가입</button>
		</form>
		
	</div>  
</body>
</html>