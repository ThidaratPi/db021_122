
<form method="get" action="">
<label>รหัส<input type="text" name="id_staff"/></label><br>
<label>ชื่อจริง<input type="text" name="first_name"/></label><br>
<label>นามสกุล <input type="text" name="last_name"/></label><br>
<label>วันเวลาจุดตรวจ <select name="name_customer">
    <?php foreach($customer_List as $dep) {echo "<option value = $dep->id_customer>
    $dep->name_customer</option>";}
    ?>
</select></label><br>

<input type="hidden"name="controller"value="detail"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="addDetail">Save</button>

</form>
