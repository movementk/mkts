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
                        <li>
                            <a href="/introduce/group.php">조직도</a>
                        </li>
                        <li class="active">
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
                    <li>찾아오시는길</li>
                </ol>
                <small>LOCATION</small>
                <hr>
                <h3 class="title">찾아오시는길</h3>
            </div>
            <div class="location">
                <div class="map">
                    <img src="/assets/images/introduce/map_img.jpg" alt="지도 이미지">
                    <div class="addr">
                        <dl>
                            <dt>주소</dt>
                            <dd>경기도 안산시 단원구 신원로 66(성곡동)</dd>
                            <dt>전화</dt>
                            <dd>031-403-8724</dd>
                            <dt>팩스</dt>
                            <dd>031-403-8668</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div><!--//Container -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>