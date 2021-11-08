<p> Welcome to our homepage </p>
<table border=1>
<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="pages">
        <button type="submit" name="action" value="search">
search</button>
</form>
<tr><td>วันที่</td><td>เวลา</td><td>ชื่อจุดตรวจ</td><td>เขต</td><td>จังหวัด</td><td>จำนวนพนักงาน</td></tr>
<?php foreach($home_List as $home)
{
        echo "<tr><td>$home->date</td>
        <td>$home->time</td>
        <td>$home->name_checkpoint</td>
        <td>$home->county</td>
        <td>$home->province</td>
        <td>$home->num</td>

        </tr>";
}
echo "</table>";
?>
