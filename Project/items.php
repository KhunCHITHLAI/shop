<?php 
if(isset($_POST['submit'])){
    $search=$_POST['sear'];
    include_once('controller/itemcontroller.php');
    $itemcontroller=new ItemController();
    $results=$itemcontroller->searchitems($search);

} ?>
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
    </head>
  
    <body style="font-family: 'Times New Roman', Times, serif;">

    <!--start first nav bar-->
    <nav class="navbar navbar-expand-sm" style="background-color:#FAB90C ;">
        <a class="nav-link" href="www.facebook.com"><i class="fab fa-facebook-f"></i></a>
        <a class="nav-link" href="www.pinterest.com"><i class="fab fa-pinterest"></i></a>
        <a class="nav-link" href="www.twitter.com"><i class="fab fa-twitter"></i></a>
        <a class="nav-link" href="www.email.com"><i class="fas fa-envelope-square"></i></a>
        <a class="nav-link" style="position: relative; left:970px;" href="login.php">Login</a>
        <a class="nav-link" style="position: relative; left:970px;" href="register.php">Register</a>
    </nav>
    <nav class="navbar navbar-expand-lg" style="background-color: #F9F306;">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
          </ul>
          <div>
             <a href="home.html" class="img"><img src="images/imgs/rowbg.png" width="80px" height="80px"></a>
        </div>
          <form action="items.php" method="GET">
            <input name="search" type="text" placeholder="Type here">
            <input name="submit" type="submit" value="Search">
        </form>
          
          <a class="nav-link my-1" href="#" style="font-size: 30px; color: black;"><i class="fas fa-shopping-cart"></i></a>
        </div>
      </nav>
    
    <!--start banner-->
    <div class="container-fluide">
        <img src="images/imgs/banner1.jpg" height="500px" width="100%">
        
    </div>
     <!--End banner-->

        <div class="container">
        <h1 style="text-align: center; padding: 30px;">ALL CATEGORIES</h1>
        <div class="row mx-5">
        <?php foreach($results as $result) {
        //if ($search==$result['name']) {
        		
        	?>
            <div class="col-md-3 mt-2">
                <div class="card" style="border-color: #F0B73B;" id="card1">
                    <img src="backend/<?php echo $result['photo']; ?>" class="card-img-top" width="50px" height="200px" id="img1" >
                    <div class="card-body ">
                    Name:<?php echo $result['name']; ?><br>
                        Code:<?php echo $result['code']; ?><br>
                        Size:<?php echo $result['size']; ?><br>
                        Color:<?php echo $result['color']; ?><br>
                        Price:<span style="color: red">**<?php echo $result['price']; ?>**</span>  
                    </div>
                    <div class="card-footer" style=" background-color: #90257D;">
                    <div class="container" >
        <div class="row">
        <div class="co-md-8" >
<input type="text" style="width:115px;height:25px;" placeholder="Enter Quantity">
        </div>
        <div class="col-md-2">
        <button type="submit" onclick="sub()" name="data">cart++</button>
        </div>
        </div>
      </div>
                    </div>
                  </div>
            </div>
            <?php }
       
       //}
         ?> 
        </div>
        
        
    
    </div>
      
      <div class="container my-5">
        
          
          <p style="font-size: 30px;text-align: center;"><strong>LOVELY CLIENTS COMMENTS</strong></p>
          
         
          <P style="text-align: center;">It is really awesome theme and specially mode for online shopping,<br>
             so this theme unique to create your drean website and help to promote.</P>
        
      </div>
    
       <!--start footer-->
       <div class="container-fluide" style="background-color:#EDFF06;">
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



    <script src="js/home.js"></script>
    </body>
    </html>