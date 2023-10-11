<?php
require_once("util-db.php");
require_once("model-customer-with-books.php");

$pageTitle = "Customer with books";
include "view-header.php";
$books = selectCustomerBybooks();
include "view-customer-with-books.php";
include "view-footer.php";
?>
