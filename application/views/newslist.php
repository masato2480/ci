<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="<?=base_url();?>css/form.css" type="text/css" />
<title>ニュースリスト一覧</title>
</head>
<body>
<div id="main">
<div class="center">
<img src="<?=base_url();?>images/icons/news-banner.jpg" alt="ニュースバナー" />
<br/><br/>
<a href="addnews"><img src="<?=base_url();?>images/icons/add_button.jpg" alt="addnews" style="margin-bottom:10px;" /></a>
<table border="1" bordercolor="#DCDCDC" class="defineTable">
<tr bgcolor="#778899">
<th></th>
<th style="width: 100px;">タイトル</th>
<th style="width: 300px;">内容</th>
<th>登録変更日</th>
<th>公開日</th>
<th style="width: 80px;">公開条件</th>
</tr>
<?php foreach($records as $row): ?>
<tr align=center>
<td><a href="/ci/newslist/editnews?c=newslist&m=editnews&id=<?= $row['id']?>"><img src="<?=base_url();?>images/icons/edit_button.jpg" /></a></td>
<td style="width: 100px; word-break: break-all;"><?=$row['title']?></td>
<td style="width: 300px; word-break: break-all;"><?=$row['content']?></td>
<td><?=$row['up_time']?></td>
<td><?=$row['open_time']?></td>
<?php if($row['flag'] == '1'): ?>
<td>公開</td>
<?php elseif ($row['flag'] == '0'): ?>
<td>非公開</td>
<?php endif; ?>
</tr>
<?php endforeach; ?>
</table>
<br>
<a href="/ci/newslist/logout"><img src="<?=base_url();?>images/icons/loginout.png" alt="loginout"  style="margin-bottom:15px;" /></a>
</div>
</div>
</body>
</html>