<?php
if($_POST["action"] == 'remove')
{
    $id = $_POST["prod_id"];
    if (isset($_COOKIE["cart"]))
    {
        $cart_cookie=stripslashes($_COOKIE["cart"]);
        $cart_data=json_decode($_COOKIE["cart"],true);  
        foreach($cart_data as $keys=>$values){
          $p_id=$cart_data[$keys]["pd_id"]; 
          $quant=$cart_data[$keys]["pd_quant"]; 
          print_r($quant);
            if($values["pd_id"] == $id)
            {
                print_r($p_id);
               unset($cart_data[$keys]);
               $cart_rest_item = json_encode($cart_data);
               setcookie("cart", $cart_rest_item, time() + (300));		
                $output['message'] = 'Deleted';
                // header("location:cart.php");
                // header("Refresh:0; location:cart.php");
            }
        }
    } echo json_encode($output);
}
?>
