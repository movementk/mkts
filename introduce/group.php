<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/introduce.css" rel="stylesheet">
</head>
<body class="sub introduce">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="content">
        <!-- page-header -->
        <div class="page-header">
            <h2>회사소개</h2>
            <p>고객들의 가슴속에 살아 숨쉬는기업 명광통상(주)</p>
            <div class="lnb">
                <div class="container">
                    <ul>
                        <li>
                            <a href="/introduce/greeting.php">인사말</a>
                        </li>
                        <li>
                            <a href="/introduce/history.php">연혁</a>
                        </li>
                        <li class="active">
                            <a href="/introduce/group.php">조직도</a>
                        </li>
                        <li>
                            <a href="/introduce/location.php">찾아오시는길</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- page-title -->
            <div class="page-title">
                <!-- breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="/"><i class="icon-home"></i></a></li>
                    <li>회사소개</li>
                    <li>조직도</li>
                </ol>
                <small>ORGANIZATION</small>
                <hr>
                <h3 class="title">명광통상(주) 조직도</h3>
                <p>명광통상(주)의 눈부신 도전과 성장, 그 발자취</p>
            </div>
            <div class="group">
                <p class="figure">
                    <img src="/assets/images/introduce/group_table_img.jpg" alt="조직도">
                </p>
                <ul class="figcaption sr-only">
                    <li>
                        <h1>대표이사</h1>
                        <ul>
                            <li>
                                <h2>관리부</h2>
                                <ul>
                                    <li>
                                        <h3>품질관리</h3>
                                        <ul>
                                            <li>입 출고 검사</li>
                                            <li>제품검수</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h3>영업관리</h3>
                                        <ul>
                                            <li>수주</li>
                                            <li>생산지시</li>
                                            <li>출고지시</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h3>출하관리</h3>
                                        <ul>
                                            <li>배차</li>
                                            <li>출고</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h2>생산부</h2>
                                <ul>
                                    <li>
                                        <h3>합철팀</h3>
                                        <ul>
                                            <li>합철 1호</li>
                                            <li>합철 2호</li>
                                            <li>합지</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h3>인쇄팀</h3>
                                        <ul>
                                            <li>인쇄 1호</li>
                                            <li>인쇄 2호</li>
                                            <li>인쇄 3호</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h3>톰슨팀</h3>
                                        <ul>
                                            <li>톰슨 1호</li>
                                            <li>톰슨 2호</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!--//Container -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>