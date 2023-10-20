<?php
function selectAuthors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT authors_id, authors_name, birth_date, nationality FROM `authors`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectAuthorsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT authors_id, authors_name, FROM `authors` order by authors_name");
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

function insertAuthors($cName, $Bd, $Na) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `authors` (`authors_name`, `birth_date`, `nationality`) VALUES ('?', '?', '?')");
        $stmt->bind_param("sss", $cName, $Bd, $Na);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateAuthors($cName, $Bd, $Na, $aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `authors` set  `authors_name` = ?, `birth_date` = ?, `nationality` = ? where authors_id = ?");
        $stmt->bind_param("sssi", $cName, $Bd, $Na,$aid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteAuthors($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from authors where authors_id = ?");
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
