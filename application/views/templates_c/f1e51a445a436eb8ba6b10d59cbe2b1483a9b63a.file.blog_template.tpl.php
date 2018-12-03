<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-29 01:30:45
         compiled from "application/views/templates/blog_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4499732085bff29cf08cbf8-73170993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1e51a445a436eb8ba6b10d59cbe2b1483a9b63a' => 
    array (
      0 => 'application/views/templates/blog_template.tpl',
      1 => 1543454869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4499732085bff29cf08cbf8-73170993',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bff29cf0b7f56_51078649',
  'variables' => 
  array (
    'base_url' => 0,
    'id' => 0,
    'imgpath' => 0,
    'username' => 0,
    'action' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bff29cf0b7f56_51078649')) {function content_5bff29cf0b7f56_51078649($_smarty_tpl) {?><!DOCTYPE html>
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

   
          <ul   class="navbar-nav mr-auto">
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
     
    </nav>
 
    <br>
    <div class="container shadow ">
      <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/blog/updatepost<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post">
        <div class="form-group text-center">
          <div class="row justify-content-center align-items-center">  
            <div class="col-sm-8">
              <h1>NEW POST</h1>
            
              <div class="form-group">
                <label for="namefield"><sub>Message:</sub></label>
                <textarea id="message" rows="10" class="form-control" name="message"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea>
              </div>
            </div>
          </div>
          <div class="row justify-content-around">            
            <div class="col-sm-8 justify-content-around">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a href="index.php"><button class="btn btn-danger">Cancel</button></a>
            </div>
          </div>
        </div>
      </form>
      <br>
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
