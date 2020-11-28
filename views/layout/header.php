<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>메인화면</title>
    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="/">메인화면</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=/board>게시판</a>
                    </li>
                    <?php if(!__SIGN) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/user/register">회원가입</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user/login">로그인</a>
                    </li>
                    <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">회원이름</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user/logout">로그아웃</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>

        <script>
            document.querySelector(`li.nav-item > a[href='${location.pathname}']`).classList.add("active");
        </script>