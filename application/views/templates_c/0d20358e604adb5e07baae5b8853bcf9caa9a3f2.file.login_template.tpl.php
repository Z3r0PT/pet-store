<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-01-17 14:38:21
         compiled from "/users/a52888/public_html/EXAME/application/views/templates/login_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3671486145c40935d0e0e56-52995360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d20358e604adb5e07baae5b8853bcf9caa9a3f2' => 
    array (
      0 => '/users/a52888/public_html/EXAME/application/views/templates/login_template.tpl',
      1 => 1547735038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3671486145c40935d0e0e56-52995360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'image_url' => 0,
    'menu1' => 0,
    'menu2' => 0,
    'login_action' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c40935d117a32_18025452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c40935d117a32_18025452')) {function content_5c40935d117a32_18025452($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>

<body class="w3-container">

<div class="w3-image">
  <img src="<?php echo $_smarty_tpl->tpl_vars['image_url']->value;?>
" 
</div>


<header class="w3-topnav w3-blue">

	<div class="w3-half" style="text-align:left;">
		<?php echo $_smarty_tpl->tpl_vars['menu1']->value;?>

	</div>

	<div class="w3-half" style="text-align:right;">
		<?php echo $_smarty_tpl->tpl_vars['menu2']->value;?>

	</div>

</header>


<div class="w3-padding-large">

<form class="w3-form w3-card-4" id="login_form"  method="post" action="<?php echo $_smarty_tpl->tpl_vars['login_action']->value;?>
">

      			<h2 style="text-align:center;color:red;"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h2>

	
  <h2 style="text-align:center;">Login</h2>
  <div class="w3-input-group"> 
    <label>Email</label>  
    <input class="w3-input" type="email" id="username_login" name="username_login">

    <label>Password</label>
    <input class="w3-input" type="password" id="pass_utilizador" name="pass_utilizador" >
   
  </div>
  <h3 style="text-align:center;">
  <input class="w3-btn w3-orange w3-round-large" name="submit" type="submit" value="Go" /> &nbsp;
</h3>

</form>
</div>

<footer class="w3-padding-large">

<div class="w3-half"  style="text-align:left;">
 &copy; 2019 Desenvolvimento de Aplica&ccedil;&otilde;es Web
</div>
<div class="w3-half" style="text-align:right;">
 Designed by <a href="#">Aluno</a>
</div>

</footer>




</body>
</html>
<?php }} ?>
