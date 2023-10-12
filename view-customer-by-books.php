<h1>Customer by books</h1>
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
      while ($customer = $customer->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $customers['customer_id']; ?></td>
          <td><?php echo $customers['customer_name']; ?></td>
          <td><?php echo $customers['email']; ?></td>
          <td><?php echo $customers['phone']; ?></td>
          
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
