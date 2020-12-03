<?php 
include_once('controller/catcontroller.php');
$catcontroller=new CatController();
$results=$catcontroller->showCate();
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        
      <link rel="stylesheet" href="css/home.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script>

            function click(){

                window.location.href=("register.php");
            }
            </script>
        <style>
body{

    font-family: 'Times New Roman', sans-serif;
}
            .login{
           
            background-color:#90257D;
            height: 40px;
        }
        .navbar-expand-sm{
    height: 30px;
}
.menu{
    background-color:#f090d9;
}
.search{

   
    
}
.ml2 {
  font-weight: 900;
  font-size: 3.5em;
}

.ml2 .letter {
  display: inline-block;
  line-height: 1em;
}
        </style>
        
    </head>
  
    <body>

    <!--start first nav bar-->
    <div class="container-fluid login" >
<div class="row">
    <div class="col-md-3">
        <nav class="navbar navbar-expand-sm">
     
        
            <a class="nav-link" href="www.facebook.com"><i class="fab fa-facebook-f" style="color:white;"></i></a>
            <a class="nav-link" href="www.pinterest.com"><i class="fab fa-pinterest" style="color:white;"></i></a>
            <a class="nav-link" href="www.twitter.com"><i class="fab fa-twitter" style="color:white;"></i></a>
            <a class="nav-link" href="www.email.com"><i class="fas fa-envelope-square" style="color:white;"></i></a>
        
        
      
        </nav> 
        </div>
    <div class="col-md-3">
        <nav class="navbar navbar-expand-sm">
        </nav>
    </div>
    <div class="col-md-4">
        <nav class="navbar navbar-expand-sm"></nav>
    </div>
    <div class="col-md-2 ">
        <nav class="navbar navbar-expand-sm">
        <a href="register.php"><div class=" ml-auto mt-2  mr-4 " style="height:33px;"><span style="color:white;">Register</span></div></a>
            <a href="login.php"><div class="mt-2" style="height:33px;"><span style="color:white;">Login</span></div></a>
        </nav>
    </div>

</div>

    </div>
    <nav class="navbar navbar-expand-lg menu">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#" style="color:#000000; font-size:22px;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:#000000; font-size:22px;">Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color:#000000; font-size:22px;">Contact</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:#000000; font-size:22px;">About Us</a>
            </li>
          </ul>
          <div>
             <a href="home.php" class="img"><img src="images/imgs/rowbg.png" width="80px" height="70px"></a>
        </div>
        <form action="items.php" method="POST">
            <input class="search" name="sear" type="text" placeholder="Type here" style="height:35px;">
            <input name="submit" type="submit" value="Search">
        </form>
          
          <a class="nav-link my-1" href="#" style="font-size: 30px; color: black;"><i class="fas fa-shopping-cart"></i></a>
        </div>
      </nav>
    
    <!--start banner-->
    <div class="container mt-2">
        <img src="images/imgs/b.png" height="500px" width="100%">
        
    </div>
     
    <h1 class="ml2" style="text-align: center; padding: 30px; letter-spacing: 3px;">All Categories</h1>
    <div class="container">
            <div class="row mx-5">
        
        <?php foreach($results as $result){
?>
<div class="col-md-3 mt-3">
                <div class="card" style="border-color: #F0B73B; background-color: #90257D;" id="card1">
                    <img src="backend/<?php echo $result['photo']; ?>" class="card-img-top" width="50px" height="200px" id="img1" >
                    <div class="card-body">
                        <a href="item.php?id=<?php echo $result['id']?>" type="button" class="btn btn-success btn3" style="background-color: white;color: black;border-color: white;"><span style="text-align:center"><?php echo $result['name']; ?></span></a>
                    </div>
                  </div>
            </div>
            <?php
        } ?>
    </div>
</div>

      
      <div class="container my-5">
        
          
          <p style="font-size: 30px;text-align: center;"><strong>LOVELY CLIENTS COMMENTS</strong></p>
          
         
          <P style="text-align: center;">It is really awesome theme and specially mode for online shopping,<br>
             so this theme unique to create your drean website and help to promote.</P>
        
      </div>
    
       <!--start footer-->
       <div class="container-fluide" style="background-color:#f090d9">
        <div class="container">
            <div class="row">
                <div class="col-md-4 my-3">
                    <h2>Collection</h2>
                    <ul style="font-size: small; ">
                        <li>MEN COLLECTION</li>
                        <li>WOMEN COLLECTION</li>
                      </ul>
                </div>
                <div class="col-md-4 my-3">
                    <h2>Content Info</h2>
                    <ul style="font-size: small; ">
                        <li>Phone: +959-7865677578</li>
                        <li>Emial: rowshopping@gmial.com</li>
                </div>
                <div class="col-md-4 my-3">
                    <h2>Customer Service</h2>
                    <ul style="font-size: small; ">
                        <li>Help & Contact</li>
                        <li>Shipping& Taxes</li>
                        <li>Return Policy</li>
                        <li>Legal Notice</li>
                      </ul>
                </div>
            </div>
            <p>If you have any advice or comment</p>
            <input type="text" placeholder="comment" class="input1">
            <button type="button" class="button2">Submit</button>
        </div>
    </div>


<script>
     var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
        anime.timeline({loop: true})
  .add({
    targets: '.ml2 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 3000,
    delay: (el, i) => 70*i
  }).add({
    targets: '.ml2',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
    </script>
    <script src="js/home.js"></script>
    </body>
    </html>
    
              




   