<?php
$conn=mysqli_connect("localhost","root","","magnusnew");
if (isset($_POST["id"])){//checking is productid is recived or not
    $prd_id=$_POST["id"];
    if(isset($_COOKIE["cart"])){//cheching any cookie is already their or not
        $cart_cookie=stripslashes($_COOKIE["cart"]);
        $cart_data=json_decode($_COOKIE["cart"],true);//get excat array which is inserted along with same key's
    }else {
        $cart_data=array();//creating a array if any cookie(means any array whisch is stored in cookie) is not their
    }
    $list_of_existingid=array_column($cart_data,"pd_id");//creating a new array of all values which are stored in "pd_id" key in an $cart_data arrray
    if(in_array($prd_id,$list_of_existingid)){//checking the prd_id form existing values
        foreach($cart_data as $key=>$value){// to acesses the value's of $cart_data array
            if($cart_data[$key]["pd_id"]==$prd_id){//exactly match the value with evey "pd_id" key in array 
                $cart_data[$key]["pd_quant"]+=1;//increase 1 value on every time when same prd_id passed also say incease value on click
            }
        }
    }else{
        $new_prd=array(
            "pd_id"=>$prd_id,
            "pd_quant"=>1
        );
        $cart_data[]=$new_prd;
    }

    $jsn_encd_arr=json_encode($cart_data);
    setcookie('cart', $jsn_encd_arr, time() + (86400 * 30));
    print_r(json_decode($_COOKIE["cart"],true));
    
}
?>