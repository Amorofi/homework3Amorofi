<?php
require_once("util-db.php");
require_once("model-books-by-customer.php");

$pageTitle = "Books by Customer";
include "view-header.php";
$books = selectBooksByCustomer($_GET['id']);
include "view-books-by-customer.php";
include "view-footer.php";
?>
