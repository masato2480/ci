<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ja" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?=base_url();?>css/form.css" type="text/css" />
<title>Login Form</title>
</head>
<body>
<?=$this->load->view('form_header');?>
<div id="main">
<div class="title_banner">
<img src="<?=base_url();?>images/icons/rexvirt_logo3.png" alt="login form" width="580" height="70" />
</div>
<div class="center">
<?= $error ?>
<?php echo form_open('verifylogin'); ?>
<label for="username">Username:</label>
  <input type="text" size="20" id="username" name="username" />
  <br>
<label for="password">Password:</label>
  <input type="password" size="20" id="password" name="password" />
  <br>
<input type="submit" value="Login" />
</div>
</div>
<?=$this->load->view('ci_footer');?>
</body>
</html>