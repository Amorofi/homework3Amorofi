<?php
require_once("util-db.php");
require_once("model-customer.php");

$pageTitle = "Customer";
include "view-header.php";
$customer = selectCustomer();
include "view-customer.php";
include "view-footer.php";
?>
