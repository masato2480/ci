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
<form action="verify_add" method="post">
■タイトル<br>
<?php echo form_input(array('name'=>'title','value'=>set_value('title'),'size'=>50)); ?><font color="red"><?php echo form_error('title'); ?></font><br>
■内容<br>
<?php echo form_textarea(array('name'=>'content','value'=>set_value('content'),'cols'=>80,'rows'=>10)); ?><font color="red"><?php echo form_error('content'); ?></font><br>
■公開日（例：2014-01-01 01:02:03)<br>
<?php echo form_input(array('name'=>'open_time','value'=>set_value('open_time'),'size'=>30)); ?><font color="red"><?php echo form_error('open_time'); ?></font><br>
■公開条件（公開：1, 非公開：0）
<br/>
<?php echo form_radio(array('name'=>'flag','value'=>1)); ?>公開<br>
<?php echo form_radio(array('name'=>'flag','value'=>0)); ?>非公開<br>
<font color="red"><?php echo form_error('flag'); ?></font><br>
<input type="submit" value='add'><br/>
<?php echo form_hidden('id', set_value('id'));?>
</form>
</div>
</div>
</body>
</html>