<?php
function selectCustomers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT customer_id, customer_name, email ,phone FROM `customer`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
} 

function selectCustomerbybooks($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT b.book_id, title, publication_date, author_id, order_id, date FROM `books` b join orders o on o.book_id = b.book_id where o.customer_id =? ");
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

function selectCustomersForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT customer_id, customer_name, FROM `customer` order by customer_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectBooksForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT book_id, title, FROM `books` order by title");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertOrder($cid, $bid, $ttitle, $pd, $aid, $ddate) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `orders` (`customer_id`, `book_id`, 'title', 'publication_date', 'author_id', 'date') VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sss", $cid, $bid, $ttitle, $pd, $aid, $ddate);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateOrder($cid, $bid, $ttitle, $pd, $aid, $ddate, $oid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `orders` set  `customer_id` = ?, `book_id` = ?, 'title' = ?, 'publication_date' = ?, `date` = ? where order_id = ?");
        $stmt->bind_param("sssi", $cid, $bid,$ttitle, $pd, $aid, $ddate, $oid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteOrder($oid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from orders where order_id = ?");
        $stmt->bind_param("i", $oid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }

}

?>
