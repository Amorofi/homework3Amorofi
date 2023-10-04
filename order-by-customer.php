<?php
require_once("util-db.php");
require_once("model-order-by-customer.php");

$pageTitle = "Order by customer";
include "view-header.php";
$order = selectOrderByCustomer($_POST['cid']);
include "view-order-by-customer.php";
include "view-footer.php";
?>
