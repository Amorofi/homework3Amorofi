<div class = "row">
  <div class="col">
    <h1>Customers with books</h1>
  </div>
 <div class="col-auto">
<?php
include "view-customer-with-books-newform.php";
?>
 </div>

</div>

<div class="card-group">
<?php
while ($customers = $customer->fetch_assoc()) {
?>
 <div class="card">
   <div class="card-body">
      <h5 class="card-title"><?php echo $customers['customer_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">

        
<?php
 $books = selectCustomerbybooks($customers['customer_id']);
 while ($book = $books->fetch_assoc()) {
?> 
    <td> 
      <?php
         include "view-customer-with-books.php"
      ?>
    </td>    
    
  
  <li class="list-group-item"><?php echo $book['title']; ?> - <?php echo $book['author_id']; ?> - <?php echo $book['publication_date']; ?> - <?php echo $book['date']; ?></li>
<?php
 }
?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Email: <?php echo $customers['email']; ?></small></p>
      </div>
 </div>
<?php
}
?>
</div>
