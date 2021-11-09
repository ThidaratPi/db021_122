<table border=1>
<br>new เวรทำงาน <a href=?controller=detail&action=newDetail> click</a><br>
<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="detail">
        <button type="submit" name="action" value="search">
search</button>
</form>
<tr><td>รหัส</td><td>วันที่</td><td>เวลา</td><td>เลขบัตรประชาชน</td><td>ชื่อ</td><td>นามสกุล</td><td>หน้าที่</td><td>จุดตรวจ</td><td>เขต</td><td>จังหวัด</td><td>update</td><td>delete</td></tr>
<?php foreach($detail_List as $detail)
{
        echo "<tr><td>$detail->id_staff_checkpoint</td>
        <td>$detail->date</td>
        <td>$detail->time</td>
        <td>$detail->id_staff</td>
        <td>$detail->first_name</td>
        <td>$detail->last_name</td>
        <td>$detail->name_position</td>
        <td>$detail->name_checkpoint</td>
        <td>$detail->county</td>
        <td>$detail->province</td>
        <td>
        <a href=?controller=detail&action=updateForm&id_staff_checkpoint=$detail->id_staff_checkpoint>update</a>
        </td><td>
        <a href=?controller=detail&action=deleteConfirm&id_staff_checkpoint=$detail->id_staff_checkpoint>delete</a>
        </td></tr>";
}
echo "</table>";
?>