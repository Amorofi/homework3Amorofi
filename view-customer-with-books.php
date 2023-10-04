<h1>Customer with books</h1>
<div class="card-group">
 <?php
while ($book = $books->fetch_assoc()) {
 ?>
      <div class="card">
            <div class="card-body">
                  <h5 class="card-title"><?php echo $book['title']; ?></h5>
                  <p class="card-text">
                   <ul class="list-group">
<?php
      $customer = selectCustomerByBooks($customer['book_id'];);
      while ($customer = $customer->fetch_assoc()) {
?>
       <li class="list-group-item"><?php echo $book['publication_date']; ?> - <?php echo $book['title']; ?> - ><?php echo $book['date']; ?> </li>

<?php
      }
?>
                   </ul>
          </p>
          <p class="card-text"><small class="text-body-secondary">publication: <?php echo $book['publication_date']; ?> </small></p>
       </div>
 </div>
<?php
}
?>
</div>
