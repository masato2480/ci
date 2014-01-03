<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="<?=base_url();?>css/form.css" type="text/css" />
<title>ニュース追加</title>
</head>
<body>
<div id="main">
<div class="center">
<div class="image_left">
<a href="newslist"><img src="<?=base_url();?>images/icons/back_button.png" alt="back_button" /></a>
</div>
<form action="verify_edit" method="post">
■タイトル<br>
<input type="text" name="title" value=<?=$record['title']?>/>
</form>
</div>
</div>
</body>
</html>