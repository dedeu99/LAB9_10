<!DOCTYPE html>
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
      <a class="navbar-brand" href="{$base_url}index.php/blog">
        <img src="{$base_url}img/img.jpg" style="width:40px;" alt="Logo">
      </a> 
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{$base_url}index.php/blog/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{$base_url}index.php/blog/register">Register</a>
        </li>
      </ul>
      
    </nav>
 
    <br>

    <div class="container shadow ">
      <!-- BEGIN RESETFORM -->

      {if $message|count_characters:true>0}
        <div class="row justify-content-center bg-danger text-white">
          {$message}
        </div>
      {/if}
    	<div class="row justify-content-center align-items-center">
        
        <div class="col-sm-4">
          <form action="{$base_url}index.php/blog/passwordReset " method="POST" >
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
