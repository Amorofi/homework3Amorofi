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

function insertCustomers($cName, $cMail, $cNumber) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `customer` (`customer_name`, `email`, `phone`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $cCustomer, $cInfo, $cNumber);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateCustomers($cName, $cMail, $cNumber, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `customer` set  `customer_name` = ?, `email` = ?, `phone` = ? where customer_id = ?");
        $stmt->bind_param("sssi", $cCustomer, $cInfo, $cNumber, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteCustomers($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from customer where customer_id = ?");
        $stmt->bind_param("i", $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
