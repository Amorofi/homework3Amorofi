<h1>Order by customer</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Books Title</th>
        <th>Publication date</th>
        <th>Author ID</th>
        <th>Order ID</th>
        <th>Date</th>
        
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($order = $orders->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $order['book_id']; ?></td>
          <td><?php echo $order['title']; ?></td>
          <td><?php echo $order['publication_date']; ?></td>
          <td><?php echo $order['author_id']; ?></td>
          <td><?php echo $order['order_id']; ?></td>
          <td><?php echo $order['date']; ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
