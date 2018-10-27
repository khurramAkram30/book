
<?php
session_start();
include 'header.php';

?>

<?php
include 'conn.php';


if(isset($_POST["btn_submit"])){

    if(isset($_SESSION["shopping_cart"])){
        $item_array_id=array_column($_SESSION["shopping_cart"],"item_id");
       
        if(!in_array($_GET["id"],$item_array_id)){
            $count=count($_SESSION["shopping_cart"]);
            $item_array=array(

                'item_id'    => $_GET["id"],
                'item_name'  => $_GET["name"],
                'item_price' => $_POST["pro_price"],
                'item_pic' => $_POST["pro_image"],
                'item_qty' => $_POST["qty"]
            
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else{
            echo "<script>alert('item already added');</script>";
            echo "<script>window.location='index.php'</script>";
            
        }
    }
    else{

        $item_array=array(

            'item_id'    => $_GET["id"],
            'item_name'  => $_POST["pro_name"],
            'item_price' => $_POST["pro_price"],
            'item_pic' => $_POST["pro_image"],
              'item_qty' => $_POST["qty"]

        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}

?>


  <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/innerpages.jpg) no-repeat scroll center center / cover ; background-size: 100% 100%">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Cart</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">Cart</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


         <div class="cart-main-area ptb--120 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
if(!empty($_SESSION["shopping_cart"])){
    $total=0;
    foreach($_SESSION["shopping_cart"] as $keys => $values){
              $product_total=$values['item_price'] * $values['item_qty'];
              $total+=$product_total;

        ?>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#">
                                            <img src="./admin/images/<?php echo $values['item_pic']; ?>" alt="product img" /></a></td>
                                            <td class="product-name"><a href="#"><?php echo $values["item_name"]; ?></a></td>
                                            <td class="product-price" id=><span class="amount">RS
                                                <?php echo $values["item_price"]; ?>
                                            </span></td>
                                            <td class="product-quantity"><input type="number" id="qty" value=<?php echo 
                                            $values['item_qty'] ?> /></td>
                                            <td class="product-subtotal">
                                                <?php                             
                        $product_total=$values['item_price'] * $values['item_qty'];
                         
                                                echo $product_total; ?>
                                            </td>
                                            <td class="product-remove"><a href="#">X</a></td>
                                        </tr>
                                        <?php
    }
}
?>
                                    </tbody>
                                </table>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-12">
                                    <div class="buttons-cart">
                                        <!-- <input type="submit" value="Update Cart" /> -->
                                        <a href="index.php">Continue Shopping</a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 ">
                                    <div class="cart_totals">
                                        <!-- <h5>Cart Totals</h2> -->
                                        <table>
                                            <tbody>
                                              <!--   <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td><span class="amount">
                                                        <?php echo $total?>
                                                    </span></td>
                                                </tr> -->
                                                
                                                <tr class="order-total">
                                                    <th>Order Total</th>
                                                    <td>
                                                        <strong><span class="amount"><?php echo $total?></span></strong>
                                                    </td>
                                                </tr>                                           
                                            </tbody>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <a href="proceedtocheckout.php?total=<?php echo ".$total.";
                                            ?>">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        <?php
        // include 'footer.php';

        ?>