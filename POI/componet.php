
<?php

function component($productname,$productprice,$productimg,$productauthor,$productid){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"product.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\" id=\"imgPro\">
                        </div>
                        <div class=\"card-body\" id=\"carddir\">
                            <h5 class=\"card-title\">$productname</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">
                               $productauthor
                            </p>
                            <h5>
                                <small><s class=\"text-secondary\">100 ريال</s></small>
                                <span class=\"price\">$productprice ريال</span>
                            </h5>
                            <button type=\"submit\" class=\"btn btn-light btn-outline-secondary my-3\" name=\"add\">  أضف إلى السلة  <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice,$productauthor, $productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6 dir mt-4\">
                                <h5 class=\"pt-2 mt-3\">$productname</h5>
                                <small class=\"text-secondary ml-4\">$productauthor</small>
                                <h5 class=\"pt-2 mt-2 ml-5\">$productprice ريال </h5>
                                
                                <button type=\"submit\" class=\"btn btn-outline-danger mt-2 ml-5\" name=\"remove\">حذف</button>
                            </div>
                            <div class=\"col-md-3 py-5 dir\">
                                <div>
                                <button type=\"button\" class=\"btn bg-light \"><i class=\"fas fa-minus\"></i></button>
                                <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                <button type=\"button\" class=\"btn bg-light \"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;

}

?>