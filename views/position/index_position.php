<table border=1>
<br>new position <a href=?controller=position&action=newPosition> click</a>
<form method="get" action="">
<br>
        <input type="text" name="key">
        <input type="hidden" name="controller" value="position">
        <button type="submit" name="action" value="search">
search</button>
</form>
<tr><td>รหัสตำแหน่ง</td><td>ชื่อตำแหน่ง</td><td>รายได้</td><td>update</td></tr>
<?php foreach($position_List as $position)
{
        echo "<tr><td>$position->id_position</td>
        <td>$position->name_position</td>
        <td>$position->income</td>
        <td>
        <a href=?controller=position&action=updateForm&id_position=$position->id_position>update</a>
        </td></tr>";
}
echo "</table>";
?>