
<?php
session_start();
include("conn.php");
if (isset($_POST["btn-login"])) {
    $email=$_POST["username"];
    $password=$_POST["password"];
$sql = "SELECT * FROM `users` where email='".$email."' and password='".$password."' ";
$query=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($query)) {
    // echo $row[0];
        $_SESSION["id"]=$row[0];
        echo $_SESSION["id"];
        echo "<script>alert('U are now login')</script>";
    echo "<script>window.location='index.php'</script>";
}

}

?>

<?php
include 'header.php';
?>


  <div class="htc__login__register bg__white ptb--130" >
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <ul class="login__register__menu nav justify-contend-center" role="tablist">
                            <li role="presentation" class="login active"><a class="active" href="#login" role="tab" data-toggle="tab">Login</a></li>
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
                            <form class="login" action="login.php" method="post">
                                    <input type="text" name="username" placeholder="User Name*">
                                    <input type="password" name="password" placeholder="Password*">
                                 <button type="submit" class="btn" name="btn-login">Login</button> 

                                </form>
                                <br>
                                <div class="tabs__checkbox">
                                    
                                    <span>Dont have an account yet?<a href="register.php">Register Here</a> </span>
                                    <!-- <span class="forget"><a href="#">Forget Pasword?</a></span> -->
                              
                                </div>
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