<?php class Staff{
     public $id_staff;
     public $first_name;
     public $last_name;
    public $phone;
    public $status;
    public $DOB;
    public $address_staff;
 

    public function __construct($id_staff,$first_name,$last_name,$DOB,$phone,$address_staff,$status)
    {
        $this->id_staff = $id_staff;
        $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->DOB=$DOB;
        $this->phone=$phone;
        $this->address_staff=$address_staff;
        $this->status=$status;
      
       
    }
    public static function getAll()
    {
        $staffList=[];
        require("connect_database.php");
        $sql="SELECT DISTINCT * FROM staff  WHERE status = 1";
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
            
           
            $staffList[] = new Staff($id_staff,$first_name,$last_name,$DOB,$phone,$address_staff,$status);
        }
        require("connection_close.php");
        return $staffList;


    }
    public static function get($id_staff)
    {

        require("connect_database.php");
        $sql="SELECT DISTINCT * FROM staff WHERE id_staff='$id_staff'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_staff = $my_row[id_staff];
        $first_name = $my_row[first_name];
        $last_name= $my_row[last_name];
        $DOB=$my_row[DOB];
        $phone=$my_row[phone];
        $address_staff=$my_row[address_staff];
        $status = $my_row[status];
        require("connection_close.php");
        return new Staff($id_staff,$first_name,$last_name,$DOB,$phone,$address_staff,$status);

    }
    public static function search($key)
    {
        $staffList=[];
        require("connect_database.php");
        $sql="SELECT * FROM staff  WHERE (id_staff like '%$key%' or first_name like '%$key%' or last_name like '%$key%' or DOB LIKE '%$key%' or phone LIKE '%$key%' or address_staff LIKE '%$key%' ) and status = 1";
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
        
           
            $staffList[] = new Staff($id_staff,$first_name,$last_name,$DOB,$phone,$address_staff,$status);
        }
        require("connection_close.php");
        return $staffList;

    }
   
     public static function Add($id_staff,$first_name,$last_name,$DOB,$phone,$address_staff)
     { 
        
        require("connect_database.php");
        $sql = "INSERT INTO `staff`(`id_staff`, `first_name`, `last_name`, `DOB`, `phone`, `address_staff`, `status`) 
        VALUES ('$id_staff','$first_name','$last_name','$DOB','$phone','$address_staff',1);";
        $result = $conn->query($sql);
  
        require("connection_close.php");
        return  ;
     }
    
     public static function update($id_staff,$first_name,$last_name,$DOB,$phone,$address_staff,$id)
     {
        require("connect_database.php");
        $sql="UPDATE `staff` SET `id_staff`='$id_staff',`first_name`='$first_name',`last_name`='$last_name',`DOB`='$DOB',`phone`='$phone',`address_staff`='$address_staff',`status`=1 WHERE id_staff = '$id'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return ;
        
     }
     public static function delete($id)
     {
         require_once("connect_database.php");
         $sql="UPDATE `staff` SET`status`=2 WHERE id_staff = $id";
         $result=$conn->query($sql);
         require("connection_close.php");
         return ;
     }



}

?>