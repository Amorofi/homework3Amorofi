<h1>Customers with books</h1>
<div class="card-group">
      <?php
      while ($customers = $customer->fetch_assoc()) {
      ?>
       <div class="card">
  
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
        <tr>
          <td><?php echo $customers['customer_id']; ?></td>
          <td><?php echo $customers['customer_name']; ?></td>
          <td><?php echo $customers['email']; ?></td>
          <td><?php echo $customers['phone']; ?></td>

          
        </tr>
      <?php
      }
      ?>
</div>
