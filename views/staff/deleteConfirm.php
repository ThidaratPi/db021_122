<?php echo "<br>Are you sure to delete this order<br>
            $order->id_order_cus $order->name_customer<br>";?>

<form method="get" action="">
    <input type="hidden" name="controller" value="order"/>
    <input type="hidden" name="id" value="<?php echo $order->id_order_cus;?>"/>
    <button type="submit" name="action" value="index">back</button>
    <button type="submit" name="action" value="delete"> delete</button>
</form>
           