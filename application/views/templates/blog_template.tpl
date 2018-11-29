<!DOCTYPE html>
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
      <a class="navbar-brand" href="{$base_url}index.php/blog">
        <img src="{$base_url}img/img.jpg" style="width:40px;" alt="Logo">
              </a>

   
          <ul   class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{$base_url}index.php/blog/post">Post a new message</a>
            </li>
          </ul>


          <div class="dropdown" >
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
              <span class="rounded-circle">
                <img 
                {if file_exists("img/user{$id}.jpg")} 
                {assign "imgpath" "img/user{$id}.jpg"} 
                
                  src="{$base_url}{$imgpath}"
                {else} 
                  src="{$base_url}img/user.jpg" 
                {/if}
                 style="width:40px;" alt="User Image">
              </span>
    {$username}
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="#">Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{$base_url}index.php/blog/logout">Log Out</a>
            </div>
          </div> 
     
    </nav>
 
    <br>
    <div class="container shadow ">
      <form action="{$base_url}index.php/blog/updatepost{$action}" method="post">
        <div class="form-group text-center">
          <div class="row justify-content-center align-items-center">  
            <div class="col-sm-8">
              <h1>NEW POST</h1>
            
              <div class="form-group">
                <label for="namefield"><sub>Message:</sub></label>
                <textarea id="message" rows="10" class="form-control" name="message">{$content}</textarea>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>



</html>
