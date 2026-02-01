<?php
include "connect.php";
$id = $_GET['id'];
$query = "DELETE FROM store WHERE id = $id";
if(mysqli_query($conn, $query)){
    echo "product deleted successfully";
}else{
    echo "error deleting product";
}
header("location: manage_products.php");
exit;
?>