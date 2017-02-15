<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/production.css" rel="stylesheet">
</head>
<body class="sub production">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="content">
        <!-- page-header -->
        <div class="page-header">
            <h2>생산</h2>
            <p>책임과 신뢰로 고객을 먼저 생각하는 명광통상(주)</p>
            <div class="lnb">
                <div class="container">
                    <ul>
                        <li class="active">
                            <a href="/production/facilities.php">주요설비현황</a>
                        </li>
                        <li>
                            <a href="/production/product.php">제품소개</a>
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
                    <li>생산</li>
                    <li>주요설비현황</li>
                </ol>
                <small>EQUIPMENT CONDITION</small>
                <hr>
                <h3 class="title">주요설비현황</h3>
                <p>명광통상(주)의 주요설비현황 입니다.</p>
            </div>
            <div class="facilities">
                <div class="machine">
                    <ul class="machine-list">
                        <li>
                            <a href="#">
                                <img src="/assets/images/production/test03.jpg" alt="">
                            </a>
                            <p>Flexo Print Sticker (4색)</p>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/assets/images/production/test02.jpg" alt="">
                            </a>
                            <p>Flexo Print Sticker (4색)</p>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/assets/images/production/test02.jpg" alt="">
                            </a>
                            <p>Flexo Print Sticker (4색)</p>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/assets/images/production/test02.jpg" alt="">
                            </a>
                            <p>Flexo Print Sticker (4색)</p>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/assets/images/production/test02.jpg" alt="">
                            </a>
                            <p>Flexo Print Sticker (4색)</p>
                        </li>
                    </ul>
                </div>
        </div><!--//Container -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/jquery.bxslider/jquery.bxslider.min.js"></script>
    <script>
        (function($) {
            var machineSlider = $('.machine-list').bxSlider({
                slideWidth: 300,
                minSlides: 1,
                maxSlides: 3,
                moveSlides: 1,
                slideMargin: 30,
                nextText: '<span></span>',
                prevText: '<span></span>',
                onSlideAfter: function($slideElement, oldIndex, newIndex) {
                    $('.machine-list li').removeClass('active');
                    $slideElement.next().addClass('active');
                }
            });
        })(jQuery);
    </script>
</body>
</html>