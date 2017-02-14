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
                        <li class="active">
                            <a href="/introduce/greeting.php">인사말</a>
                        </li>
                        <li>
                            <a href="/introduce/history.php">연혁</a>
                        </li>
                        <li>
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
                    <li>인사말</li>
                </ol>
                <small>CEO MESSAGE</small>
                <hr>
                <h3 class="title">CEO 인사말</h3>
            </div>
            <div class="greeting">
                <figure>
                    <img src="/assets/images/introduce/greeting_img.png" alt="">
                    <figcaption class="sr-only">
                        고객들의 가슴속에 살아 숨쉬는 기업 명광통상(주)
                    </figcaption>
                </figure>
                <div class="greeting-txt">
                    <h4>
                        안녕하세요.
                        <i>명광통상(주)를 찾아주셔서 감사합니다.</i>
                    </h4>
                    <p>
                        당사는 90년대 초반까지는 수출입업을 하면서 성장하였고, 사업의 다변화를 위하여 93년도부터 골판지상자 제조업을 시작하여, 현재는 각종 최첨단 기계설비와 넓고 쾌적한 작업환경에 숙련된 인원들이 최상의 제품 생산을 위해 성실하게 노력하고 있습니다.
                    </p>
                    <p>
                        제품 생산 설비 체계도 대량생산과 다품종 소량 생산도 가능 하도록 조화롭게 운영되므로 매년 거래선이 눈에 띄게 증가하고 있습니다.
                    </p>
                </div>
                <div class="greeting-txt">
                    <p>
                        앞으로도 골판지상자를 담당하는 임직원 일동은 소중한 고객분을 위하여 <b>경쟁력 있는 가격과 최고의 서비스</b>를 위해 혼신의 힘을 경주할 것을 약속드리면서 더욱더 고객님의 변함없는 성원을 기대합니다.
                    </p>
                    <p>
                        끝으로 명광통상(주) 임직원 일동은 <b>고객 여러분이 만족할 때까지 최선을 다하고 사회에 공헌</b>하는 회사가 되도록 열심히 노력하겠습니다. <br>
                        감사합니다.
                    </p>
                </div>   
                <dl>
                    <dt>대표이사</dt>
                    <dd>
                        윤 영 구
                        <small>배상</small>
                    </dd>
                </dl>
            </div>
        </div><!--//Container -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>