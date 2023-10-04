<h1>Authors</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Nationality</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($author = $authors->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $author['authors_id']; ?></td>
          <td><?php echo $author['authors_name']; ?></td>
          <td><?php echo $author['birth_date']; ?></td>
          <td><?php echo $author['nationality']; ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
