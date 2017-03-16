<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="main">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6">
                    <div class="visual-slider">
                        <ul class="main-slider">
                            <li class="first">
                                <div class="mk-country">
                                    <h2>
                                        MYUNGKWANG
                                        <small>COUNTRY,</small>
                                    </h2>
                                    <i>with you in Every Sense of life</i>
                                </div>
                            </li>
                            <li class="second">
                                <div class="mk-country">
                                    <h2>
                                        MYUNGKWANG
                                        <small>COUNTRY,</small>
                                    </h2>
                                    <i>with you in Every Sense of life</i>
                                </div>
                            </li>
                            <li class="third">
                                <div class="mk-country">
                                    <h2>
                                        MYUNGKWANG
                                        <small>COUNTRY,</small>
                                    </h2>
                                    <i>with you in Every Sense of life</i>
                                </div>
                            </li>
                            <li class="fourthly">
                                <div class="mk-country">
                                    <h2>
                                        MYUNGKWANG
                                        <small>COUNTRY,</small>
                                    </h2>
                                    <i>with you in Every Sense of life</i>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="layout-prame">
                        <div class="product">
                            <a href="/production/product.php">
                                <div>
                                    <h3>
                                        <small>Introduction</small>
                                        PRODUCT
                                    </h3>
                                    <p><b>명광통상(주)</b>의 주요제품현황 입니다.</p>
                                </div>
                            </a>
                        </div>
                        <div class="counsel">
                            <a href="/estimate/request_list.php">
                                <div>
                                    <h3>
                                        <small>Online</small>
                                        COUNSEL
                                    </h3>
                                    <p>
                                        <b>명광통상(주)의</b><br>
                                        제품견적을 의뢰하실 수 있습니다.
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="layout-prame main-map">
                        <div class="location">
                            <div class="information">
                                <h3>
                                    <small>Customer Center</small>
                                    LOCATION
                                </h3>
                                <address>경기도 안산시 단원구 신원로 66(성곡동)</address>
                                <p class="call">031.403.8724</p>
                                <p class="fax">Fax 031.403.8686</p>
                            </div>
                        </div>
                        <div class="map">
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/jquery.bxslider/jquery.bxslider.min.js"></script>
    <script>
        (function($) {
            //메인 슬라이더
            $('.main-slider').bxSlider({
                auto: true,
                controls: false
            });
        })(jQuery);
    </script>
</body>
</html>