<?php
include('dbconfig.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .nav-item :hover{background-color: pink;}
        .best{padding: 60px;}
        .con{width: 100%; height: 500px;}
        .con img{width: 100%;height: 100%;object-fit: cover;}
        .nav{margin: auto;}
        .con_1{width: 100%;height: 400px;object-fit: cover;}
        .con_2{width: 100%;height: 400px;object-fit: cover;}
    </style>
</head>
<body>
   <section class="contact">
    <div class="container">
<div class="row">
    
    <div class="col-md-6 col-sm-6 col-xs-6 icon">
            <i class="fa-brands fa-facebook p-3"></i>
            <i class="fa-brands fa-twitter p-3"></i>
            <i class="fa-brands fa-youtube p-3"></i>
            <i class="fa-brands fa-instagram p-3"></i>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6" style="color: white;">
        <div class="row">
<div class="col-md-6 col-sm-6 col-xs-6 pt-2">
<p><strong>PHONE:</strong>91 9150148910</p>
</div>
<div class="col-md-6 col-sm-6 col-xs-6 pt-2">
    <p><strong>EMAIL:</strong>sandhiya28012002@gmail.com</p>
</div>
        </div>

    </div>
</div>
    </div>
</section>
    <div class="container" style="padding-top: 10px;background-color: white; padding-bottom: 10px;">
        <div class="row">
<p style="text-align: center; color: black; align-items: center;padding-right: 46%;
font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue',
 sans-serif;font-weight: 200; "><h2>Beautify</h2></p>
    </div></div>
    <section class="navbar" >
        <div class="container">
          <div class="row"> 
        <div class="col-md-12">
        
          <ul class="nav">
            
                  <li class="nav-item" >
                      <a style="color: black;" class="nav-link " href="home.php">HOME</a>
                   </li>
                  <li class="nav-item">
                      <a style="color: black;" class="nav-link" href="about.php">ABOUT</a>
                  </li>
                  <li class="nav-item">
                    <a style="color: black;" class="nav-link" href="services.php">SERVICES</a>
                </li>
                <li class="nav-item" >
                    <a style="color: black;" class="nav-link" href="pages.php">PAGES</a>
                </li>
                  <li class="nav-item">
                      <a style="color: black;" class="nav-link" href="blog.php">BLOG</a>
                  </li>
                  <li class="nav-item">
                      <a style="color: black;" class="nav-link" href="contact.php">CONTACT</a>
                  </li>
                  <li class="nav-item">
                      <a style="color: black;" class="nav-link" href="bookonline.php">BOOK ONLINE</a>
                  </li>
                  <li class="nav-item">
                      <a style="color: black;" class="nav-link" href="signup.php">SIGNUP/LOGIN</a>
                  </li>
                  <li class="nav-item">
                  <div class="dropdown">
                      <a style="color: black;" class="nav-link dropdown-toggle" data-toggle="dropdown" href="signup.php">MENU <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="profile.php">PROFILE</a></li>
                                <li><a href="order.php">ORDER</a></li>
                                <li><a href="wishlist.php">WISHLIST</a></li>
                                <li><a href="logout.php">LOGOUT</a></li>
                            </ul>
                  </div>
                  </li>
                  <li>
                  <div><?php (isset($_SESSION['name'])) ? $_SESSION['name'] : " " ;  ?></div>
                  </li>                                       
           </ul>
            </div></div> </div>

    </section>
    <section>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="con">
                <img class="d-block w-100" src="image/t5.jpg" alt="taylor">
              </div></div>
              <div class="carousel-item">
                <div class="con">
                <img class="d-block w-100" src="image/t8.jpg" alt="taylor">
              </div></div>
              <div class="carousel-item">
                <div class="con">
                <img class="d-block w-100" src="image/t11.jpg" alt="taylor">
              </div></div>
              <div class="carousel-item">
                <div class="con">
                <img class="d-block w-100" src="image/t13.jpg" alt="taylor">
              </div>
            </div>
        </div></div>
              <div class="carousel-caption d-none d-md-block" style="color: black;text-align: justify; bottom: 200px;">
                <p style="color: rgb(175, 27, 138);font-weight: bold;">Beautify</p>
                <p style="text-align: justify;"><h1>Professional<br>Makeup Artist</h1></p>
                <p>occinceger faucibus onto cursus facilisi sitenium egestas arcu<br>cipmentum imperder eriam siru erctrice vestibeform sit.</p>
                <div> <button style="background-color: rgb(175, 27, 138); color: white;" class="btn">Learn more ></button>
               </div></div>
    </section>
    <section class="best">
        <div class="container">
            <div class="row">
            
<div class="col-md-6 col-sm-6 col-xs-6 ">
            <img class="con_1" id="ani"  src="image/t9.jpg" alt="taylor"></div>
            <div class="col-md-6 col-sm-6 col-xs-6">
            <p style="color: rgb(175, 27, 138);font-weight: bold; font-size: 20px;">Welcome To</p>
            <h1>Best Professional</h1>
            <h1>Makeup Artist</h1>
            <p style="font-size: x-small;">Your eyes are the windows to your soul, so why not give them the prettiness they deserve? Eye makeup has 
                been a go-to for many people. From going subtle with a wash to full-on smokey to even a whole lot of glitter, eye makeup is 
                probably one of the most creative ways to express yourself. Throw in a winged eyeliner that can kill and eyelashes that can 
                slay and you’ll be good to go. These eye makeup quotes & eye makeup captions for Instagram are totally relatable if you cannot 
                step out of the house without a little bit of colour on those lids. Scroll down to see the collection of funny, witty, sassy, 
                and downright accurate mascara, eyeshadow & eyeliner captions for Instagram we’ve got –– there’s one for every eye makeup picture 
                out there. </p>
            <div> <button class="btn join_cam" id="bu" style="color: white;">Learn more ></button>
        </div></div></div></div>
    </section>
    <section style="display: flex;padding-top: 100px;" >
        <div style="padding-left: 200px;">
            <p style="color: rgb(175, 27, 138);font-weight: bold; font-size: 20px;">Specials</p>
            <h1>We’re Here to Make</h1>
            <h1>Your Day</h1>
            <h1>Memorable</h1>
            <p style="font-size: x-small;">Level up your eye makeup game with this fabulous Manish Malhotra’s 9-in-1 eyeshadow palette! This palette is a 
                combination of metallic, matte and foil finishes. From offering an excellent colour payoff, and ensuring easy 
                blending to optimizing impact, this eyeshadow palette is quite an asset in a makeup bag!</p>
        </div>
        <div style="display: flex;padding-left: 50px;">
            <img class="con_2" style="padding-right: 30px;" src="image/t6.jpg" alt="taylor" >
            <img class="lor" src="image/t7.webp" alt="taylor" height="400px" width="300px">
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.1.0.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
// $(document).ready(function(){
    
//     $('.con_1').mouseenter(function () {
     
// $('#ani').animate({top:'50px'},1000)});

//     });
    $(document).ready(function(){
  $('.con_1').click(function() {
    alert(hi);
    $("#ani").animate({top: '-=100px'}, 2000);
  }; function() {
    $("#ani").animate({top: '+=100px'}, 2000);
  });
});
    </script>
</body>
</html>

    </div>
  </div>