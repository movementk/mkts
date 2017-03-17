<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/production.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="sub production">
        <section class="facilities">
            <!-- page-header -->
            <div class="page-header">
                <h2>생산</h2>
                <p>책임과 신뢰로 고객을 먼저 생각하는 명광통상(주)</p>
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        주요설비현황<span class="icon-drop"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="/mobile/production/facilities.php">주요설비현황</a></li>
                        <li><a href="/mobile/production/product.php">제품소개</a></li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="section-header">
                    <small>EQUIPMENT CONDITION</small>
                    <hr>
                    <h3>주요설비현황</h3>
                </div>
                <div class="section-content">
                    <h4 class="sub-title">명광통산(주)의<br>주요설비현황 입니다</h4>
                    <ul class="product-slider">
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/production/product_slide_img01.jpg" class="img-responsive" alt="Flexo Print Sticker (4색)">
                                <figcaption>Flexo Print Sticker (4색)</figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/production/product_slide_img02.jpg" class="img-responsive" alt="양면Corrugator">
                                <figcaption>양면Corrugator</figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/production/product_slide_img03.jpg" class="img-responsive" alt="자동 Die Cutter">
                                <figcaption>자동 Die Cutter</figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/production/product_slide_img04.jpg" class="img-responsive" alt="Flexo Print Sticker (4색)">
                                <figcaption>4면접착기</figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/assets/images/production/product_slide_img05.jpg" class="img-responsive" alt="Flexo Print Sticker (4색)">
                                <figcaption>Flexo Print Sticker (4색)</figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <script src="/assets/jquery.bxslider/jquery.bxslider.min.js"></script>
    <script>
        (function($) {
            //메인 슬라이더
            $('.product-slider').bxSlider({
                auto: true,
                controls: false
            });
        })(jQuery);
    </script>
</body>
</html>