<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/introduce.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="sub introduce">
        <section class="group">
            <!-- page-header -->
            <div class="page-header">
                <h2>회사소개</h2>
                <p>고객들의 가슴속에 살아 숨쉬는기업 명광통상(주)</p>
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        조직도<span class="icon-drop"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="/mobile/introduce/greeting.php">인사말</a></li>
                        <li><a href="/mobile/introduce/history.php">연혁</a></li>
                        <li><a href="/mobile/introduce/group.php">조직도</a></li>
                        <li><a href="/mobile/introduce/location.php">찾아오시는 길</a></li>
                    </ul>
                </div>
            </div>
            <div class="section-header">
                <small>ORGANIZATION</small>
                <hr>
                <h3>명광통상(주) 조직도</h3>
            </div>
            <div class="section-content">
                <h4 class="sub-title">명광통상(주)의 눈부신 도전과<br>성장, 그 발자취</h4>
                <figure>
                    <img src="/mobile/assets/images/introduce/group_img.png" class="img-responsive" alt="">
                    <ul class="sr-only">
                        <li>
                            <h4>대표이사<small>CEO</small></h4>
                        </li>
                        <li>
                            <h4>관리부<small>MANAGEMENT DEPARTMENT</small></h4>
                            <ul>
                                <li>
                                    <h5>품질관리</h5>
                                    <ul>
                                        <li>입ㆍ출고 검사</li>
                                        <li>제품검수</li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>영업관리</h5>
                                    <ul>
                                        <li>수주</li>
                                        <li>생산지시</li>
                                        <li>출고지시</li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>출하관리</h5>
                                    <ul>
                                        <li>배차</li>
                                        <li>출고</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>생산부<small>PRODUCTION DEPARTMENT</small></h4>
                            <ul>
                                <li>
                                    <h5>합철팀</h5>
                                    <ul>
                                        <li>합철 1호</li>
                                        <li>합철 2호</li>
                                        <li>합지</li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>인쇄팀</h5>
                                    <ul>
                                        <li>인쇄 1호</li>
                                        <li>인쇄 2호</li>
                                        <li>인쇄 3호</li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>톰슨팀</h5>
                                    <ul>
                                        <li>톰슨 1호</li>
                                        <li>톰슨 2호</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </figure>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>