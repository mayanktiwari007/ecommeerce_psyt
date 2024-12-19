<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PSYT</title>
    <link rel="shortcut icon" href="uploads/logo.png" type="image/x-icon">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Amita:wght@400;700&family=Kablammo&display=swap');
      #logo{
        
        margin-left: 60px;
        border-radius: 50%;
        font-family: "Kablammo", system-ui;
      
      }
      #nav{
        margin-right: 200px;
      }
      .head{
        margin-left: 900px;
      }
      #bag{
        
      }
     /* p:hover{
      text-decoration-line: underline;
      margin-right: 20px;
      
     } */

     
      
    </style>
</head>
<body>
    
      
      <!-- Image and text -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="mynk">
        <a class="navbar-brand" href="{{URL::to('/')}}"><img src="{{asset('uploads/logo.png')}}" alt="" height="50" width="50" id="logo">&nbsp; &nbsp;<b>PSYT</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <header class="head">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            @if(session()->has('id'))
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/cart')}}" id="bag"> &nbsp; &nbsp;<i class="fa-solid fa-cart-shopping"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/profile')}}" id="bag"> &nbsp;  &nbsp; &nbsp;<i class="fa-solid fa-circle-user"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/myOrders')}}" id="bag"> &nbsp;  &nbsp; &nbsp;<i class="fa-solid fa-rectangle-list"></i></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{URL::to('/logout')}}"><p>  &nbsp; &nbsp; <b>LOGOUT</b></p></a>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/')}}"> &nbsp; &nbsp;<b>HOME</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/login')}}"> &nbsp; &nbsp;<b>LOGIN</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/signup')}}">&nbsp; &nbsp; <b>SIGNUP</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/')}}"> &nbsp; &nbsp;<b>ABOUT US</b></a>
            </li>
            @endif
          </ul>
        </div>
      </nav>
     </header>
  

      

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
</html>
