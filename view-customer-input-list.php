<select class="form-select" id="cid" name="cid">
<?php
while($customerItem = $customerList->fetch_assoc()) {
    $selText = "";
    if($selectedcustomer == $customerItem['customer_id']) {
        $selText = "selected";
    }
?> 
    <option value="<?php echo $customerItem['customer_id']; ?> " <?=$selText?> ><?php echo $customerItem['customer_name']; ?> </option>
<?php
}
?>

</select>
