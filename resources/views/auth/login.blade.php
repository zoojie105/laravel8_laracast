<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>로그인 등록폼</title>
</head>
<body>
@isset($errors)
    <p style="color:red">{{ $errors->first('message') }}</p>
@endisset
<form name="loginform" action="/login" method="post">
    {{ csrf_field() }}
<dl>
    <dt>메일주소:</dt>
    <dd><input type="text" name="email" size="30" value="{{ old('email') }}"></dd>

    <dt>비밀번호:</dt>
    <dd><input type="password" name="password" size="30"></dd>
</dl>

<button type="submit" name="action" value="send">로그인</button>
</form>
</body>
</html>
