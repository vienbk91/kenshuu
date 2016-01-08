<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Register Form</title>
</head>
<body>
	<h1>会員登録</h1>
	<form action="/member/register" method="post">
	<p>
		<b>氏名</b>
		<br>
		<input type="text" name="namefull" size="50" value="">
	</p>
	
	<p>
		<b>メールアドレス</b>
		<br>
		<input type="text" name="email" size="50" value="">
	</p>
	
	<p>
		<b>ポイント</b>
		<br>
		<input type="text" name="point" size="50" value="">
	</p>
	<p>
		<input type="submit" name="submit" value="登録">
	</p>
	</form>
</body>
</html>