<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-29 03:29:33
         compiled from "application/views/templates/password_reset_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14126201145bff55f6195203-58886470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56e978bc3af32430fa3288ebb13914a93d993649' => 
    array (
      0 => 'application/views/templates/password_reset_template.tpl',
      1 => 1543461217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14126201145bff55f6195203-58886470',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bff55f61b0ce0_57436383',
  'variables' => 
  array (
    'base_url' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bff55f61b0ce0_57436383')) {function content_5bff55f61b0ce0_57436383($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>LAB5</title>
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
      <!-- BEGIN RESETFORM -->

      <?php if (mb_strlen($_smarty_tpl->tpl_vars['message']->value, 'UTF-8')>0) {?>
        <div class="row justify-content-center bg-danger text-white">
          <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        </div>
      <?php }?>
    	<div class="row justify-content-center align-items-center">
        
        <div class="col-sm-4">
          <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/blog/passwordReset " method="POST" >
            <div class="form-group text-center">
              <h1>Password Reset</h1>
            </div>

            <div class="form-group">
              <label for="email"><sub>Email</sub></label>
              <input type="email" id="email" name="email" class="form-control" >
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary">Go</button>
              
            </div>
          </form>
        </div>
      </div>
    <!-- END RESETFORM -->
      
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
