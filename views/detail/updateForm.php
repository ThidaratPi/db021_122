
<form method="get" action="">
<label> รหัส <input type="text" name="id_staff_checkpoint"
    value="<?php echo $detail->id_staff_checkpoint;?>"/> </label><br>
<label>ชื่อพนักงาน <select name="id_staff">
    <?php foreach($staff_List as $dep) {
        echo "<option value = $dep->id_staff";
        if($dep->id_staff==$detail->id_staff){echo " selected='selected'";}
         echo "> $dep->first_name $dep->last_name</option>";}
    ?>
    </select></label><br>
<label>หน้าที่ <select name="id_position">
<?php foreach($position_List as $dep) {
        echo "<option value = $dep->id_position";
        if($dep->id_position==$detail->id_position){echo " selected='selected'";}
         echo "> $dep->name_position</option>";}
    ?>
</select></label><br>
<label>วันเวลาจุดตรวจ <select name="id_date">
    <?php foreach($date_List as $dep) {
        echo "<option value = $dep->id_date";
        if($dep->id_date==$detail->id_date){echo " selected='selected'";}
         echo ">วันที่ $dep->date เวลา $dep->time อำเภอ $dep->county จังหวัด $dep->province</option>";}
    ?>
    </select></label><br>



<input type="hidden"name="controller"value="detail"/>
<input type="hidden" name="id" value="<?php echo $detail->id_staff_checkpoint; ?>"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="update">update</button>

</form>
