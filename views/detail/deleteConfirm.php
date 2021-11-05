<?php echo "<br>Are you sure to delete this detail<br>
   ชื่อ-นามสกุล $dep->first_name $dep->last_name หน้าที่ $dep->name_position <br>
   วันที่ $dep->date เวลา $dep->time จุดตรวจที่ $dep->name_checkpoint  $dep->country $dep->province";?>

<form method="get" action="">
    <input type="hidden" name="controller" value="detail"/>
    <input type="hidden" name="id" value="<?php echo $dep->id_staff_checkpoint;?>"/>
    <button type="submit" name="action" value="index">back</button>
    <button type="submit" name="action" value="delete"> delete</button>
</form>
           