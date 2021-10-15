
<form method="get" action="">
<label>เลขบัตรประชาชน <input type="text" name="id_staff"/></label><br>
<label>ชื่อจริง<input type="text" name="first_name"/></label><br>
<label>นามสกุล <input type="text" name="last_name"/></label><br>
<label>วันเกิด <input type="date" name="DOB"/></label><br>
<label>เบอร์โทรศัพท์ <input type="text" name="phone"/></label><br>
<label>ที่อยู่ <input type="text" name="address_staff"/></label><br>
<label>หน่วยงาน <select name="name_agency">
    <?php foreach($agency_List as $dep) {echo "<option value = $dep->id_agency>
    $dep->name_agency</option>";}
    ?>
</select></label><br>


<input type="hidden"name="controller"value="staff"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="addStaff">Save</button>

</form>
