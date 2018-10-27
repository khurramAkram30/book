<!-- 
 -->


   <!-- End Cart Panel -->
  <div class="slider__container slider--one">
            <div class="slider__activation__wrap owl-carousel owl-theme">
                <!-- Start Single Slide -->
                <div class="slide slider__full--screen" style="background: rgba(0, 0, 0, 0) url(images/maincontent.jpg) no-repeat scroll center center / cover ;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-4 col-sm-12 col-xs-12">
                                <div class="slider__inner">
                                    <h1>New Product <span class="text--theme">Collection</span></h1>
                                    <div class="slider__btn">
                                        <a class="htc__btn" href="cart.html">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
             <!--    <div class="slide slider__full--screen" style="background: rgba(0, 0, 0, 0) url(images/slider/bg/2.png) no-repeat scroll center center / cover ;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                <div class="slider__inner">
                                    <h1>New Product <span class="text--theme">Collection</span></h1>
                                    <div class="slider__btn">
                                        <a class="htc__btn" href="cart.html">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- End Single Slide -->
            </div>
        </div>

<section class="htc__product__area ptb--130 bg__white">
            
       
<div class="container">
        <h2 style="text-align: center">Latest Product</h2>
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
                        $query=mysqli_query($conn,"SELECT * FROM products LIMIT 10 ");


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
                                    <input type="hidden" name="pro_image" value='.$row[7].'>
                                    
                                    <h2 style="text-align:center">
                                    <a href="product-details.php?id='.$id.'">
                                          '.$row[1].'
                                        </a></h2>
                                        <h2 style="text-align:center">RS:
                                          '.$row[6].'</h2>
                                        <input type="number"
                                        placeholder="EnterQuantity" name="qty"
                                        style="width:50%;">
                                        <input type="submit" style="text-align:center;width:100%" name="btn_submit"  value="Add To Cart" class="btn">
                                        
 </form>    
                                        </div>
                            </div>
                        </div>';
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
 ?>