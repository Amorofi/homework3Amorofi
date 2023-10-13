<div class ="row">
  <div class ="col">
    <h1>Customers</h1>
  </div>
  <div class ="col-auto">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-plus-fill" viewBox="0 0 16 16">
      <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm.5 4v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z"/>
    </svg>
  </div>  
</div>


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
