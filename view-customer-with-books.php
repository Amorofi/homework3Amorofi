<h1>Books</h1>

      <?php
      while ($book = $books->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $book['book_id']; ?></td>
          <td><?php echo $book['title']; ?></td>
          <td><?php echo $book['publication_date']; ?></td>
          <td><?php echo $book['author_id']; ?></td>
          <td><a href="customer-by-books.php?id=<?php echo $book['book_id']; ?>">Customer</a></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
