
<form method="get" action="">
<label>รหัส<input type="text" name="id_staff_checkpoint"/></label><br>
<label>ชื่อ-นามสกุล <select name="id_staff">
    <?php foreach($staff_List as $dep) {echo "<option value = $dep->id_staff>
    $dep->first_name $dep->last_name</option>";}
    ?>
</select></label><br>
<label>หน้าที่ <select name="id_position">
    <?php foreach($position_List as $dep) {echo "<option value = $dep->id_position>
    $dep->name_position</option>";}
    ?>
</select></label><br>
<label>วันเวลาจุดตรวจ <select name="id_date">
    <?php foreach($date_List as $dep) {echo "<option value = $dep->id_date>
    วันที่ $dep->date เวลา $dep->time จุดตรวจที่ $dep->name_checkpoint  $dep->country $dep->province </option>";}
    ?>
</select></label><br>

<input type="hidden"name="controller"value="detail"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="addDetail">Save</button>

</form>
