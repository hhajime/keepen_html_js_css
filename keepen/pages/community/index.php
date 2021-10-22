<?php include  $_SERVER['DOCUMENT_ROOT']."/keepen_html_js_css/keepen/db/db.php"; ?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>keepen</title>
<link rel="stylesheet" type="text/css" href="../style.css" />
</head>
<header class="header">
        <img class="logo" src="../../assets/images/logo.png" alt="logo">
</header>
<body>
<div id="board_area"> 
  <h1>자유게시판</h1>
  <h4>자유롭게 글을 쓸 수 있는 게시판입니다.</h4>
    <table class="list-table">
      <thead>
          <tr>
              <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="120">글쓴이</th>
                <th width="100">작성일</th>
                <!-- 추천수 항목 추가 -->
                <th width="100">조회수</th>
            </tr>
        </thead>
        <!-- 테스트 코드 -->
        <?php
        // board테이블에서 idx를 기준으로 내림차순해서 10개까지 표시
          $sql = query("select * from board order by idx desc limit 0,10"); 
            while($board = $sql->fetch_array())
            {
              //title변수에 DB에서 가져온 title을 선택
              $title=$board["title"]; 
              if(strlen($title)>30)
              { 
                //title이 30을 넘어서면 ...표시
                $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
              }
        ?>
        <tbody>
        <tr>
          <td width="70"><?php echo $board['idx'];?></td>
          <td width="500"><a href="/pages/community/board/read.php?idx=<?php echo $board["idx"];?>"><?php echo $title;?></a></td>
          <td width="120"><?php echo $board['name'];?></td>
          <td width="100"><?php echo $board['date'];?></td>
          <td width="100"><?php echo $board['hit']; ?></td>
          <!-- 추천수 표시해주기 위해 추가한 부분 -->
        </tr>
      </tbody>
      <?php } ?>
    </table>
    <div id="write_btn">
      <a href="board/write.php"><button>글쓰기</button></a>
    </div>
  </div>
</body>
</html>