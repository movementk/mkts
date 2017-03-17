<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/introduce.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="sub introduce">
        <section class="location">
            <!-- page-header -->
            <div class="page-header">
                <h2>회사소개</h2>
                <p>고객들의 가슴속에 살아 숨쉬는기업 명광통상(주)</p>
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        찾아오시는길<span class="icon-drop"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="/mobile/introduce/greeting.php">인사말</a></li>
                        <li><a href="/mobile/introduce/history.php">연혁</a></li>
                        <li><a href="/mobile/introduce/group.php">조직도</a></li>
                        <li><a href="/mobile/introduce/location.php">찾아오시는 길</a></li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="section-header">
                    <small>LOCATION</small>
                    <hr>
                    <h3>찾아오시는길</h3>
                </div>
                <div class="section-content">
                    <p class="maps">
                        <img src="/mobile/assets/images/introduce/map_img.jpg" class="img-responsive" alt="지도 이미지">
                    </p>
                    <div class="information">
                        <dl>
                            <dt>주소</dt>
                            <dd>경기도 안산시 단원구 신원로 66(성곡동)</dd>
                            <dt>전화</dt>
                            <dd><a href="tel:0314038724">031-403-8724</a></dd>
                            <dt>팩스</dt>
                            <dd>031-403-8668</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>