<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Confirm Page</title>
<link rel="stylesheet" type="text/css" href="../kenshuu/css/kenshuu.css" />
</head>
<body>
	<h1>会員登録が完成しました。</h1>
	<table border="0">
		<tr>
			<td><b>氏名 : </b></td>
			<td><?php if (!empty($namefull)) { echo $namefull; } ?></td>
		</tr>
		<tr>
			<td><b>メールアドレス: </b></td>
			<td><?php if (!empty($email)) { echo $email; }  ?></td>
		</tr>
		<tr>
			<td><b>ポイント: </b></td>
			<td><?php if (!empty($point)) { echo $point; }  ?></td>
		</tr>
	</table>
	<br>
	<p>
		<a href="/member/search/">Go to Member Search Page</a>
	</p>
</body>
</html>