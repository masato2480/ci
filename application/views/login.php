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
<br>
<table style="margin-left: auto; margin-right: auto;">
<tr><th>Username</th>
<td>
 <input type="text" name="login_name" value="" size="30" />
</td></tr>
<tr><th>Password</th>
<td>
 <input type="text" name="login_password" value="" size="30" />
</td></tr>
<tr><td></td>
<td colspan=2>
 <br>
 <input class="button" type="submit" value="LOGIN" />
</td></tr>
</table>

<?=form_close();?>
</div>

<?=$this->load->view('ci_footer');?>
</body>
</html>