<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="<?=base_url();?>css/form.css" type="text/css" />
<title>ニュースリスト一覧</title>
</head>
<body>
<div id="main">
<div class="center">
<br>
<form action="editnews" method="post">
<a href="addnews"><img src="<?=base_url();?>images/icons/add_button.jpg" alt="loginout" /></a>
<input type="submit" value="" id="image-btn" />
<a href="logout"><img src="<?=base_url();?>images/icons/loginout.png" alt="loginout" /></a>
<table border="1" bordercolor="#DCDCDC" class="defineTable">
<tr bgcolor="#cccccc">
<th>EDIT</th>
<th style="width: 100px;">TITLE</th>
<th style="width: 300px;">CONTENT</th>
<th>REGISTER</th>
<th>OPEN</th>
<th>FLAG</th>
</tr>
<?php foreach($records as $row): ?>
<tr align=center>
<td><input type="radio" name="id" value=<?=$row['id']?> /></td>
<td style="width: 100px; word-break: break-all;"><?=$row['title']?></td>
<td style="width: 300px; word-break: break-all;"><?=$row['content']?></td>
<td><?=$row['up_time']?></td>
<td><?=$row['open_time']?></td>
<td><?=$row['flag']?></td>
</tr>
<?php endforeach; ?>
</table>
<br>
</div>
</div>
</body>
</html>