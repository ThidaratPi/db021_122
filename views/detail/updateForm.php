
<form method="get" action="">


<label>หน้าที่ <select name="id_position">
<?php foreach($position_List as $dep) {
        echo "<option value = $dep->id_position";
        if($dep->id_position==$detail->id_position){echo " selected='selected'";}
         echo "> $dep->name_position</option>";}
    ?>
</select></label><br>



<input type="hidden"name="controller"value="detail"/>
<input type="hidden" name="id" value="<?php echo $detail->id_staff_checkpoint; ?>"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="update">update</button>

</form>
