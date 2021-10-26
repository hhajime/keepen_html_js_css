<?php include  $_SERVER['DOCUMENT_ROOT']."/keepen_html_js_css/keepen/db/db.php"; ?>
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
    <button class="button3" onclick="document.getElementById('middle-end').scrollIntoView();">Team</button>
    <button class="button4" onclick="document.getElementById('middle').scrollIntoView();">About</button>
    <button class="button1" onclick="location.href='pages/community/index.php'">community</button>
    <button class="button2" onclick="location.href='pages/community/index.php'">Get Start</button>
</header>

<body bgcolor="white" style="overflow: auto;">
    <div class="cover-container">
        <img class="cover" src="../assets/images/cover.gif" alt="cover">
        <p class="cover-title">"누구나
            <span style="opacity: 0.5;">쉽게 참여하는 </span>
            탄소중립<span style="opacity: 0.5;">의 첫 걸음"</span>
        </p>
    </div>
    <div>
        <p class="mainparagraph" id="middle">ABOUT OUR SERVICES</p>
    </div>
    <div>
        <p class="subparagraph">저희 플랫폼이 추구하는 궁극적 미션은 지속가능경영, 즉 Triple Bottom Line(TBL)를 기반으로 합니다. 플랫폼 이용자들이 범국가적 정책인
            온실가스 배출 감소를 목표를 위해 현재 환경부 및 서울시에서 실시하는 탄소포인트제, 에코마일리지제도에 참여를 도와 이를 이용해 받은 환경 마일리지 포인트를 시장 경제에 활용함으로써 환경적,
            사회적, 경제적 가치가 순환되는 즉, TBL이 실현되는 구조로 사용자에게 다양한 비지니스를 플랫폼과 융합하여 새로운 비지니스 가치를 창출하고자 합니다. 더 나아가, 온실가스 배출권에 시장 기능을
            도입하여 개인-개인, 개인-국가, 개인-기업간 온실가스 배출권을 거래할 수 있는 플랫폼 제시하여 더욱 효과적인 온실가스 감출목표를 달성하는 것을 목적으로 합니다.</p>
    </div>
    <div class="service_introduction">
        <table>
            <tr>
                <td>
                    <figure class="snip1361">
                        <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1172&q=80" alt="sample45" />
                        <figcaption>
                            <h3>사용자 정보, 데이터 수집</h3>
                            <p>주소, 이름, 고객번호 등과 같은 사용자의 정보 및 전기, 가스 사용량 데이터를 수집.</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </td>
                <td>
                    <figure class="snip1361"><img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80"
                            alt="sample77" />
                        <figcaption>
                            <h3>탄소배출량 디스플레이</h3>
                            <p>현재 가정내 탄소배출량을 추적, 분석한 결과를 보여주는 디스플레이.</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </td>
                <td>
                    <figure class="snip1361"><img src="https://images.unsplash.com/photo-1632776350300-11016768b521?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1531&q=80"
                            alt="sample99" />
                        <figcaption>
                            <h3>그린 마켓 운영</h3>
                            <p>친환경 사업에 해당하는 사업자들에게도 해당 플랫폼에서 자사의 물건을 홍보,판매 할 수 있도록 환경 구축. </p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </td>
            </tr>
        </table>
    </div>
    <div>
        <p class="mainparagraph" id="middle-end">KEEPEN FOUNDERS</p>
    </div>
    <div class="grid-image">
        <table>
            <tr>
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
                    <p>CEO Ha Jong Myeong</p>
                </td>
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
                    <p>CAO Choi Hyeong Joon</p>
                </td>
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
                    <p>CTO Lim Chae Ho</p>
                </td>
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
                    <p>COO Shin Dong Heon</p>
                </td>
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
                    <p>CCO Lee Jung Hoon</p>
                </td>
            </tr>
        </table>
    </div>
    <div>
        <p class="mainparagraph" id="middle-end">KEEPEN MISSIONARY</p>
    </div>
    <div>
        <p class="subparagraph2">"지속 가능한 개발과 환경 보존 문제를 통해 기업과 가구가 좀 더 가까워지며 공동의 수익을 향해 노력하겠습니다."</p>
    </div>
    <div class="service_introduction">
        <table>
            <tr>
                <td>
                    <figure class="snip1361">
                        <img src="https://images.unsplash.com/photo-1600267165477-6d4cc741b379?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" alt="sample45" />
                        <figcaption>
                            <h3>쉬운 접근성</h3>
                            <p>플랫폼 이용자들이 탄소중립 프로젝트에 쉽게 참여 및 탄소배출량 추적.</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </td>
                <td>
                    <figure class="snip1361"><img src="https://images.unsplash.com/photo-1520121401995-928cd50d4e27?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80"
                            alt="sample77" />
                        <figcaption>
                            <h3>환경문제 개선</h3>
                            <p>탄소중립프로젝트에 참여를 유도하고, 탄소배출량을 감소를 위한 동기 부여.</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </td>
                <td>
                    <figure class="snip1361"><img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1471&q=80"
                            alt="sample99" />
                        <figcaption>
                            <h3>공동의 수익창출</h3>
                            <p>친환경 기업 및 사용자들이 공동의 수익을 창출할 수 있게 플랫폼 구축. </p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </td>
            </tr>
        </table>
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