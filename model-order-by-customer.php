<?php
function selectOrderByCustomer($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT b.book_id, title, publication_date, author_id, order_id, date FROM `books` b join orders o on o.book_id = b.book_id where o.book_id =? ");
        $stmt->bind_param("i", $cid,);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
