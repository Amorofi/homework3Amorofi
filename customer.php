<?php
require_once("util-db.php");
require_once("model-customer.php");

$pageTitle = "Customer";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      insertCustomers($_POST['cName'], $_POST['cMail'], $_POST['cNumber']);
      break;
  }
}
$customer = selectCustomers();
include "view-customer.php";
include "view-footer.php";
?>
