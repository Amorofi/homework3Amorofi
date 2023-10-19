<select class="form-select" id="cid" name="cid">
<?php
while($customerItem = $customerList->fetch_assoc()) {
?> 
    <option value="<?php echo $customerItem['customer_id']; ?> " ><?php echo $customerItem['customer_name']; ?> </option>
<?php
}
?>

</select>
