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

    {if $loggedin} 
    <ul class="navbar-nav mr-auto">
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
    {else}
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{$base_url}index.php/blog/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{$base_url}index.php/blog/register">Register</a>
      </li>
    </ul>
    {/if}
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
              <img class="d-block w-100" src="{$base_url}img/slide1.svg?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{$base_url}img/slide2.svg?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{$base_url}img/slide3.svg?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
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
    <div class="shadow">
      <div class="row no-gutters align-items-center">
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




      {foreach $blogs as $blog}
      <div style="border-width: 0px thin thin ;border-style: solid;border-color:rgba(0,0,0,0.5  )">
        <div class="row no-gutters" >
          <div class="col-sm-3 text-center my-auto"  >
            <br>
            <a>
              <span class="rounded-circle">
                <img

                {if file_exists("img/user{$blog.user_id}.jpg")} 
                {assign "imgpath" "img/user{$blog.user_id}.jpg"} 

                src="{$base_url}{$imgpath}"
                {else} 
                src="{$base_url}img/user.jpg" 
                {/if}


                style="width:40px;" alt="User Image">
              </span>
              <p>{$blog.name}</p>
            </a>
            <p>Created:</p>
            <p>{$blog.created_at}</p>
            <p>Updated:</p>
            <p>{$blog.updated_at}</p>
          </div>
          <div class="col-sm-9">
            {if $id!=0}  
            <div  class="row no-gutters justify-content-sm-end">



              <a href="{$base_url}index.php/blog/post/{$blog.id}"><button  class="btn btn-secondary">
                {if $id==$blog.user_id}
                Update
                {else}
                Reply
                {/if}
              </button></a>

              
              <button class="btn btn-secondary" id="b{$blog.id}" onclick="myToggle('{$blog.id}')">Show</button> 
              
            </div>





            {/if}
            <div class="row no-gutters">
              <p>{nl2br($blog.content)}</p>





            </div>

          </div>
        </div>

      </div>
      <div id="p{$blog.id}"  class="row no-gutters">
      </div>
      {/foreach}
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script>
    function myToggle(id) {
//$("element_to_hide").toggle();

//document.getElementById(id).style.visibility = "hidden";
var button = document.getElementById('b'+id);

if(button.textContent === "Hide"){
  button.textContent="Show";
  document.getElementById('p'+id).style.display = "none";
}else
{
  button.textContent="Hide";
  document.getElementById('p'+id).style.display = "";
}

var p = document.createElement("div");
p.src = "{$base_url}index.php/blog/replies/4";
document.getElementById("p"+id).appendChild(p);


//document.getElementById('b'+id).textContent="hide";
//alert(x);

//document.getElementById('p'+id).style.display = "";
//document.getElementById('p'+id).removeAttribute("hidden");
//document.getElementById(id).

}
</script>
</body>



</html>
