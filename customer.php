<?php
require_once("util-db.php");
require_once("model-customer.php");

$pageTitle = "Customer";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertCustomers($_POST['cName'], $_POST['cMail'], $_POST['cNumber'])) {
          echo '<div class="alert alert-success" role="alert"> Customer added </div>'; 
        }else {
          echo '<div class="alert alert-danger" role="alert"> </div>';
        }
      break;
  }
}
$customer = selectCustomers();
include "view-customer.php";
include "view-footer.php";
?>
