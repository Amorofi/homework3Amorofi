<h1>Customer with books</h1>
<div class="card-group">
 <?php
while ($book = $books->fetch_assoc()) {
 ?>
      <div class="card">
            <div class="card-body">
                  <h5 class="card-title"><?php echo $book['title']; ?></h5>
                  <p class="card-text">
<?php
      $customer = selectCustomerByBooks($book['book_id'];);
      while ($customer = $customer->fetch_assoc()) {
?>
<?php
      }
?>
          </p>
          <p class="card-text"><small class="text-body-secondary">publication: <?php echo $book['publication_date']; ?> </small></p>
       </div>
 </div>
<?php
}
?>
</div>
