<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="<?=base_url();?>css/form.css" type="text/css" />
<title>ログイン認証</title>
</head>
<body>

<div class="center">
<p>ログインしてください。</p>

<!--エラーメッセージ-->
<?php if( !empty($error)): ?><font color="red"><?php echo $error; ?></font><?php endif; ?>
<font color="red"><?php echo validation_errors(); ?></font>

<?php echo form_open('auth/login'); ?>
<dl>
<dt>ユーザ名</dt>
<dd><input type="text" name="username" value="<?php echo set_value('username'); ?>"></dd>
<dt>パスワード</dt>
<dd><input type="password" name="password" value="<?php echo set_value('password'); ?>"></dd>
</dl>
<!--ログイン後に移動するページ-->
<input type="hidden" name="next" value="<?php echo $next; ?>">
<input type="submit" value="ログイン">
</form>
</div>

</body>
</html>