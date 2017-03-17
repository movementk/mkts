<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="sub">
        <!-- section-header 공통 -->
        <section>
            <!-- page-header -->
            <div class="page-header">
                <h2>회사소개</h2>
                <p>고객들의 가슴속에 살아 숨쉬는기업 명광통상(주)</p>
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        인사말<span class="icon-drop"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">인사말</a></li>
                        <li><a href="#">연혁</a></li>
                        <li><a href="#">조직도</a></li>
                        <li><a href="#">찾아오시는 길</a></li>
                    </ul>
                </div>
            </div>
            <!-- Content Start -->
            <div class="container">
                <div class="section-header">
                    <small>CEO MESSAGE</small>
                    <hr>
                    <h3>CEO 인사말</h3>
                </div>
            </div>
        </section>

        <!-- 검색폼 -->
        <div style="margin-top: 30px;"></div>
        <div class="search-form">
            <form action="#">
                <div class="form-group">
                    <select class="form-control">
                        <option>전체</option>
                    </select>
                    <label for="search" class="sr-only">검색하기</label>
                    <input type="text" id="search" class="form-control">
                </div>
                <button type="submit" class="btn btn-search">
                    <i class="icon-search">
                        <span class="sr-only">검색버튼</span>
                    </i>
                </button>
            </form>
        </div>

        <!-- 페이징 -->
        <div style="margin-top: 30px;"></div>
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

        <!-- 버튼종류 -->
        <div style="margin-top: 30px;"></div>
        <div class="btn-area">
            <p>
                <a href="#" class="btn btn-md btn-gold" role="button">글쓰기</a>
                <a href="#" class="btn btn-md btn-gray" role="button">목록보기</a>
                <a href="#" class="btn btn-md btn-white" role="button">취소</a>
            </p>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>