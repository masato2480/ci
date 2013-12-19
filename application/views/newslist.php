<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ja" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?=base_url();?>css/form.css" type="text/css" />
<title>News List</title>
</head>
<body>
<?=$this->load->view('form_header');?>
<div id="main">
<div class="title_banner">
<img src="<?=base_url();?>images/icons/rexvirt_logo3.png" alt="login form" width="580" height="70" />
</div>
<div class="center">
<br>
<br>
<input type="submit" name="new" value="New" style="width: 200px;">
<input type="submit" name="edit" value="Edit" style="width: 200px;">
<table border="1" bordercolor="#DCDCDC" style="margin-left: auto; margin-right: auto;">
<br>
<br>
<tr bgcolor="#cccccc">
<th><br></th>
<th>ID</th>
<th>TITLE</th>
<th>CONTENT</th>
<th>REGISTER</th>
<th>OPEN</th>
</tr>
<?php foreach($records as $row): ?>
<tr align=center>
<td><?=$row['news_id']?></td>
<td><?=$row['news_title']?></td>
<td><?=$row['news_content']?></td>
<td><?=$row['news_register']?></td>
<td><?=$row['news_open']?></td>
</tr>
<?php endforeach; ?>
</table>
</div>
</div>
<?=$this->load->view('ci_footer');?>
</body>
</html>