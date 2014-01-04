<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="<?=base_url();?>css/form.css" type="text/css" />
<title>ニュース編集</title>
</head>
<body>
<div id="main">
<div class="center">
<div class="image_left">
<a href="newslist"><img src="<?=base_url();?>images/icons/back_button.png" alt="back_button" /></a>
</div>
<form action="verify_edit" method="post">
<?php $record=$record[0] ?>
■タイトル<br>
<?php echo form_input(array('name'=>'title','value'=>set_value('title',$record['title']),'size'=>50)); ?><font color="red"><?php echo form_error('title'); ?></font><br>
■内容<br>
<?php echo form_textarea(array('name'=>'content','value'=>set_value('content',$record['content']),'cols'=>80,'rows'=>10)); ?><font color="red"><?php echo form_error('content'); ?></font><br>
■公開日（例：2014-01-01 01:02:03)<br>
<?php echo form_input(array('name'=>'open_time','value'=>set_value('open_time',$record['open_time']),'size'=>30)); ?><font color="red"><?php echo form_error('open_time'); ?></font><br>
■公開条件（公開：1, 非公開：0）
<br/>
<?php echo form_radio(array('name'=>'flag','value'=>$record['flag'])); ?>公開<br>
<?php echo form_radio(array('name'=>'flag','value'=>$record['flag'])); ?>非公開<br>
<font color="red"><?php echo form_error('flag'); ?></font><br>
<input type="hidden" name="id" value=<?=$record['id']?> />
<input type="submit" value='edit'><br/>
</form>
</div>
</div>
</body>
</html>