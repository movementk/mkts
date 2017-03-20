<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/estimate.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="sub estimate">
        <section class="pw-confirm">
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
                    <div class="confirm">
                        <figure>
                            <img src="/mobile/assets/images/estimate/lock_bg.png" alt="비밀번호확인">
                            <figcaption>
                                <h5>비밀번호확인</h5>
                                <i>****</i>
                                <p>이 게시물의패스워드를 입력하십시오.</p>
                            </figcaption>
                        </figure>
                        <div class="confirm-form">
                            <form action="#">
                                <div class="form-group">
                                    <label for="u-pw" class="sr-only">비밀번호 입력</label>
                                    <input type="password" id="u-pw" class="form-control" placeholder="비밀번호">
                                    <button type="button" class="btn btn-lg" role="button">확인</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>