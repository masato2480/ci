<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="<?=base_url();?>css/form.css" type="text/css" />
<link rel="stylesheet" href="<?=base_url();?>jquery/css/ui-lightness/jquery-ui-1.10.3.custom.css" />
<script type="text/javascript" src="<?=base_url();?>jquery/js/jquery-1.9.1.js"</script>
<script type="text/javascript" src="<?=base_url();?>jquery/js/jquery-ui-1.10.3.custom.js"</script>
<script type="text/javascript" src="<?=base_url();?>jquery/js/jquery-ui-1.10.3.custom.min.js"</script>
<script type="text/javascript" src="<?=base_url();?>jquery/development-bundle/ui/jquery.ui.datepicker.js"</script>
<title>ニュース編集</title>
</head>
<body>
<div id="main">
<div class="center">
<img src="<?=base_url();?>images/icons/news-banner.jpg" alt="ニュースバナー" />
<div class="image_left">
<a href="/ci/newslist/"><img src="<?=base_url();?>images/icons/back_button.png" alt="back_button" /></a>
</div>
<form action="verify_edit" method="post">
<?php $record=$record[0] ?>
<font color="red"><?php echo form_error('title'); ?></font>
<font color="red"><?php echo form_error('content'); ?></font>
<font color="red"><?php echo form_error('open_time'); ?></font>
<font color="red"><?php echo form_error('flag'); ?></font>

<!--jQuery-->
<script type="text/javascript">
$(function() {
  // Datepicker の初期化
  $( "#datepicker" ).datepicker();
  // テキストボックスにフォーカスが当たった時と
  // ボタンがクリックされたときにカレンダーを表示するオプション
  $( "#datepicker" ).datepicker( "option", "showOn", 'both' );
  });
</script>
<!--jQuery-->

<br>
■タイトル<br>
<?php echo form_input(array('name'=>'title','value'=>set_value('title',$record['title']),'size'=>50)); ?><br>
■内容<br>
<?php echo form_textarea(array('name'=>'content','value'=>set_value('content',$record['content']),'cols'=>80,'rows'=>10)); ?><br>
■公開日<br>
<input type="text" name="open_time" id="datepicker" value=<?php echo set_value('open_time',date('m/d/Y', strtotime(str_replace('/', '-', $record['open_time'])))); ?> /><br/>
■公開条件
<br/>
<?php echo form_radio(array('name'=>'flag','value'=>1)); ?>公開
<?php echo form_radio(array('name'=>'flag','value'=>0)); ?>非公開<br/>
<input type="hidden" name="id" value=<?=$record['id']?> />
<input type="submit" value="" id="image-edit-button" />
</form>
<form action="deletenews" method="post">
<input type="hidden" name="id" value=<?=$record['id']?> />
<input type="submit" value="" id="image-delete-button" />
</form>
</div>
</div>
</body>
</html>