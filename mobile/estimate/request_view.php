<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/estimate.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="sub estimate">
        <section class="request-view">
            <!-- page-header -->
            <div class="page-header">
                <h2>견적의뢰</h2>
                <p>고객들의 만족할때까지 최선을 다하는기업 명광통상(주)</p>
            </div>
            <div class="container">
                <div class="section-header">
                    <small>ONLINE COUNSEL</small>
                    <hr>
                    <h3>제품견적의뢰</h3>
                </div>
                <div class="section-content">
                    <h4 class="sub-title">명광통상(주)의<br>제품견적을 의뢰하실 수 있습니다.</h4>
                    <article class="view">
                        <div class="article-header">
                            <h5>견적문의 립니다.</h5>
                        </div>
                        <div class="article-content">
                            <ul class="view-info">
                                <li>
                                    <dl>
                                        <dt>등록일</dt>
                                        <dd>2016-10-14</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>작성자</dt>
                                        <dd>sqsq</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>조회수</dt>
                                        <dd>3</dd>
                                    </dl>
                                </li>
                            </ul>
                            <div class="user-info">
                                <dl class="box-type">
                                    <dt>박스유형</dt>
                                    <dd>
                                        <label><input type="checkbox"> 일반형</label>
                                        <label><input type="checkbox"> 특수형</label>
                                        <label><input type="checkbox"> 주문제작형</label>
                                    </dd>
                                </dl>
                                <ul>
                                    <li>
                                        <dl>
                                            <dt>예상수량</dt>
                                            <dd>1개</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt>전화번호</dt>
                                            <dd>010-4033-8724</dd>
                                        </dl>
                                    </li>
                                </ul>
                                <dl class="email">
                                    <dt>이메일</dt>
                                    <dd>myungkwang@mk.com</dd>
                                </dl>
                            </div>
                            <div class="view-content">
                                안녕하세요~ <br>
                                TV 포장 박스 문의 입니다.<br>
                                내용 - 
                            </div>
                            <div class="file">
                                <dl>
                                    <dt>첨부파일</dt>
                                    <dd><a href="#">20161026_img.jpg<i class="capacity">276.4 KB</i></a></dd>
                                </dl>
                            </div>
                        </div>
                    </article>
                    <div class="btn-area">
                        <p>
                            <a href="/mobile/estimate/request_write.php" class="btn btn-sm btn-gold" role="button">글쓰기</a>
                            <a href="#" class="btn btn-sm btn-white" role="button">수정하기</a>
                            <a href="#" class="btn btn-sm btn-white" role="button">삭제</a>
                        </p>
                        <p>
                            <a href="/mobile/estimate/request_list.php" class="btn btn-lg btn-gray" role="button">목록으로</a>
                        </p>
                    </div>
                    <div class="comment-write">
                        <form action="#">
                            <div class="form-group">
                                <label for="comment" class="sr-only">댓글입력</label>
                                <input type="text" id="comment" class="form-control">
                                <button type="submit" class="btn btn-default btn-gray">확인</button>
                            </div>
                        </form>
                    </div>
                    <ul class="comment-list">
                        <li>
                            <dl>
                                <dt>명광통상</dt>
                                <dd class="date">2016.10.10</dd>
                            </dl>
                            <ul>
                                <li><a href="#">답글</a></li>
                                <li><a href="#">수정</a></li>
                                <li><a href="#">삭제</a></li>
                            </ul>
                            <div class="comment-view">
                                댓글을 입력하세요. 댓글을 입력하세요. 댓글을 입력하세요.
                            </div>
                        </li>
                        <li class="reply">
                            <dl>
                                <dt>명광통상</dt>
                                <dd class="date">2016.10.10</dd>
                            </dl>
                            <ul>
                                <li><a href="#">답글</a></li>
                                <li><a href="#">수정</a></li>
                                <li><a href="#">삭제</a></li>
                            </ul>
                            <div class="comment-view">
                                댓글을 입력하세요. 댓글을 입력하세요. 댓글을 입력하세요.
                            </div>
                        </li>
                        <li>
                            <dl>
                                <dt>명광통상</dt>
                                <dd class="date">2016.10.10</dd>
                            </dl>
                            <ul>
                                <li><a href="#">답글</a></li>
                                <li><a href="#">수정</a></li>
                                <li><a href="#">삭제</a></li>
                            </ul>
                            <div class="comment-view">
                                댓글을 입력하세요. 댓글을 입력하세요. 댓글을 입력하세요.
                            </div>
                        </li>
                        <li>
                            <dl>
                                <dt>명광통상</dt>
                                <dd class="date">2016.10.10</dd>
                            </dl>
                            <ul>
                                <li><a href="#">답글</a></li>
                                <li><a href="#">수정</a></li>
                                <li><a href="#">삭제</a></li>
                            </ul>
                            <div class="comment-view">
                                댓글을 입력하세요. 댓글을 입력하세요. 댓글을 입력하세요.
                            </div>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>