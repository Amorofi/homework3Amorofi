
 <div class="card">
   <div class="card-body">
      <h5 class="card-title"><?php echo $customers['customer_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
<?php
 $books = selectCustomerbybooks($customers['customer_id']);
 while ($book = $books->fetch_assoc()) {
   include "book.php";
 }
?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Email: <?php echo $customers['email']; ?></small></p>
      </div>
 </div>
