<?php
require_once("util-db.php");
require_once("model-customer-with-books.php");

$pageTitle = "Customer with books";
include "view-header.php"; 

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertCustomers($_POST[`cid`], $_POST[`bid`],  $_POST['ttitle'], $_POST['pd'], $_POST['aid'], $_POST[`ddate`])) {
          echo '<div class="alert alert-success" role="alert"> Customer was successfully added. </div>'; 
        }else {
          echo '<div class="alert alert-danger" role="alert"> Error try again. </div>';
        }
      break;

        case "Edit":
      if (updateCustomers($_POST[`cid`], $_POST[`bid`],  $_POST['ttitle'], $_POST['pd'], $_POST['aid'], $_POST[`ddate`], $_POST['$oid'])) {
          echo '<div class="alert alert-success" role="alert"> Customer was successfully edited. </div>'; 
        }else {
          echo '<div class="alert alert-danger" role="alert"> Error try again. </div>';
        }
      break;
    
        case "Delete":
      if (deleteCustomers($_POST['$oid'])) {
          echo '<div class="alert alert-success" role="alert"> Customer was successfully deleted. </div>'; 
        }else {
          echo '<div class="alert alert-danger" role="alert"> Error try again. </div>';
        }
      break;
  }
}

$customer = selectCustomers();
include "view-customer-with-books.php";
include "view-footer.php";
?>
