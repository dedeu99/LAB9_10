<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-29 01:40:10
         compiled from "application/views/templates/index_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1904466135bf445bdaa4ab7-46383745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ca6017fe535624d1f21585b8ccdc1ba678dd3ca' => 
    array (
      0 => 'application/views/templates/index_template.tpl',
      1 => 1543455528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1904466135bf445bdaa4ab7-46383745',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bf445bdb0df47_44662566',
  'variables' => 
  array (
    'base_url' => 0,
    'loggedin' => 0,
    'id' => 0,
    'imgpath' => 0,
    'username' => 0,
    'blogs' => 0,
    'blog' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf445bdb0df47_44662566')) {function content_5bf445bdb0df47_44662566($_smarty_tpl) {?><!DOCTYPE html>
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
    
    <div class="container">
      <div class="row justify-content-sm-center">
        <div class="col-sm-9">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/slide1.svg?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/slide2.svg?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/slide3.svg?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" data-slide="next">
              <span class="carousel-control-next-icon"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    <br>
      <div class="shadow pr-3 pl-3" style="padding:0px">
        <div class="row align-items-center" style="padding:0px;">
          <div class="col-sm-12 text-center bg-dark">
            <ul class="justify-content-sm-end nav navbar-dark ">
                
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Number of posts per page</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">5</a>
                  <a class="dropdown-item" href="#">10</a>
                  <a class="dropdown-item" href="#">25</a>
                  <a class="dropdown-item" href="#">50</a>
                </div>            
              </li> 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Order By</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Most Recent Posts</a>
                  <a class="dropdown-item" href="#">Older Posts</a>
                </div>            
              </li>
            </ul>  
          </div>
        </div>
        



<?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
        <div class="row" style="border-width: 0px thin thin ;border-style: solid;border-color:rgba(0,0,0,0.2)">
          <div class="col-sm-3 text-center"  >
            <br>
            <a>
              <span class="rounded-circle">
                <img

                <?php if (file_exists("img/user".((string)$_smarty_tpl->tpl_vars['blog']->value['user_id']).".jpg")) {?> 
                <?php $_smarty_tpl->tpl_vars["imgpath"] = new Smarty_variable("img/user".((string)$_smarty_tpl->tpl_vars['blog']->value['user_id']).".jpg", null, 0);?> 
                
                  src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;
echo $_smarty_tpl->tpl_vars['imgpath']->value;?>
"
                <?php } else { ?> 
                  src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/user.jpg" 
                <?php }?>


                style="width:40px;" alt="User Image">
              </span>
            <p><?php echo $_smarty_tpl->tpl_vars['blog']->value['name'];?>
</p>
          </a>
            <p>Created:</p>
            <p><?php echo $_smarty_tpl->tpl_vars['blog']->value['created_at'];?>
</p>
            <p>Updated:</p>
            <p><?php echo $_smarty_tpl->tpl_vars['blog']->value['updated_at'];?>
</p>
          </div>
          <div class="col-sm-9">
            <?php if ($_smarty_tpl->tpl_vars['id']->value!=0&&$_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['blog']->value['user_id']) {?>  
            <div  class="row justify-content-sm-end">
              <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/blog/post/<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
"><button  class="btn btn-secondary">
                Update
              </button></a>
            </div>
            <?php }?>
            <div class="row align-items-center">
              <p><?php echo nl2br($_smarty_tpl->tpl_vars['blog']->value['content']);?>
</p>
            </div>
            
          </div>
        </div>
      <?php } ?>
      </div>


       <nav>
          <ul class="pagination justify-content-end">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
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
