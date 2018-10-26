<?php
include 'conn.php';

session_start();
if(isset($_POST["btn_submit"])){

    if(isset($_SESSION["shopping_cart"])){
        $item_array_id=array_column($_SESSION["shopping_cart"],"item_id");
       
        if(!in_array($_GET["id"],$item_array_id)){
            $count=count($_SESSION["shopping_cart"]);
            $item_array=array(

                'item_id'    => $_GET["id"],
                'item_name'  => $_GET["name"],
                'item_price' => $_POST["pro_price"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else{
            echo "<script>alert('item already added');</script>";
            echo "<script>window.location='maincontent.php'</script>";
            
        }
    }
    else{

        $item_array=array(

            'item_id'    => $_GET["id"],
            'item_name'  => $_POST["pro_name"],
            'item_price' => $_POST["pro_price"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}

?>


<table>

<tr>
    <th>#</th>
    <th>Name</th>
    <th>Price</th>
</tr>
<?php
if(!empty($_SESSION["shopping_cart"])){
    $total=0;
    foreach($_SESSION["shopping_cart"] as $keys => $values){

        ?>
        <tr>
            <td><?php echo $values["item_name"]; ?></td>
            <td><?php echo $values["item_price"]; ?></td>
        </tr>
        <?php
    }
}
?>

</table>