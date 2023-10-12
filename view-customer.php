<h1>Customers</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Customers </th>
        <th>Emails</th>
        <th>Phone Number</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($customers = $customer->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $customers['customer_id']; ?></td>
          <td><?php echo $customers['customer_name']; ?></td>
          <td><?php echo $customers['email']; ?></td>
          <td><?php echo $customers['phone']; ?></td>

          <td>
            <form method = "post" action="order-by-customer.php">
                  <input type="hidden" name = "cid" value= "<?php echo $customers['customer_id']; ?>">
                  <button type="submit" class="btn btn-primary">Orders</button>
                </form>
          </td>
          
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
