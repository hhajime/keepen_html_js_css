<?php include  $_SERVER['DOCUMENT_ROOT']."../../keepen_html_js_css/keepen/db/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>keepen</title>
</head>
<header class="header">
        <img class="logo" src="../assets/images/logo.png" alt="logo">
        <button class="button3" onclick="document.getElementById('middle').scrollIntoView();">Team</button>
        <button class="button4" onclick="document.getElementById('middle-end').scrollIntoView();">About</button>
        <button class="button1" onclick="location.href='pages/community/index.php'">community</button>
        <button class="button2" onclick="location.href='pages/community/index.php'">Get Start</button>
</header>
<body bgcolor="white" style="overflow: auto;">
    <div class="cover-container">
        <img class="cover" src="../assets/images/cover.gif" alt="cover">
        <p class="cover-title">"누구나 
            <span style="opacity: 0.5;">쉽게 참여하는 </span>
            탄소중립<span style="opacity: 0.5;">의 첫 걸음"</span></p>
    </div>
    <div><p class="mainparagraph" id="middle">ABOUT OUR SERVICES</p></div>   
    <div><p class="subparagraph">저희 플랫폼이 추구하는 궁극적 미션은 지속가능경영, 즉 Triple Bottom Line(TBL)를 기반으로 합니다. 플랫폼 이용자들이 범국가적 정책인 온실가스 배출 감소를 목표를 위해 현재 환경부 및 서울시에서 실시하는 탄소포인트제, 에코마일리지제도에 참여를 도와 이를 이용해 받은 환경 마일리지 포인트를 시장 경제에 활용함으로써  환경적, 사회적, 경제적 가치가 순환되는 즉, TBL이 실현되는 구조로 사용자에게 다양한 비지니스를 플랫폼과 융합하여 새로운 비지니스 가치를 창출하고자 합니다. 더 나아가, 온실가스 배출권에 시장 기능을 도입하여 개인-개인, 개인-국가, 개인-기업간 온실가스 배출권을 거래할 수 있는 플랫폼 제시하여 더욱 효과적인 온실가스 감출목표를 달성하는 것을 목적으로 합니다.</p></div>
    
    <div><p class="mainparagraph" id="middle-end">KEEPEN FOUNDERS</p></div>   
    <div class="grid-image">
        <table><tr>
            <td>
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                <img src="../assets/images/ceo.jpg" alt="logo">
            </div>
            <div class="flip-card-back">
              <h1>Ha Jong Myeong</h1>
              <p>최고 의사결정권자</p>
            </div>
          </div>
        </div>
                <p>CEO Ha Jong Myeong</p></td>
            <td>
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                <img src="../assets/images/cao.jpg" alt="logo">
            </div>
            <div class="flip-card-back">
              <h1>Choi Hyeong Joon</h1>
              <p>채무 및 회계정보 총괄</p>
            </div>
          </div>
        </div>
                <p>CAO Choi Hyeong Joon</p></td>
                <td>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                    <img src="../assets/images/cto.jpg" alt="logo">
                </div>
                <div class="flip-card-back">
                  <h1>Lim Chae Ho</h1>
                  <p>기술개발 총괄</p>
                </div>
              </div>
            </div>
                    <p>CTO Lim Chae Ho</p></td>
                    <td>
                        <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                        <img src="../assets/images/coo.jpg" alt="logo">
                    </div>
                    <div class="flip-card-back">
                      <h1>Shin Dong Heon</h1>
                      <p>사업 및 운영 총괄</p>
                    </div>
                  </div>
                </div>
                        <p>COO Shin Dong Heon</p></td>
                        <td>
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                  <div class="flip-card-front">
                            <img src="../assets/images/cco.jpg" alt="logo">
                        </div>
                        <div class="flip-card-back">
                          <h1>Lee Jung Hoon</h1>
                          <p>최고 크리에이티브 책임</p>
                        </div>
                      </div>
                    </div>
                            <p>CCO Lee Jung Hoon</p></td>
        </tr></table>
    </div>

</body>

<footer class="footer-distributed">

    <div class="footer-right">

        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-github"></i></a>

    </div>

    <div class="footer-left">

        <p class="footer-links">
            <a class="link-1" href="#">Home</a>

            <a href="#">Community</a>

            <a href="#">Green Market</a>

            <a href="#">About</a>

            <a href="#">Faq</a>

            <a href="#">Contact</a>
        </p>

        <p>keepen &copy; 2021</p>
    </div>

</footer>

</html>