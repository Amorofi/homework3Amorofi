<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'amorofio_hw3user', '[nN&qm=F8N(q' , 'amorofio_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
