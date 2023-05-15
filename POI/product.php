<?php
session_start();

require_once('database.php');
require_once("componet.php");

// create instance of Createdb class (database name,table)
$database = new CreateDb("reader", "Producttable");

if (isset($_POST['add'])) {

    /// print_r($_POST['product_id']);
    if (isset($_SESSION['cart'])) {

        //ياخدذ من الانبوت المخفي رقم المنتج ويخزنه في اراي حقت الارقام
        $item_array_id = array_column($_SESSION['cart'], "product_id");

        // اذا المنتج اساسا موجود في الاري حق الايدي يعني اضافه للسة وموجود في السشن 
        if (in_array($_POST['product_id'], $item_array_id)) {
            echo "<script>alert('المنتج مضاف مسبقا')</script>; ";

            //redirct to the page after the alert
            echo "<script>window.location = 'product.php'</script>";
        } else {
            //if not in the array then count number of element in the session var and .
            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }
    } else {
        //####
        $item_array = array(
            'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
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
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<?php
require_once("componet.php");
?>

<body id="card-color">


    <!--cart header-->
    <nav class="navbar navbar-expand-lg bg-white mt-5">
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


    <div class="container" style="width:80%;">
        <div class="row mb-5">
            <?php
            $result = $database->getData();
            while ($row = mysqli_fetch_assoc($result)) {
                component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_author'], $row['id']);
            }
            ?>
        </div>
    </div>


    <script src="nav/nav.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>