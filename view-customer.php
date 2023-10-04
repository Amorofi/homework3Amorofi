<h1>Customers</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Customers </th>
        <th>Emails</th>
        <th>Phone Number</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($customer = $customers->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $customer['customer_id']; ?></td>
          <td><?php echo $customer['customer_name']; ?></td>
          <td><?php echo $customer['email']; ?></td>
          <td><?php echo $customer['phone']; ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
