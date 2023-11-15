<?php
require_once("util-db.php");
require_once("model/customer-with-books.php");

$pageTitle = "Customer with books";
include "view-header.php";
$customer = selectCustomers();
include "view/customer-with-books/page.php";
include "view-footer.php";
?>
