<?php
require_once("util-db.php");
require_once("model-customer.php");

$pageTitle = "Customers";
include "view-header.php";
$customers = selectCustomers();
include "view-customer.php";
include "view-footer.php";
?>
