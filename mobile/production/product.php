<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/production.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="sub production">
        <section class="product">
            <!-- page-header -->
            <div class="page-header">
                <h2>생산</h2>
                <p>책임과 신뢰로 고객을 먼저 생각하는 명광통상(주)</p>
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        제품소개<span class="icon-drop"></span>
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
                    <h4 class="sub-title">명광통산(주)의<br>주요제품현황 입니다</h4>
                    <ul class="product-list">
                        <li>
                            <a href="#">
                                <p class="product-img">
                                    <img src="/mobile/assets/images/production/product_img02.jpg" class="img-responsive" alt="COWAY">
                                </p>
                                <div class="details">
                                    <h5>COWAY</h5>
                                    <p class="summary">COWAY 박스 제작 사진입니다.</p>
                                    <p class="date"><i class="icon-clock-alt"></i>2016.10.21</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p class="product-img">
                                    <img src="/mobile/assets/images/production/product_img01.jpg" class="img-responsive" alt="COWAY">
                                </p>
                                <div class="details">
                                    <h5>POST 아몬드 후레이크</h5>
                                    <p class="summary">포스트아몬드후레이크 박스 제작 사진입니다.</p>
                                    <p class="date"><i class="icon-clock-alt"></i>2016.10.21</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p class="product-img">
                                    <img src="/mobile/assets/images/production/product_img02.jpg" class="img-responsive" alt="COWAY">
                                </p>
                                <div class="details">
                                    <h5>COWAY</h5>
                                    <p class="summary">COWAY 박스 제작 사진입니다.</p>
                                    <p class="date"><i class="icon-clock-alt"></i>2016.10.21</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p class="product-img">
                                    <img src="/mobile/assets/images/production/product_img03.jpg" class="img-responsive" alt="COWAY">
                                </p>
                                <div class="details">
                                    <h5>맥스웰하우스</h5>
                                    <p class="summary">맥스웰하우스 박스 제작 사진입니다.</p>
                                    <p class="date"><i class="icon-clock-alt"></i>2016.10.21</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p class="product-img">
                                    <img src="/mobile/assets/images/production/product_img04.jpg" class="img-responsive" alt="COWAY">
                                </p>
                                <div class="details">
                                    <h5>MARATHON</h5>
                                    <p class="summary">MARATHON 박스 제작 사진입니다.</p>
                                    <p class="date"><i class="icon-clock-alt"></i>2016.10.21</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <nav class="paging" aria-label="Page navigation">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-double-left"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-left"></i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>