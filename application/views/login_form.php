<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="<?=base_url();?>css/form.css" type="text/css" />
<title>ログイン認証</title>
</head>
<body>

<div class="center">
<img src="<?=base_url();?>images/icons/login_banner.jpg" alt="ログインバナー" />

<!--エラーメッセージ-->
<?php if( !empty($error)): ?><br/><br/><font color="red"><?php echo $error; ?></font><?php endif; ?>
<font color="red"><?php echo validation_errors(); ?></font>
<!--エラーメッセージ-->

<?php echo form_open('auth/login'); ?>
<p>ユーザー名 <input type="text" name="username" value="<?php echo set_value('username'); ?>"></p>
<p>パスワード <input type="password" name="password" value="<?php echo set_value('password'); ?>"></p>
<!--ログイン後に移動するページ-->
<input type="hidden" name="next" value="<?php echo $next; ?>">
<input type="submit" value="" id="image-login-btn">
</form>
</div>

</body>
</html>