<table border=1>
<br>new เวรทำงาน <a href=?controller=detail&action=newDetail> click</a><br>
<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="detail">
        <button type="submit" name="action" value="search">
search</button>
</form>
<tr><td>เลขบัตรประชาชน</td><td>ชื่อจริง</td><td>นามสกุล</td><td>วันเกิด</td><td>ที่อยู่</td><td>เบอร์โทรศัพท์</td><td>update</td><td>delete</td></tr>
<?php foreach($staff_List as $staff)
{
        echo "<tr><td>$staff->id_staff</td>
        <td>$staff->first_name</td>
        <td>$staff->last_name</td>
        <td>$staff->DOB</td>
        <td>$staff->address_staff</td>
        <td>$staff->phone</td>
        <td>
        <a href=?controller=staff&action=updateForm&id_staff=$staff->id_staff>update</a>
        </td><td>
        <a href=?controller=staff&action=deleteConfirm&id_staff=$staff->id_staff>delete</a>
        </td></tr>";
}
echo "</table>";
?>