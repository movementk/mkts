<!DOCTYPE html>
<html lang="ko">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>명광통상(주)</title>
    <link href="/mobile/assets/fontello/css/fontello.css" rel="stylesheet">
    <link href="/mobile/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/mobile/assets/css/default.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
        <header id="header">
            <div class="container">
                <h1><a href="/mobile/index.php"><img src="/mobile/assets/images/main/logo.png" alt="로고"></a></h1>
                <button type="button" class="btn btn-menu">
                    <i class="icon-menu">
                        <span class="sr-only">메뉴열기</span>
                    </i>
                </button>
            </div>
        </header>
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
                        </div>
                    </a>
                </div>
            </div>
        </main>
        <footer id="footer">
            <ul class="terms-list">
                <li><a href="#">이용약관</a></li>
                <li><a href="#">개인정보취급방침</a></li>
                <li><a href="#">이메일무단수집거부</a></li>
            </ul>
            <div class="company">
                <address>명광통상(주) 경기도 안산시 단원구 신원로 66(성곡동)</address>
                <ul>
                    <li>
                        <dl>
                            <dt>전화번호</dt>
                            <dd><a href="tel:0314038724">031-403-8724</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>팩스번호</dt>
                            <dd>031-403-8668</dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>대표이사</dt>
                            <dd>윤영구</dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>사업자등록번호</dt>
                            <dd>111-81-36198</dd>
                        </dl>
                    </li>
                </ul>
                <p class="copyright">
                    <b>(C) 2016 MYUNGKWANG CO.,LTD ALL RIGHT RESERVED.</b><br>
                    <a href="#">SITE BY MOVEMENTK GROUP</a>
                </p>
            </div>
        </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/mobile/assets/bootstrap/js/bootstrap.min.js"></script>
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