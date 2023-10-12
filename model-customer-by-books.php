<?php
function selectCustomerbybooks($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT b.book_id, title, publication_date, author_id, date, customer_id FROM `books` b join orders o on o.book_id = b.book_id where o.customer_id =?");
        $stmt->bind_param("i", $iid,);
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
