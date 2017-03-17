<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/main.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content">
        <ul class="visual-slide">
            <li><img src="/mobile/assets/images/main/main_visual_img.jpg" class="img-responsive" alt=""></li>
            <li><img src="/mobile/assets/images/main/main_visual_img.jpg" class="img-responsive" alt=""></li>
            <li><img src="/mobile/assets/images/main/main_visual_img.jpg" class="img-responsive" alt=""></li>
        </ul>
        <div class="information">
            <div class="product">
                <a href="#">
                    <div class="info-text">
                        <small>Introduction</small>
                        <h2>PRODUCT</h2>
                        <p>명광통상(주)의 주요제품현황 입니다.</p>
                    </div>
                </a>
            </div>
            <div class="counsel">
                <a href="#">
                    <div class="info-text">
                        <small>Online</small>
                        <h2>COUNSEL</h2>
                        <p>명광통상(주)에 제품 견적을<br>의리하실수 있습니다.</p>
                    </div>
                </a>
            </div>
            <div class="location">
                <a href="#">
                    <div class="info-text">
                        <small>Customer Center</small>
                        <h2>LOCATION</h2>
                        <hr>
                        <p class="addr">경기도 안산시 단원구<br>신원로 66(성곡동)</p>
                        <p class="call">031.403.8724</p>
                        <dl class="fax">
                            <dt>Fax</dt>
                            <dd>031.403.8668</dd>
                        </dl>
                    </div>
                </a>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <script src="/mobile/assets/jquery.bxslider/jquery.bxslider.min.js"></script>
    <script>
        (function($) {
            //메인 슬라이더
            $('.visual-slide').bxSlider({
                auto: true,
                controls: false
            });
        })(jQuery);
    </script>
</body>
</html>