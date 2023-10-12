<?php
require_once("util-db.php");
require_once("model-customer-by-books.php");

$pageTitle = "Customer by Books";
include "view-header.php";
$books = selectCustomerbybooks($_GET['id']);
include "view-customer-by-books.php";
include "view-footer.php";
?>
