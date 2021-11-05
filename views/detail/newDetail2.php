<form method="get" action="">

<label>วันเวลาจุดตรวจ <select name="id_date">
    <?php foreach($detail_List as $dep) {echo "<option value = $dep->id_date>
    วันที่ $dep->date เวลา $dep->time จุดตรวจที่ $dep->name_checkpoint  $dep->country $dep->province </option>";}
    ?>
</select></label><br>


<input type="hidden"name="controller"value="detail"/>
<input type="hidden" name="id_staff" value="<?php echo $staff->id_staff; ?>"/>
<input type="hidden" name="id_position" value="<?php echo $position->id_position; ?>"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="addDetail">Save</button>

</form>
