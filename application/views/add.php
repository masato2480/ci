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
<img border="0" src="<?=base_url();?>images/icons/add_button.jpg" width="30" height="30" alt="add_button" />
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
<td><img border="0" src="<?=base_url();?>images/icons/edit_button.jpg" width="20" height="20" alt="edit_button" />
<td><?=$row['id']?></td>
<td><?=$row['title']?></td>
<td><?=$row['content']?></td>
<td><?=$row['registered']?></td>
<td><?=$row['open']?></td>
</tr>
<?php endforeach; ?>
</table>
<br>
<br>
</div>
</div>
<?=$this->load->view('ci_footer');?>
</body>
</html>