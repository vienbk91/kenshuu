<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Contact</title>
</head>
<body>
	<h1>お問い合わせ</h1>
	<form action="/member/confirm" method="post">
		<p>
			<b>名前</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="namefull" size="50" value="<?php if (isset($namefull)) { echo $namefull; } ?>">
			<br>
			<?php
			if ($validation && $validation->error('namefull')) {
				echo "<font color=\"red\">" . $validation->error('namefull') . "</font>";
			}
			?>
		</p>
		
		<p>
			<b>メール</b>&nbsp;&nbsp;&nbsp;
			<input type="text" name="email" size="50" value="<?php if (isset($email)) { echo $email; } ?>">
			<br>
			<?php
			if ($validation && $validation->error('email')) {
				echo "<font color=\"red\">" . $validation->error('email') . "</font>";
			}
			?>
		</p>
		
		<p>
			<b>内容</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<textarea rows="5" cols="50" name="comment"><?php if (isset($comment)) { echo $comment; }?></textarea>
			<br>
			<?php
			if ($validation && $validation->error('comment')) {
				echo "<font color=\"red\">" . $validation->error('comment') . "</font>";
			}
			?>
		</p>
		
		<p>
			<input type="submit" name="submit" value="送信する">
		</p>
	</form>
</body>
</html>