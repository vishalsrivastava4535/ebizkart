<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product add</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<table>
<tr>
    <td>Product Name</td>
    <td><input type="text" name="pname" id="pname"></td>
</tr>
<tr>
    <td>Product Price</td>
    <td><input type="text" name="pprice" id="pprice"></td>
</tr>
<tr>
    <td>Product image</td>
    <td><input type="file" name="pimg" id="pimg"></td>
</tr>
<tr>
    <td>Product Category</td>
    <td><select name="pcateg" id="pcateg">
        <option value="new">New</option>
        <option value="special">Special</option>
        <option value="featured">Featured</option>

    </select></td>
</tr>
<tr>
    <td><input type="submit" value="Add Product" name="addprod"></td>
    <td><input type="reset" value="Reset"></td>
</tr>
</table>

</form>
<?php 
include "db.php";

if(isset($_POST["addprod"])){

$pname=$_POST["pname"];
$pprice=$_POST["pprice"];
$pcateg=$_POST["pcateg"];


$file_name = $_FILES['pimg']['name'];
$file_temp_loc= $_FILES['pimg']['tmp_name'];
$file_store= "imgupload/".$file_name;
move_uploaded_file($file_temp_loc, $file_store);


$sql ="INSERT INTO product_tbl(`p_name`,`p_price`,`p_category`,`p_image`) VALUES('$pname','$pprice','$pcateg','$file_name')";
if(mysqli_query($conn, $sql)){
    echo "record added.";
}
else{
    echo "Error: ".mysqli_error($conn);
}

    // echo "<script>alert('button working');</script>";
}

?>
</body>
</html>

