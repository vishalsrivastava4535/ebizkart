<?php 
    include "header.php";
    include "db.php";
    if(isset($_GET['id']))
    {
        $id= $_GET['id'];
        $result = mysqli_query($conn, "SELECT * FROM order_collection left join products_tbl on order_collection.oc_prid=products_tbl.p_id where oc_id='".$id."' ");
        $row = mysqli_fetch_array($result);
    }
    unset($_COOKIE['cart']);

    
?>
<div id="breadcrumb"> 
            <div class="container">
                <div class="le-breadcrumb inline"> 
                    <ul><li><a href="index.php" class="headerNavigation">Home</a></li><li><a href="mycart.php" class="headerNavigation">Cart</a></li><li><a href="mycart.php" class="headerNavigation">Order Collection</a></li></ul> 
                </div>
            </div> 
        </div> 
<div class="container"> 
        <div class="main">
            <div class="row">
                <div class="main-content">
                    <div id="contentarea-wrapper">
                        <div id="centercontent-wrapper" class="col-lg-9 col-md-9" >
                            <header>
                                <h4>Order Details</h4>
                            </header>
                            <table class="table">
                                <tr>
                                    <th>Your Order ID</th>
                                    <td><?php echo $row['oc_token_no'];?></td>
                                </tr>
                                <tr>
                                    <th>Shipping Address</th>
                                    <td><?php echo $row['oc_address'];?></td>
                                </tr>
                                <tr>
                                    <th>Amount</th>
                                    <td><?php echo $row['oc_pramount'];?></td>
                                </tr>
                                <tr>
                                    <th>Quantity</th>
                                    <td><?php echo $row['oc_prquant'];?></td>
                                </tr>
                                <tr>
                                    <th>Total Amount</th>
                                    <td><?php echo $row['oc_total_amount'];?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php";?>
               