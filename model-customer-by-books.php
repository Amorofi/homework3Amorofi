<?php
function selectCustomerbybooks($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.customer_id, customer_name, email ,phone FROM `customer` c join orders o on o.customer_id = c.customer_id WHERE o.book_id=?");
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
