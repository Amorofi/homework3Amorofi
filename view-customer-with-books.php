<h1>Customers with books</h1>
<div class="card-group">
      <?php
      while ($customers = $customer->fetch_assoc()) {
      ?>
       <div class="card">
  
    <div class="card-body">
      <h5 class="card-title"><?php echo $customers['customer_name']; ?></h5>
      <p class="card-text">
<?php
      $book = selectCustomerbybooks($customers['customer_id']);
      while ($book = $books->fetch_assoc()){
?>                  
      <?php>
      }
?>
      </p>
      <p class="card-text"><small class="text-body-secondary">Email: <?php echo $customers['email']; ?></small></p>
    </div>
  </div>
      <?php
      }
      ?>
</div>
