<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/notice.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="sub notice">
        <section class="notice-list">
            <!-- page-header -->
            <div class="page-header">
                <h2>공지사항</h2>
                <p>고객들의 만족할때까지 최선을 다하는기업 명광통상(주)</p>
            </div>
            <div class="container">
                <div class="section-header">
                    <small>NOTICE</small>
                    <hr>
                    <h3>공지사항</h3>
                </div>
                <div class="section-content">
                    <h4 class="sub-title">명광통상(주)의<br>제품견적을 의뢰하실 수 있습니다.</h4>
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
                    <ul class="list">
                        <li>
                            <a href="#">안녕하세요. 명광통상입니다.<br>홈페이지를 개편하였습니다.</a>
                            <dl>
                                <dt>명광통상</dt>
                                <dd>2016-10-24</dd>
                            </dl>
                        </li>
                        <li>
                            <a href="#">위험물용기 설계승인업체</a>
                            <dl>
                                <dt>명광통상</dt>
                                <dd>2016-10-24</dd>
                            </dl>
                        </li>
                        <li>
                            <a href="#">안녕하세요. 명광통상입니다.</a>
                            <dl>
                                <dt>명광통상</dt>
                                <dd>2016-10-24</dd>
                            </dl>
                        </li>
                        <li>
                            <a href="#">안녕하세요. 명광통상입니다.</a>
                            <dl>
                                <dt>명광통상</dt>
                                <dd>2016-10-24</dd>
                            </dl>
                        </li>
                        <li>
                            <a href="#">안녕하세요. 명광통상입니다.</a>
                            <dl>
                                <dt>명광통상</dt>
                                <dd>2016-10-24</dd>
                            </dl>
                        </li>
                    </ul>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-md btn-gold" role="button">글쓰기</a>
                            <a href="#" class="btn btn-md btn-gray" role="button">목록보기</a>
                        </p>
                    </div>
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