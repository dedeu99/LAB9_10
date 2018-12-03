<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-29 03:13:13
         compiled from "application/views/templates/login_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2420217595bf5326d4f4587-02411713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ad522dcba043066ee7e5fd3b1d33e948b2260ba' => 
    array (
      0 => 'application/views/templates/login_template.tpl',
      1 => 1543460264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2420217595bf5326d4f4587-02411713',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bf5326d510667_32136304',
  'variables' => 
  array (
    'base_url' => 0,
    'message' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf5326d510667_32136304')) {function content_5bf5326d510667_32136304($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>LAB9_10</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="LAB3.css" type ="text/css">-->
  </head>
  
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark justify-content-between">
      <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/blog">
        <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/img.jpg" style="width:40px;" alt="Logo">
      </a> 
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/blog/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/blog/register">Register</a>
        </li>
      </ul>
      
    </nav>
 
    <br>

    <div class="container shadow ">
      <!-- BEGIN LOGINFORM -->
      <?php if (mb_strlen($_smarty_tpl->tpl_vars['message']->value, 'UTF-8')>0) {?>
      <div class="row justify-content-center bg-danger text-white">
        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

      </div>
      <?php }?>
    	<div class="row justify-content-center align-items-center">
        
        <div class="col-sm-4">
          <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/blog/login" method="POST" >
            <div class="form-group text-center">
              <h1>Login</h1>
            </div>
            <div class="form-group">
              <label for="emailfield"><sub>Email</sub></label>
              <input type="email" id="emailfield" class="form-control" name="email" value=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
>
            </div>

            <div class="form-group">
              <label for="passwordfield"><sub>Password</sub></label>
              <input type="password" id="passwordfield" name="password" class="form-control" >
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              
              <small class="form-text">
                Remember me:<input type="checkbox" name="autologin" value="1">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/blog/passwordReset">forgot password?</a>
              </small>
            </div>
          </form>
        </div>
      </div>
    <!-- END LOGINFORM -->
      
    </div>
      
    <br>
    <footer>
      <div class="row justify-content-around">  
        <p>&copy; 2018 Desenvolvimento de Aplicações Web</p>   
        <p>Designed by <a href="https://github.com/dedeu99">A62362</a></p>
      </div>
    </footer>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }} ?>
