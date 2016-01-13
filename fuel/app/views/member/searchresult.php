<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Search Result</title>
<link rel="stylesheet" type="text/css" href="../kenshuu/css/kenshuu.css" />
</head>
<h1>検索結果</h1>
<?php  if (!empty($member)) { ?>
<table>
	<tr>
		<td><b>氏名</b></td>
		<td><b>メールアドレス</b></td>
		<td><b>ポイント</b></td>
	</tr>
<?php
	foreach ( $member as $item ) {
		echo "<tr><td>" . $item['namefull'] . "</td><td>" . $item['email'] . "</td><td>" . $item['point'] . "</td><tr>";
	}
?>
</table>
<?php
} else {
	echo "結果が見つけませんでした。";
}
?>
<br><br>
<a href="/member/search/"> Back to Search Page</a>
<br><br>
<a href="/member/"> Back to Register Page</a>
</html>