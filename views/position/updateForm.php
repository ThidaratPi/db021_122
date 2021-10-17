
<form method="get" action="">
<label>รหัสตำแหน่ง <input type="text" name="id_position" 
        value="<?php echo $position->id_position;?>"/></label><br>
<label>ชื่อตำแหน่ง <input type="text" name="name_position"
        value="<?php echo $position->name_position;?>"/></label><br>
<label>รายได้<input type="text" name="income"
        value="<?php echo $position->income;?>"/></label><br>

<input type="hidden"name="controller"value="position"/>
<input type="hidden" name="id" value="<?php echo $position->id_position; ?>"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="update">update</button>

</form>
