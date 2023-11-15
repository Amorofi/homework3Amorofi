<h1>Customers with books</h1>
<div class="card-group">
<?php
while ($customers = $customer->fetch_assoc()) {
 include "customer.php";
?>     
  <li class="list-group-item"><?php echo $book['title']; ?> - <?php echo $book['author_id']; ?> - <?php echo $book['publication_date']; ?> - <?php echo $book['date']; ?></li>
<?php

}
?>
</div>
