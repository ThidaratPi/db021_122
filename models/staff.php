<?php class Staff{
     public $id_staff;
     public $first_name;
     public $last_name;
    public $phone;
    public $status;
    public $id_agency;
    public $DOB;
    public $address_staff;
 

    public function __construct($id_staff,$first_name,$last_name,$DOB,$phone,$address_staff,$status,$name_agency)
    {
        $this->id_staff = $id_staff;
        $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->DOB=$DOB;
        $this->phone=$phone;
        $this->address_staff=$address_staff;
        $this->status=$status;
        $this->name_agency=$name_agency;
       
    }
    public static function getAll()
    {
        $staffList=[];
        require("connect_database.php");
        $sql="SELECT DISTINCT * FROM staff INNER JOIN agency ON id=id_agency";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_staff = $my_row[id_staff];
            $first_name = $my_row[first_name];
            $last_name= $my_row[last_name];
            $DOB=$my_row[DOB];
            $phone=$my_row[phone];
            $address_staff=$my_row[address_staff];
            $status = $my_row[status];
            $name_agency=$my_row[name];
           
            $staffList[] = new Staff($id_staff,$first_name,$last_name,$DOB,$phone,$address_staff,$status,$name_agency);
        }
        require("connection_close.php");
        return $staffList;


    }
    // public static function get($id_order_cus)
    // {
    //     require("connect_database.php");
    //     $sql="SELECT * FROM order_cutomer NATURAL JOIN staff NATURAL JOIN customer WHERE id_order_cus='$id_order_cus'";
    //     $result=$conn->query($sql);
    //     $my_row=$result->fetch_assoc();
    //     $id_order_cus = $my_row[id_order_cus];
    //     $date_order = $my_row[date_order];
    //     $fname_staff= $my_row[fname_staff];
    //     $id_staff=$my_row[id_staff];
    //     $name_customer = $my_row[name_customer];
    //     $id_customer=$my_row[id_customer];
    //     $address_customer=$my_row[address_customer];
    //     $phone=$my_row[phone];
    //     require("connection_close.php");
    //     return new Order($id_order_cus,$date_order,$fname_staff,$name_customer,$address_customer,$phone,$id_staff,$id_customer);

    // }
    // public static function search($key)
    // {
    //     require("connect_database.php");
    //     $sql="SELECT * FROM order_cutomer NATURAL JOIN staff NATURAL JOIN customer WHERE date_order like '%$key%' or fname_staff like '%$key%' or name_customer like '%$key%' or id_order_cus LIKE '%$key%'";
    //     $result=$conn->query($sql);
    //     while($my_row=$result->fetch_assoc())
    //     {
    //         $id_order_cus = $my_row[id_order_cus];
    //         $date_order = $my_row[date_order];
    //         $fname_staff= $my_row[fname_staff];
    //         $id_staff=$my_row[id_staff];
    //         $name_customer = $my_row[name_customer];
    //         $id_customer=$my_row[id_customer];
    //         $address_customer=$my_row[address_customer];
    //         $phone=$my_row[phone];
    //         $orderList[] = new Order($id_order_cus,$date_order,$fname_staff,$name_customer,$address_customer,$phone,$id_staff,$id_customer);
    //     }
    //     require("connection_close.php");
    //     return $orderList;

    // }
   
     public static function Add($id_staff,$first_name,$last_name,$DOB,$phone,$address_staff,$name_agency)
     { 
        
        require("connect_database.php");
        $sql = "INSERT INTO `staff`(`id_staff`, `first_name`, `last_name`, `DOB`, `phone`, `address_staff`, `status`, `id_agency`) 
        VALUES ('$id_staff','$first_name','$last_name','$DOB','$phone','$address_staff',1,'$name_agency');";
        $result = $conn->query($sql);
  
        require("connection_close.php");
        return  ;
     }
    
    //  public static function update($id_order_cus,$date_order,$id_staff,$id_customer,$id)
    //  {
    //     require("connect_database.php");
    //     $sql="UPDATE `order_cutomer` SET `id_order_cus`='$id_order_cus',`date_order`='$date_order',
    //     `id_staff`='$id_staff',`id_customer`='$id_customer' WHERE id_order_cus = '$id'";
    //     $result=$conn->query($sql);
    //     require("connection_close.php");
    //     return ;
        
    //  }
    //  public static function delete($id)
    //  {
    //      require_once("connect_database.php");
    //      $sql="DELETE FROM `order_cutomer` WHERE id_order_cus='$id'";
    //      $result=$conn->query($sql);
    //      require("connection_close.php");
    //      return ;
    //  }



}

?>