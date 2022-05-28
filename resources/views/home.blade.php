<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>첫 화면</title>
</head>
<body>
    <p>안녕하세요
@if (Auth::check())
    {{ \Auth::user()->name }}님</p>
    <p><a href="/logout">로그아웃</a></p>
@else
    게스트님</p>
    <p><a href="/login">로그인</a><br><a href="/register">회원등록</a></p>
@endif
</body>
</html>
