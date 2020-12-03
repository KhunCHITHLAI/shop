
<?php
include_once('controller/itemcontroller.php');
$cid=$_GET['id'];
$itemcontroller=new ItemController();
$results=$itemcontroller->Items($cid);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1 style="text-align: center; ">ALL ITEMS</h1>
        <div class="container">
            <div class="row mx-5">
        
        <?php foreach($results as $result){
?>
<div class="col-md-3 mb-2">
                <div class="card" style="border-color: #F0B73B;" id="card1">
                    <img src="backend/<?php echo $result['photo']; ?>" class="card-img-top" width="50px" height="200px" id="img1" >
                    <div class="card-body " >
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
            <?php
        } ?>
    </div>
</div>
</body>
</html>
<?php
require("footer.php");
?>