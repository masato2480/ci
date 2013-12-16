<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?=base_url();?>css/form.css" type="text/css" />
<title>Login Form</title>
</head>

<body>
<?=$this->load->view('form_header');?>
<div id="main">
<div class="title_banner">
<img src="<?=base_url();?>images/icons/form_title.jpg" alt="login form" width="580" height="70" />
</div>

<div class="outer_frame">
<?=form_open('form/confirm');?>
<?=form_hidden('ticket', $this->ticket);?>
<table>
<tr><th>Login Name</th>
<td>
 <input type="text" name="login_name" value="<?=$this->validation->login_name;?>" size="30" />
 <?=$this->validation->login_name_error;?>
</td></tr>
<tr><th>Login Password</th>
<td>
 <input type="text" name="login_password" value="<?=$this->validation->login_password;?>" size="30" />
 <?=$this->validation->login_password_error;?>
</td></tr>
<tr><td></td>
<td class="center">
 <input class="button" type="submit" value="confirm" />
</td></tr>
</table>

<?=form_close();?>
</div>
</div>

<?=$this->load->view('ci_footer');?>
</body>
</html>