<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/estimate.css" rel="stylesheet">
</head>
<body class="sub estimate">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="content">
        <!-- page-header -->
        <div class="page-header">
            <h2>견적의뢰</h2>
            <p>고객이 만족할때까지 최선을 다하는 기업 명광통상(주)</p>
            <div class="lnb">
                <div class="container">
                    <ul>
                        <li class="active">
                            <a href="#">견적의뢰</a>
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
                    <li>견적의뢰</li>
                </ol>
                <small>ONLINE COUNSEL</small>
                <hr>
                <h3 class="title">제품견적의뢰</h3>
                <p>명광통상(주)의 제품견적을 의뢰하실 수 있습니다.</p>
            </div>
            <div class="request-list">
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
                            <col style="width: 600px">
                            <col style="width: 100px">
                            <col style="width: 130px">
                            <col style="width: 120px">
                            <col style="width: 130px">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>번호</th>
                                <th>제목</th>
                                <th>작성자</th>
                                <th>작성일</th>
                                <th>처리결과</th>
                                <th>조회수</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="num">250</td>
                                <td class="subject">
                                    <a href="#">TV 포장박스 문의 입니다.</a>
                                    <i class="comment-num">1<span class="sr-only">댓글수</span></i>
                                    <i class="attach"><span class="sr-only">첨부파일</span></i>
                                    <i class="icon-key"><span class="sr-only">비밀글</span></i>
                                </td>
                                <td>하동욱</td>
                                <td class="date">2016-10-26</td>
                                <td class="result"><p class="finish">상담완료</p></td>
                                <td class="count">123</td>
                            </tr>
                            <tr>
                                <td class="num">249</td>
                                <td class="subject">
                                    <a href="#">견적문의 드립니다.</a>
                                    <i class="comment-num">2<span class="sr-only">댓글수</span></i>
                                    <i class="icon-key"><span class="sr-only">비밀글</span></i>
                                </td>
                                <td>황사라</td>
                                <td class="date">2016-10-26</td>
                                <td class="result"><p class="ongoing">협의중</p></td>
                                <td class="count">15</td>
                            </tr>
                            <tr>
                                <td class="num">248</td>
                                <td class="subject">
                                    <a href="#">박스 견적 요청합니다.</a>
                                    <i class="comment-num">1<span class="sr-only">댓글수</span></i>
                                    <i class="icon-key"><span class="sr-only">비밀글</span></i>
                                </td>
                                <td>한일</td>
                                <td class="date">2016-10-26</td>
                                <td class="result"><p class="finish">상담완료</p></td>
                                <td class="count">88</td>
                            </tr>
                            <tr>
                                <td class="num">247</td>
                                <td class="subject">
                                    <a href="#">박스 견적문의</a>
                                    <i class="comment-num">1<span class="sr-only">댓글수</span></i>
                                    <i class="attach"><span class="sr-only">첨부파일</span></i>
                                </td>
                                <td>리얼테크</td>
                                <td class="date">2016-10-26</td>
                                <td class="result"><p class="t-request">상담요청</p></td>
                                <td class="count">23</td>
                            </tr>
                            <tr>
                                <td class="num">246</td>
                                <td class="subject">
                                    <a href="#">견적문의 드립니다.</a>
                                    <i class="comment-num">1<span class="sr-only">댓글수</span></i>
                                </td>
                                <td>유재근</td>
                                <td class="date">2016-10-26</td>
                                <td class="result"><p class="finish">상담완료</p></td>
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