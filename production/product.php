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
                        <li>
                            <a href="/production/facilities.php">주요설비현황</a>
                        </li>
                        <li class="active">
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
                    <li>제품소개</li>
                </ol>
                <small>INTRODUCE</small>
                <hr>
                <h3 class="title">제품소개</h3>
                <p>명광통상(주)의 주요제품현황 입니다.</p>
            </div>
            <div class="product">
                <ul class="row">
                    <li class="col-xs-4">
                        <a href="#">
                            <p class="item">
                                <img src="/assets/images/production/product_img01.jpg" class="img-responsive" alt="상품 이미지">
                            </p>
                            <div class="details">
                                <h4>맥스웰하우스</h4>
                                <p class="summary">맥스웰하우스 박스 제작 사진입니다.</p>
                                <p class="date">2016.10.21</p>
                            </div>
                        </a>
                    </li>
                    <li class="col-xs-4">
                        <a href="#">
                            <p class="item">
                                <img src="/assets/images/production/product_img02.jpg" class="img-responsive" alt="상품 이미지">
                            </p>
                            <div class="details">
                                <h4>MARATHON</h4>
                                <p class="summary">MARATHON 박스 제작 사진입니다.</p>
                                <p class="date">2016.10.21</p>
                            </div>
                        </a>
                    </li>
                    <li class="col-xs-4">
                        <a href="#">
                            <p class="item">
                                <img src="/assets/images/production/product_img03.jpg" class="img-responsive" alt="상품 이미지">
                            </p>
                            <div class="details">
                                <h4>이디야에스프레소</h4>
                                <p class="summary">이디야에스프레소 박스 제작 사진입니다.</p>
                                <p class="date">2016.10.21</p>
                            </div>
                        </a>
                    </li>
                    <li class="col-xs-4">
                        <a href="#">
                            <p class="item">
                                <img src="/assets/images/production/product_img01.jpg" class="img-responsive" alt="상품 이미지">
                            </p>
                            <div class="details">
                                <h4>맥스웰하우스</h4>
                                <p class="summary">맥스웰하우스 박스 제작 사진입니다.</p>
                                <p class="date">2016.10.21</p>
                            </div>
                        </a>
                    </li>
                    <li class="col-xs-4">
                        <a href="#">
                            <p class="item">
                                <img src="/assets/images/production/product_img02.jpg" class="img-responsive" alt="상품 이미지">
                            </p>
                            <div class="details">
                                <h4>MARATHON</h4>
                                <p class="summary">MARATHON 박스 제작 사진입니다.</p>
                                <p class="date">2016.10.21</p>
                            </div>
                        </a>
                    </li>
                    <li class="col-xs-4">
                        <a href="#">
                            <p class="item">
                                <img src="/assets/images/production/product_img03.jpg" class="img-responsive" alt="상품 이미지">
                            </p>
                            <div class="details">
                                <h4>이디야에스프레소</h4>
                                <p class="summary">이디야에스프레소 박스 제작 사진입니다.</p>
                                <p class="date">2016.10.21</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <nav class="paging" aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <i class="icon-angle-double-left">
                                    <span class="sr-only">double-Previous</span>
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="angle-left" aria-label="Previous">
                                <i class="icon-angle-left" aria-hidden="true">
                                    <span class="sr-only">Previous</span>
                                </i>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" class="angle-right" aria-label="Next">
                                <i class="icon-angle-right" aria-hidden="true">
                                    <span class="sr-only">Next</span>
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="Next">
                                <i class="icon-angle-double-right" aria-hidden="true">
                                    <span class="sr-only">double-Next</span>
                                </i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!--//Container -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>