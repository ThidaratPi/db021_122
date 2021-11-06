<form method="get" action="">
<label>ชื่อ-นามสกุล <select name="id_staff">
<?php foreach($staff_List as $dep) {
        echo "<option value = $dep->id_staff";
        if($dep->id_staff==$staff->id_staff){echo " selected='selected'";}
         echo ">$dep->first_name $dep->last_name</option>";}
    ?>
</select></label><br>

<label>หน้าที่ <select name="id_position">
<?php foreach($position_List as $dep) {
        echo "<option value = $dep->id_position";
        if($dep->id_position==$position->id_position){echo " selected='selected'";}
         echo "> $dep->name_position</option>";}
    ?>
</select></label><br>



<input type="hidden"name="controller"value="detail"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="newDetail2">Next</button>

</form>