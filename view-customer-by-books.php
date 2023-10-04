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
          <td><?php echo $book['book_id']; ?></td>
          <td><?php echo $book['title']; ?></td>
          <td><?php echo $book['publication_date']; ?></td>
          <td><?php echo $book['author_id']; ?></td>
          <td><?php echo $book['date']; ?></td>
          <td><?php echo $book['customer_id']; ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
