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
      $books = selectCustomerbybooks($customers['customer_id']);
      while ($book = $books->fetch_assoc()){
?>       
      <td><?php echo $book['book_id']; ?></td>
      <td><?php echo $book['title']; ?></td>
      <td><?php echo $book['publication_date']; ?></td>
      <td><?php echo $book['author_id']; ?></td>
      <td><?php echo $book['order_id']; ?></td>
      <td><?php echo $book['date']; ?></td>
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
