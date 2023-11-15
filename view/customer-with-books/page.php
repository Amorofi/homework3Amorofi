<h1>Customers with books</h1>
<div class="card-group">
<?php
while ($customers = $customer->fetch_assoc()) {
 include "customer.php";

}
?>
</div>
