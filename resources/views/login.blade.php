<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
</head>
<body>
    <h1>會員登入</h1>
    <form action='/login' method='post'>
        @csrf
        帳號 : <input type="text" name="acc" id=""><br>
        密碼 : <input type="password" name="pw" id=""><br>
        <input type="submit" value="登入">
    </form>
</body>
</html>