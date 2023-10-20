<div class = "row">
  <div class="col">
    <h1>Customers with books</h1>
  </div>
 <div class="col-auto">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
  </svg>
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
