<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/notice.css" rel="stylesheet">
</head>
<body class="sub notice">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="content">
        <!-- page-header -->
        <div class="page-header">
            <h2>공지사항</h2>
            <p>고객이 만족할때까지 최선을 다하는 기업 명광통상(주)</p>
            <div class="lnb">
                <div class="container">
                    <ul>
                        <li class="active">
                            <a href="#">공지사항</a>
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
                    <li>공지사항</li>
                </ol>
                <small>ONLINE COUNSEL</small>
                <hr>
                <h3 class="title">제품견적의뢰</h3>
                <p>명광통상(주)의 제품견적을 의뢰하실 수 있습니다.</p>
            </div>
            <div class="notice-list">
                <div class="search-form">
                    <form>
                        <div class="form-group">
                            <select class="form-control">
                                <option value="">전체</option>
                            </select>
                            <label for="search-keyword" class="sr-only">검색어</label>
                            <input id="search-keyword" type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </form>
                </div>
                <div class="table-wrap">
                    <table class="table table-border">
                        <colgroup>
                            <col style="width: 85px">
                            <col style="width: 720px">
                            <col style="width: 100px">
                            <col style="width: 130px">
                            <col style="width: 130px">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>번호</th>
                                <th>제목</th>
                                <th>작성자</th>
                                <th>작성일</th>
                                <th>조회수</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="num">30</td>
                                <td class="subject">
                                    <a href="#">안녕하세요. 명광통상입니다. 홈페이지를 개편하였습니다.</a>
                                </td>
                                <td>명광통상</td>
                                <td class="date">2016-10-26</td>
                                <td class="count">123</td>
                            </tr>
                            <tr>
                                <td class="num">29</td>
                                <td class="subject">
                                    <a href="#">위험물용기 설계승인업체</a>
                                </td>
                                <td>명광통상</td>
                                <td class="date">2016-10-24</td>
                                <td class="count">15</td>
                            </tr>
                            <tr>
                                <td class="num">28</td>
                                <td class="subject">
                                    <a href="#">안녕하세요. 명광통상입니다.</a>
                                </td>
                                <td>명광통상</td>
                                <td class="date">2016-10-20</td>
                                <td class="count">88</td>
                            </tr>
                            <tr>
                                <td class="num">27</td>
                                <td class="subject">
                                    <a href="#">안녕하세요. 명광통상입니다.</a>
                                </td>
                                <td>명광통상</td>
                                <td class="date">2016-10-20</td>
                                <td class="count">23</td>
                            </tr>
                            <tr>
                                <td class="num">26</td>
                                <td class="subject">
                                    <a href="#">안녕하세요. 명광통상입니다.</a>
                                </td>
                                <td>명광통상</td>
                                <td class="date">2016-10-20</td>
                                <td class="count">96</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-sm btn-beige" role="button">글쓰기</a>
                        <a href="#" class="btn btn-sm btn-gray" role="button">목록보기</a>
                    </p>
                </div>
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