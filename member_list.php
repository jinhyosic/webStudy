<?php
    $con = mysqli_connect("localhost", "root", "qwer", "php_db");
    mysqli_query($con,'SET NAMES utf8');	
$page = (isset($_GET["page"]) && $_GET["page"]) ? $_GET["page"] : 1;
//page 값


if (empty($page)) { $page = 1; }

$select_query = "select COUNT(*) as size FROM member";        
$result = mysqli_query($con, $select_query); 
$row = mysqli_fetch_array($result);
$nums = $row['size']; //db 총 행의 갯수


//화면에 목록 줄수
$listSize = 5;

//페이지 표시 최대 숫자
$blockSize = 5; // 추가 !!
$prevBlock="";
$nextBlock="";
$start = ($page - 1) * $listSize;


$totalListCount = ceil($nums/ $listSize); // 추가해주기

$no = $nums - $start; // 추가

$totalBlockCount = ceil($totalListCount/$blockSize);
$currentBlock = ceil($page / $blockSize);

$startPage = ($currentBlock - 1) * $blockSize + 1;

if ($currentBlock >= $totalBlockCount) {
    $endPage = $totalListCount;
} else {
    $endPage = $currentBlock * $blockSize;
}

if ($currentBlock > 1) {
    $prevBlock = "
        <a class='page-link' href='./member_list.php?page=".($startPage - 1)."' aria-label='Previous'>
            <span aria-hidden='true'>&laquo;</span>
        </a>";
}

if ($currentBlock < $totalBlockCount) {
    $nextBlock = "
        <a class='page-link' href='./member_list.php?page=".($endPage + 1)."' aria-label='Next'>
            <span aria-hidden='true'>&raquo;</span>
        </a>";
}



?>



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
                    <p>회원관리 사이트</p>
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
                  <a class="nav-link" href="member_edit.php" style="">회원수정</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="member_list.php"  style="">기타</a>
                 </li>                
                
              </ul>
            </div>

      </div>
    </nav>
<!--//네비게이션 종료-->
  







<!-- 회원목록-->
<div class="">
	<div class="container">
		 <div id="">
          <div class="member_list_section">
            <ul>
                <!-- 회원목록  -->
                <li>
                    <ul id ="member_list_table">
                        <li>
                            <ul>
                                <li>번호</li>
                                <li>아이디</li>
                                <li>이름</li>
                                <li>연락처</li>
								<li>이메일</li>
                            </ul>
                        </li>
                        <!-- 회원 정보 반복 출력구간 -->
						<?php	
						$query = "select * FROM member ORDER BY idx desc LIMIT $start, $listSize";
						$result = $con->query($query);		
						while($row = $result->fetch_assoc())
						{
						?>   
                        <li>
                           <ul>
                                <li><?=$row["idx"]?></li>
                                <li ><?=$row["id"]?></li>                               
                                <li><?=$row["name"]?></li>
                                <li><?=$row["hp"]?></li>
								<li><?=$row["email"]?></li>
                            </ul>
                        </li>
                        <?php
						}
						?>
                    </ul>
                </li>
                <!-- 게시판 페이징 영역 -->
                <li>
					  <div id="sub1_2_divPaging">
							
								<div style="font-size:0.8em;color:#005b91; ">◀</div>
								<?php									
									for ($i = $startPage; $i <= $endPage; $i++) {
										$active = $page == $i ? "disabled" : "";
										echo "<div class='pagingbox'><a  ".$active."' href='./member_list.php?page=".$i."'>".$i."</a></div>";
									}

									
								?>
								<div style="font-size:0.8em; color:#005b91;">▶</div>
							
						</div>
                </li>
            </ul>
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
