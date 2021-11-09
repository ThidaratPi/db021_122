<?php echo "<br>Are you sure to delete this position<br>
            $position->id_position $position->name_position $position->income<br>";?>

<form method="get" action="">
    <input type="hidden" name="controller" value="position"/>
    <input type="hidden" name="id" value="<?php echo $position->id_position;?>"/>
    <button type="submit" name="action" value="index">back</button>
    <button type="submit" name="action" value="delete"> delete</button>
</form>
           