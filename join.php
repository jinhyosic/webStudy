<!DOCTYPE html>
<html lang="ko">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- //구글폰트 -->
 

    <title>회원관리 사이트</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">	
    <!-- Custom styles for this template -->	
	<link href="css/join.css" rel="stylesheet">
    <link href="css/reset_responsive.css" rel="stylesheet">    
	<link href="css/style.css" rel="stylesheet">
	
	<!--   -->
  </head>
  <body>


<!--타이틀자리 -->
<div class="main_footer_2">
    <div class="container-fluid" style="">
        <div class="row">
              <div class="ft_005">
                    <H2><p>회원 가입</p></H2>
                </div>
        </div>
    </div>
</div>


<!-- 헤더 네비게이션 -->
	 <nav class="navbar navbar-expand-lg navbar-dark" style="background:#005b91; color:#fff;">
      <div class="container">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

            <div class="collapse navbar-collapse text-center" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php" style="">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="member_list.php" style="">회원목록</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="member_info.php" style="">회원수정</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="join.php" style="">회원가입</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="member_list.php"  style="">기타</a>
                 </li>                
                
              </ul>
            </div>

      </div>
    </nav>
<!--//네비게이션 종료-->
  




<div class="">
	<div class="container">
		 <div id="">
          <div class="member_list_section">
            
				<div id="mainbody">
						<form action="join_result.php">
							<table>
							<caption>(*)표시는 <strong>필수입력</strong> 사항입니다.</caption>
								<tr>
									<th><span>*</span>아이디</th>
									<td>
									<div class="id">
										<input type="text" size="20" name="id">
										<input type="button" value="중복체크">
										<br>
										6~15자의 영문 소문자, 숫자만 가능합니다.
									</div>
									</td>
								</tr>

								<tr>
									<th><span>*</span>비밀번호</th>
									<td>
									<div class="pw">
										<input type="password" size="20" name="pw"><br>
										-<strong>영문자, 숫자, 특수문자</strong>의 조합,<br>
										&emsp;<strong>8자리 이상</strong>으로 이루어져야 합니다.
									</div>
									</td>
								</tr>

								<tr>
									<th><span>*</span>비밀번호 확인</th>
									<td>
									<div class="pw">
										<input type="password" size="20" name="pw_r">
									</div>
									</td>
								</tr>

								<tr>
									<th><span>*</span>연락처</th>
									<td>
									<div class="major">
										<input type="text" name="major" value=""> 
										
									</div>
									</td>
								</tr>

								<tr>
									<th>이메일</th>
									<td>
									<div class="email">
										<input type="text" size="15" name="email_id">
										@
										<select name="email_domain">
											<option value="1">네이버</option>
											<option value="2">구글</option>
											<option value="3">다음</option>
										</select>
									</div>
									</td>
								</tr>

								<tr>
									<td colspan="2">
									<div>
										&emsp;회원가입을 하시겠습니까?
										<span class="btn">
											<input type="submit" value="가입하기">&nbsp;
										</span>
									</div>
									</td>
								</tr>
							</table>
						</form>

				</div>
		</div>
   	  </div>
      <!-- 게시판영역 종료-->
	</div>
</div>





<!-- 하단 맨 끝 -->
<div class="main_footer_2">
    <div class="container-fluid" style="">
        <div class="row">
              <div class="ft_005">
                    <p>-</p>
                </div>
        </div>
    </div>
</div>







  </body>

</html>
