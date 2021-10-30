
<form method="get" action="">
<label>รหัส <input type="text" name="id_staff_checkpoint" 
        value="<?php echo $detail->id_staff_checkpoint;?>"/></label><br>
<label>ชื่อจริง-นามสกุล <input type="text" name="id_staff"
        value="<?php echo $deatail->first_name .$detail->last_name;?>"/></label><br>
<label>หน้าที่<input type="text" name="id_position"
        value="<?php echo $detail->name_position;?>"/></label><br>
<label>วันเวลาจุดตรวจ<input type="text" name="id_date"
        value="<?php echo $detail->date .$detail->time .$detail->county .$detail->province;?>"/></label><br>



<input type="hidden"name="controller"value="detail"/>
<input type="hidden" name="id" value="<?php echo $detail->id_staff_checkpoint; ?>"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="update">update</button>

</form>
