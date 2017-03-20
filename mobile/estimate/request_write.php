<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/estimate.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main class="sub estimate">
        <section class="request-write">
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
                    <form action="#">
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <colgroup>
                                    <col style="width: 35%">
                                    <col style="width: 65%">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th><label for="u-name">이름</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-name" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-pw">비밀번호</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="password" id="u-pw" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="e-mail"><label for="e-mail">이메일</label></th>
                                        <td class="e-mail">
                                            <div class="form-group">
                                                <input type="email" id="e-mail" class="form-control"> @
                                                <label for="e-mail2" class="sr-only">도메인</label>
                                                <input type="email" id="e-mail2" class="form-control">
                                                <select class="form-control">
                                                    <option>선택하세요</option>
                                                    <option>naver.com</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="home-page">홈페이지</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="home-page" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>옵션</th>
                                        <td>
                                            <div class="form-group">
                                                <label><input type="checkbox"> html</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="phone">전화번호</label></th>
                                        <td class="phone">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>선택</option>
                                                    <option>010</option>
                                                </select> -
                                                <input type="text" id="phone" class="form-control"> - 
                                                <label for="phone-2" class="sr-only">마지막번호</label>
                                                <input type="text" id="phone-2" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="box-type">박스유형</th>
                                        <td>
                                            <div class="form-group">
                                                <label><input type="checkbox"> 일반형</label>
                                                <label><input type="checkbox"> 특수형</label>
                                                <label><input type="checkbox"> 주문제작형</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="box-count">예상수량</label></th>
                                        <td class="count">
                                            <div class="form-group">
                                                <input type="text" id="box-count" class="form-control"> 개
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="subject">제목</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="subject" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="box-content"><label for="box-content">내용<br><i>0자/2000자</i></label></th>
                                        <td class="box-content">
                                            <div class="form-group">
                                                <textarea id="box-content" class="form-control"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>첨부파일</th>
                                        <td class="file">
                                            <div class="form-group">
                                                <input type="file" id="file" class="form-control">
                                                <label for="file">
                                                    <i class="icon-upload">
                                                        <span class="sr-only">파일올리기</span>
                                                    </i>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="captcha"><label for="captcha">보안문자</label></th>
                                        <td class="captcha">
                                            <p class="summary">프로그램을 이용한 자동 가입을 막기위해 보안문자를 받고 있습니다.</p>
                                            <div class="form-group">
                                                <input type="text" id="captcha" class="form-control">
                                            </div>
                                            <p class="attention">아래 이미지의 보안문자를 보이는 대로 입력해주세요.</p>
                                            <div class="captcha-box">
                                                captcha영역
                                            </div>
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-captcha" role="button">
                                                        <i class="icon-arrows-cw"></i>다른그림보기
                                                    </a>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-md btn-gold">확인</button>
                                <a href="#" class="btn btn-md btn-white" role="button">취소</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>