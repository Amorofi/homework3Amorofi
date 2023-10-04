<h1>Customer by books</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Books Title</th>
        <th>Publication date</th>
        <th>Author ID</th>
        <th>Date</th>
        <th>Customer ID</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($customer = $customers->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $customer['book_id']; ?></td>
          <td><?php echo $customer['title']; ?></td>
          <td><?php echo $customer['publication_date']; ?></td>
          <td><?php echo $customer['author_id']; ?></td>
          <td><?php echo $customer['date']; ?></td>
          <td><?php echo $customer['customer_id']; ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
