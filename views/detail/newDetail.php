
<form method="get" action="">
<label>ชื่อ-นามสกุล <select name="id_staff">
    <?php foreach($staff_List as $dep) {echo "<option value = $dep->id_staff>
   เลขบัตรประชาชน $dep->id_staff ชื่อ $dep->first_name นามสกุล $dep->last_name</option>";}
    ?>
</select></label><br>
<label>หน้าที่ <select name="id_position">
    <?php foreach($position_List as $dep) {echo "<option value = $dep->id_position>
    $dep->name_position</option>";}
    ?>
</select></label><br>
<input type="hidden"name="controller"value="detail"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="newDetail2">Next</button>

</form>
