<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Search Page</title>
</head>
<h1>会員検索</h1>
<form action="/member/searchresult" method="post">
	<b>検索キーワード入力</b>
	<?php
	if (! empty ( $validation ) && $validation->error('searchkey')) {
		echo "<font color=\"red\" >" . $validation->error('searchkey') . "</font>";
	}
	?>
	<br>
	<br> <input type="text" name="searchkey" placeholder="検索キーワード..." size="50" value="<?php if (!empty($searchkey)) {echo $searchkey;}  ?>">
	<br>
	<br> <input type="submit" name="searchbtn" value="検索">
</form>
<p>
<a href="/member/">Back to Register Page</a>
</p>
</html>