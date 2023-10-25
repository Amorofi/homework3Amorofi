<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editorderModal<?php echo $book['order_id']; ?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
  </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editorderModal<?php echo $book['order_id']; ?>" tabindex="-1" aria-labelledby="editorderModal<?php echo $book['order_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editorderModal<?php echo $book['order_id']; ?>">Edit Customer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method = "post" action = "">
            <div class="mb-3">
              <label for="cid<?php echo $book['order_id']; ?>" class="form-label">Customer Id</label>
<?php
$customerList = selectCustomersForInput();
$selectedCustomer = $book['customer_id'];
include "view-customer-input-list.php";
?>
            </div>
            <div class="mb-3">
              <label for="bid<?php echo $book['order_id']; ?>" class="form-label">Customer id</label>
              <input type="text" class="form-control" id="cid<?php echo $book['order_id']; ?>" name = "cid" value= "<?php echo $book['order_id']; ?>">
            </div>
            <div class="mb-3">
              <label for="date<?php echo $book['order_id']; ?>" class="form-label">Customer Number</label>
              <input type="text" class="form-control" id="date<?php echo $book['order_id']; ?>" name = "date" value="<?php echo $book['order_id']; ?>">
            </div>
              <input type="hidden" name = "cid" value="<?php echo $book['order_id']; ?>">
            <input type="hidden" name="actionType" value="Edit">
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
      </div>
    </div>
  </div>
</div>
