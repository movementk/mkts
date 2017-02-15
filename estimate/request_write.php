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
            <div class="request-write">
                <div class="table-wrap">
                    <table class="table table-border">
                        <colgroup>
                            <col style="width: 200px">
                            <col style="width: 970px">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th><label for="u-name">이름</label></th>
                                <td class="name">
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
                                <th><label for="u-email">이메일</label></th>
                                <td class="email">
                                    <div class="form-group">
                                        <input type="text" id="u-email" class="form-control">@
                                        <input type="text" id="domain" class="form-control">
                                        <select>
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
                                <td class="check"><label><input type="checkbox">html</label></td>
                            </tr>
                            <tr>
                                <th>전화번호</th>
                                <td class="phone">
                                    <div class="form-group">
                                        <select>
                                            <option>선택</option>
                                            <option>010</option>
                                        </select>
                                        - 
                                        <label for="phone-1" class="sr-only">두번째 전화번호</label>
                                        <input type="text" id="phone-1" class="form-control">
                                        -
                                        <label for="phone-2" class="sr-only">세번째 전화번호</label>
                                        <input type="text" id="phone-2" class="form-control">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>박스유형</th>
                                <td class="check">
                                    <label><input type="checkbox">일반형</label>
                                    <label><input type="checkbox">특수형</label>
                                    <label><input type="checkbox">주문제작형</label>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="pr-count">예상수량</label></th>
                                <td class="pr-count">
                                    <div class="form-group">
                                        <input type="text" id="pr-count" class="form-control"> 개
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="subject">제목</label></th>
                                <td class="subject">
                                    <div class="form-group">
                                        <input type="text" id="subject" class="form-control">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="u-content">
                                    <label for="u-content">
                                        내용<br><small>(0자/2000자)</small>
                                    </label>
                                </th>
                                <td>
                                    <div class="form-group">
                                        <textarea id="u-content" class="form-control"></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>첨부파일</th>
                                <td class="file">
                                    <div class="form-group">
                                        <input type="file" id="file" class="form-control">
                                        <label for="file">
                                            <i class="icon-upload"><span class="sr-only">첨부파일</span></i>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="captcha">보안문자</label></th>
                                <td class="captcha">
                                    <div class="form-group">
                                        <small>프로그램을 이용한 자동 가입을막기 위해 보안문자를 받고 있습니다.</small>
                                        <input type="text" id="captcha" class="form-control">
                                        <p class="attention">
                                            아래 이미지의 보안문자를 보이는대로 입력해주세요.
                                        </p>
                                        <div class="captcha-area">
                                            <div class="captcha-box">captcha 영역</div>
                                            <p class="captcha-btn">
                                                <a href="#" class="btn" role="button">다른그림보기</a>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-sm btn-beige" role="button">확인</a>
                        <a href="#" class="btn btn-sm btn-default" role="button">취소</a>
                    </p>
                </div>
            </div>
        </div><!--//Container -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>