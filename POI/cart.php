<?php
session_start();
require_once ("database.php");
require_once ("componet.php");

$db = new Createdb("store", "Producttable");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>منتجات</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="nav/nav.css">    
    <link rel="icon" href="image/Qarie.png" type="image/icon type">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&family=Aref+Ruqaa&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        
</head>
<?php
require_once("componet.php");
?>
<body>
    <!---cart header-->
<nav class="navbar navbar-expand-lg bg-white mt-5"style="z-index:2;" >
        <!-- <div class="navbar-brand">
        
            <div id="sideNav">

                <ul>
                    <li><a href="#">تتبع قراءتك</a></li>
                    <li><a href="store.php">المتجر</a></li>
                    <li><a href="#">الملف الشخصي</a></li>
                </ul>

            </div>
            <div id="menuBtn">
                <img src="image/menu.png">
            </div>
        </div> -->
        <?php include("nav/nav.php"); ?>

        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 pt-1 cart">
                       <b>سلة</b> 
                        <i class="fas fa-shopping-cart px-1"></i>
                        <?php
                        ?>
                    </h5>
                </a>
            </div>
        </div>
    </nav>

<!--cart body-->
<div class="container-fluid" id="card-color">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h6 class="mt-5 d-flex flex-row-reverse" style="font-size:25px;">سلتي</h6>
                <hr>

                <?php

                $total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    cartElement($row['product_image'],$row['product_name'],$row['product_price'],$row['product_author'], $row['id']);
                                    $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                    }else{
                        echo "<h5>Cart is Empty</h5>";
                    }

                ?>

            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-4 dir">
                <h6 class="position-absolute top-0 end-0">تفاصيل السعر</h6><br>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6 style=\"margin-left:5em;\"> السعر ( صنف $count)</h6>";
                            }else{
                                echo "<h6> السعر (0 عدد)</h6>";
                            }
                        ?>
                        <h6 style="margin-left:5em;">تفاصيل التوصيل</h6>
                        <hr>
                        <h6 style="margin-left:7em;">المبلغ الكلي</h6>
                    </div>
                    <div class="col-md-6">
                        <h6 style="margin-left:1em;"><?php echo $total; ?> ريال   </h6>
                        <h6 style="margin-left:1em;" class="text-success">مجاني</h6>
                        <hr>
                        <h6 style="margin-left:1em;"><?php
                            echo $total;
                            ?>   ريال   </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
<script src="nav/nav.js"></script>

</body>
</html>