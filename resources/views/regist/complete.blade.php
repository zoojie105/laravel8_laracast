<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>등록 완료</title>
</head>
<body>
<form name="registform" action="/register" method="post" id="registform">
    {{ $user->name }} 님을 등록했습니다.
</form>
</body>
</html>
