<h1>Customer by books</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Author</th>
        <th>Book title</th>
        <th>Emails</th>
        <th>Phone Number</th>
        <th>Publication</th>
        
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($book = $books->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $book['customer_id']; ?></td>
          <td><?php echo $book['customer_name']; ?></td>
          <td><?php echo $book['title']; ?></td>
          <td><?php echo $book['email']; ?></td>
          <td><?php echo $book['phone']; ?></td>
          <td><?php echo $book['publication_date']; ?></td>
          
          
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
