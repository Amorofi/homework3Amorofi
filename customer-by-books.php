<?php
require_once("util-db.php");
require_once("model-customer-by-books.php");

$pageTitle = "customer by Books";
include "view-header.php";
$book = selectCustomerByBooks($_GET['id']);
include "view-customer-by-books.php";
include "view-footer.php";
?>
