<?php 
// session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Uniqlo-Minimalist eCommerce Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    
    <!-- Bootstrap Fremwork Main Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- All Plugins css -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer" style="margin-bottom: 304px;">
        <!-- Start Header Style -->
        <header id="header" class="htc-header">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header" style="background: #f0f8ffba;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-6">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="images/logo/uniqlo.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <!-- Start MAinmenu Ares -->
                        <div class="col-md-8 col-lg-8 d-none d-md-block">
                            <nav class="mainmenu__nav  d-none d-lg-block">
                                <ul class="main__menu">
                                    <li class="drop"><a href="maincontent.php">Home</a>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                   
                                      
                                          
                                    <li class="drop"><a href="#">Categories</a>
                                        <ul class="dropdown">
                                            <?php
                                           include 'conn.php';
                                           $query=mysqli_query($conn,"select * from category");
                                          
                                           while($row=mysqli_fetch_array($query)){
                                            $cat_id=$row[0];
                                            $cat_name=$row[1];
                                            echo "<li><a href='categories.php?catid=".$cat_id."'>".$cat_name."</a>";
                                            echo "<ul >";
                                            $sub=mysqli_query($conn,"select * from sub_category where cat_name='".$cat_id."'");
                                                while($row1=mysqli_fetch_array($sub)){
                                                    $catid=$row1[1];
                                                    $subcatid=$row1[0];
                                                    $subcatname=$row1[2];
                                                    
                                                    echo "<li><a style='backgroung:red !important' href='categories.php?catid=".$cat_id."&subcat_id=".$subcatid."'>$subcatname</li>";
                                                    // if($cat_id == $catid){
                                                   
                                                                                                
                                                    // }
                                                    // else{
                                                    //     echo "<li>
                                                    //     <a href='categories.php?id=".$cat_id."'>".$cat_name."</a></li>
                                                    //     ";
                                                    // }
                                                }
                                                   echo  "</ul></li>"; 
                                           }
                                           ?>
                                            
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">contact</a></li>
                                <li><a href="contact.html">Faqs</a></li>
                                </ul>

                            </nav>
                            
                            <!-- <div class="mobile-menu clearfix d-block d-lg-none">
                                <nav id="mobile_dropdown" style="display:none !important">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                       
                                        <li><a href="#">Categories</a>
                                            <ul>
                                                <li><a href="about.html">about</a></li>
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="team.html">team</a></li>
                                                <li><a href="login-register.html">login & register</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Faqs</a></li>

                                        <li><a href="contact.html">About</a></li>
                                    </ul>
                                </nav>
                            </div>   -->
                        </div>
                        <!-- End MAinmenu Ares -->
                        <div class="col-md-2 col-lg-2 col-6">  
                            <ul class="menu-extra">
                                <li class="search search__open d-none d-sm-block"><span class="ti-search"></span></li>
                                <li><a href="login-register.html"><span class="ti-user"></span></a></li>
                                <li class="cart__menu"><span class="ti-shopping-cart"></span></li>
                                <li class="toggle__menu d-none d-md-block"><span class="ti-menu"></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        
            <!-- End Search Popap -->
            <!-- Start Offset MEnu -->
            <!-- End Cart Panel -->
        <!-- </div> -->