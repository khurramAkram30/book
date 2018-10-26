<?php 
include 'header.php';
$catid='';
$subcatid='';
if($_GET["catid"] !== null && $_GET["subcat_id"] !== null){
    $catid=$_GET["catid"];
    $subcatid=$_GET["subcat_id"];
}
?>

<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/innerpages.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Product Details</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">Product Details</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            
            <section class="htc__product__area ptb--130 bg__white">
                    <h1 style="text-align:center"> Search Result:</h1>
            
       
<div class="container">
       
                <div class="htc__product__container">
                    <!-- Start Product MEnu -->
                   
                   <!--  <div class="row">
                        <div class="col-md-12">
                            <div class="product__menu">
                                <button data-filter="*" class="is-checked">All</button>
                                <button data-filter=".cat--1">Furnitures</button>
                                <button data-filter=".cat--2">Bags</button>
                                <button data-filter=".cat--3">Decoration</button>
                                <button data-filter=".cat--4">Accessories</button>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Product MEnu -->
                    
                    
                    <div class="row product__list" style="position: relative; height: 1604px;">
                        <!-- Start Single Product -->
                       
                        <?php 
                        include 'conn.php';
                        if($_GET["catid"]  && $_GET["subcat_id"]){
                            
                            $query=mysqli_query($conn,"SELECT * FROM products where category='".$catid."' and sub_category='".$subcatid."'");


                            while ($row=mysqli_fetch_array($query)) 
                              { 
                                $id=$row[0];
                               echo '     <div class="col-md-3 single__pro col-lg-3 col-md-4 cat--1 col-sm-12" style="position: absolute; left: 0%; top: 0px;">
                                <div class="product foo" data-sr-id="1" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; ">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="123">
                                                <img src="./admin/images/'.$row[7].'
                                                " style="height: 300px;" alt="product images">
                                            </a>
                                        </div>
                                        <div class="product__hover__info">
                                            <ul class="product__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add TO Cart" href="cart.php?"><span class="ti-shopping-cart"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add__to__wishlist">
                                            <a data-toggle="tooltip" title="" class="add-to-cart" href="wishlist.html" data-original-title="Add To Wishlist"><span class="ti-heart"></span></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                    <form method="post" name="" action="cart.php?action=add&id='.$id.'&name='.$row[1].'">
                                        <input type="hidden" name="pro_name" value='.$row[1].'>
                                        <input type="hidden" name="pro_price" value='.$row[6].'>
                                        
                                        <h2 style="text-align:center"><a href="product-details.php?id='.$id.'">Simple Black Clock</a></h2>
                                            <h2 style="text-align:center">RS:200</h2>
                                            <input type="submit" style="text-align:center;width:100%" name="btn_submit"  value="Add To Cart" class="btn">
                                        
     </form>    
                                            </div>
                                </div>
                            </div>';
                            }
    
                        
                        } 
                        else {

                            $query=mysqli_query($conn,"SELECT * FROM products where category='".$_GET["catid"]."'");


                            while ($row=mysqli_fetch_array($query)) 
                              { 
                                $id=$row[0];
                               echo '     <div class="col-md-3 single__pro col-lg-3 col-md-4 cat--1 col-sm-12" style="position: absolute; left: 0%; top: 0px;">
                                <div class="product foo" data-sr-id="1" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; ">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="123">
                                                <img src="./admin/images/'.$row[7].'
                                                " style="height: 300px;" alt="product images">
                                            </a>
                                        </div>
                                        <div class="product__hover__info">
                                            <ul class="product__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add TO Cart" href="cart.php?"><span class="ti-shopping-cart"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add__to__wishlist">
                                            <a data-toggle="tooltip" title="" class="add-to-cart" href="wishlist.html" data-original-title="Add To Wishlist"><span class="ti-heart"></span></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                    <form method="post" name="" action="cart.php?action=add&id='.$id.'&name='.$row[1].'">
                                        <input type="hidden" name="pro_name" value='.$row[1].'>
                                        <input type="hidden" name="pro_price" value='.$row[6].'>
                                        
                                        <h2 style="text-align:center"><a href="product-details.php?id='.$id.'">Simple Black Clock</a></h2>
                                            <h2 style="text-align:center">RS:200</h2>
                                            <input type="submit" style="text-align:center;width:100%" name="btn_submit"  value="Add To Cart" class="btn">
                                        
     </form>    
                                            </div>
                                </div>
                            </div>';
                            }
    

                            }                       
                        ?>
                   
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                
                        <!-- End Single Product -->
                    </div>
                </div>
                    </div>
 </section>
   <?php
 include 'footer.php';
 ?>