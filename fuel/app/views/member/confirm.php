<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Contact</title>
</head>
<body>
	<h1>お問い合わせ</h1>
	
	<h4>以下の内容を良ければ、送信お願いします。</h4>
	<form action="/member/send" method="post">
		<p>
			<b>名前</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<?php 
			if (isset($namefull)) { 
				echo $namefull; 
			} 
			?>
			<br>
		</p>
		
		<p>
			<b>メール</b>&nbsp;&nbsp;&nbsp;
			<?php 
			if (isset($email)) { 
				echo $email; 
			} 
			?>
			<br>
		</p>
		
		<p>
			<b>内容</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<?php 
			if (isset($comment)) { 
				echo $comment; 
			}
			?>
		</p>
		
		<p>
			<input type="submit" name="send" value="送信する">&nbsp;&nbsp;&nbsp;
			<input type="submit" name="back" value="編集">
		</p>
	</form>
</body>
</html>