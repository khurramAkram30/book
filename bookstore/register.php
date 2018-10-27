<?php
include 'header.php';
?>
<?php
include("conn.php");
if(isset($_POST["btn-register"])){
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $gender=$_POST["gender"];
    $email=$_POST["email"];
    $password=$_POST["password"];

$query=mysqli_query($conn,"INSERT INTO `users` (`id`, `fname`, `lname`, `gender`, `email`,`password`,`status`) VALUES (NULL, '".$fname."', '".$lname."', '".$gender."', '".$email."','".$password."','1')");
    
    if($query){
        echo "<script>alert('You are register now')</script>";
                echo "<script>window.location='login.php'</script>";
    }
    else{
        echo "<script>alert('error')</script>";

    }

}

?>
  <div class="htc__login__register bg__white ptb--130" >
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <ul class="login__register__menu nav justify-contend-center" role="tablist">
                            <li role="presentation" class="login active"><a class="active" href="#login" role="tab" data-toggle="tab">Register</a></li>
                           <!--  <li role="presentation" class="register"><a href="#register" role="tab" data-toggle="tab">Register</a></li> -->
                        </ul>
                    </div>
                </div>
                <!-- Start Login Register Content -->
             <div class="row tab-content">
                    <div class="col-md-6  ml-auto mr-auto">
                        <div class="htc__login__register__wrap">
                            <!-- Start Single Content -->
                            <div id="login" role="tabpanel" class="single__tabs__panel tab-pane active">
                                <form class="login" action="register.php" method="post">
                                    <input type="text" name="fname" placeholder="First Name">
                                    <input type="text" name="lname" placeholder="Last Name">
                    
                                    <input type="text" name="gender" placeholder="Gender">
                    
                                
                                <input type="email" name="email" placeholder="Email">
                                <input type="password" name="password" placeholder="Password">
                                <button type="submit" class="btn" name="btn-register">Register</button> 
                                
                                </form>
                                <div class="htc__login__btn mt--30">
                                   

                                </div>
                                                            </div>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                           <!--  <div id="register" role="tabpanel" class="single__tabs__panel tab-pane">
                                <form class="login" method="post">
                                    <input type="text" placeholder="Name*">
                                    <input type="email" placeholder="Email*">
                                    <input type="password" placeholder="Password*">
                                </form>
                                <div class="tabs__checkbox">
                                    <input type="checkbox">
                                    <span> Remember me</span>
                                </div>
                                <div class="htc__login__btn">
                                    <a href="#">register</a>
                                </div>
                               
                            </div> -->
                            <!-- End Single Content -->
                        </div>
                    </div>
                </div>
                <!-- End Login Register Content -->
            </div>
        </div>

                                <?php

                                include 'footer.php';
                                ?>