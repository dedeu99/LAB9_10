<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-29 01:16:30
         compiled from "application/views/templates/message_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9523777825bfc3229802d61-07352688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e78a475edb3204a0145a2eeb4fdb238de9506e5' => 
    array (
      0 => 'application/views/templates/message_template.tpl',
      1 => 1543454111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9523777825bfc3229802d61-07352688',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bfc3229819184_04418695',
  'variables' => 
  array (
    'base_url' => 0,
    'loggedin' => 0,
    'id' => 0,
    'imgpath' => 0,
    'username' => 0,
    'background' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfc3229819184_04418695')) {function content_5bfc3229819184_04418695($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>LAB9_10</title>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5;url=<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/blog" />
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
      <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> 
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/blog/post">Post a new message</a>
            </li>
          </ul>


          <div class="dropdown" >
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
              <span class="rounded-circle">
                <img 
                <?php if (file_exists("img/user".((string)$_smarty_tpl->tpl_vars['id']->value).".jpg")) {?> 
                <?php $_smarty_tpl->tpl_vars["imgpath"] = new Smarty_variable("img/user".((string)$_smarty_tpl->tpl_vars['id']->value).".jpg", null, 0);?> 
                
                  src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;
echo $_smarty_tpl->tpl_vars['imgpath']->value;?>
"
                <?php } else { ?> 
                  src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/user.jpg" 
                <?php }?>
                 style="width:40px;" alt="User Image">
              </span>
    <?php echo $_smarty_tpl->tpl_vars['username']->value;?>

            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="#">Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/blog/logout">Log Out</a>
            </div>
          </div> 
      <?php } else { ?>
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
      <?php }?>
    </nav>  
 
    <br>

    <div class="container shadow ">
      <!-- BEGIN SUCESSFORM -->
      <div  class="row justify-content-center bg-<?php echo $_smarty_tpl->tpl_vars['background']->value;?>
 text-white">
        <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
      </div>
      <div class="row justify-content-center align-items-center">
        <p>You will be automatically redirected in 5 seconds. As an alternative press <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/blog">here</a> to go to the first page.</p>
      </div>

      <!-- END SUCESSFORM -->
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
