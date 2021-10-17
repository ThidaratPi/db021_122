<?php echo "<br>Are you sure to delete this order<br>
            $staff->id_staff $staff->first_name $staff->last_name<br>";?>

<form method="get" action="">
    <input type="hidden" name="controller" value="staff"/>
    <input type="hidden" name="id" value="<?php echo $staff->id_staff;?>"/>
    <button type="submit" name="action" value="index">back</button>
    <button type="submit" name="action" value="delete"> delete</button>
</form>
           