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
		<?php
		if ($validation && $validation->error ( 'namefull' )) {
			echo "<font color=\"red\">" . $validation->error ( 'namefull' ) . "</font>";
		}
		?>
		<br> <input type="text" name="namefull" size="50"
				value="<?php if (!empty($namefull)){ echo $namefull; } ?>">
		</p>

		<p>
			<b>メールアドレス</b>
		<?php
		if ($validation && $validation->error ( 'email' )) {
			echo "<font color=\"red\">" . $validation->error ( 'email' ) . "</font>";
		}
		?>
		<br> <br> <input type="text" name="email" size="50"
				value="<?php if (!empty( $email )){ echo $email; } ?>">
		</p>

		<p>
			<b>ポイント</b>
		<?php
		if ($validation && $validation->error ( 'point' )) {
			echo "<font color=\"red\">" . $validation->error ( 'point' ) . "</font>";
		}
		?>
		<br> <br> <input type="text" name="point" size="50"
				value="<?php if (!empty( $point )){ echo $point; } ?>">
		</p>
		<p>
			<input type="submit" name="submit" value="登録">
		</p>
	</form>
</body>
</html>