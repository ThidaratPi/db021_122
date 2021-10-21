<?php class Detail{
    public $id_staff_checkpoint;
     public $id_staff;
     public $first_name;
     public $last_name;
    public $phone;
    public $id_position;
    public $name_position;
    public $date;
    public $name_checkpoint;
    public $province;
    public $county;
    

    public function __construct($id_staff_checkpoint,$id_staff,$first_name,$last_name,$phone,$id_position,$name_position,$date,$name_checkpoint,$province,$county)
    {
        $this->id_staff_checkpoint=$id_staff_checkpoint;
        $this->id_staff = $id_staff;
        $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->phone=$phone;
        $this->id_position=$id_position;
        $this->name_position=$name_position;
        $this->date=$date;
        $this->name_checkpoint=$name_checkpoint;
        $this->province=$province;
        $this->county=$county;
      
       
    }
    public static function getAll()
    {
        $detailList=[];
        require("connect_database.php");
        $sql="SELECT * 
        FROM (detail_of_staff_in_checkpoint NATURAL JOIN staff NATURAL JOIN position NATURAL JOIN Date) INNER JOIN CheckPoint ON id_checkpoint=id";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_staff_checkpoint=$my_row[id_staff_checkpoint];
            $id_staff = $my_row[id_staff];
            $first_name = $my_row[first_name];
            $last_name= $my_row[last_name];
            $phone=$my_row[phone];
            $id_position=$my_row[id_position];
            $name_position=$my_row[name_position];
            $date = $my_row[date];
            $name_checkpoint = $my_row[name_checkpoint];
            $province = $my_row[province];
            $county = $my_row[county];
            
           
            $detailList[] = new Detail($id_staff_checkpoint,$id_staff,$first_name,$last_name,$phone,$id_position,$name_position,$date,$name_checkpoint,$province,$county);
        }
        require("connection_close.php");
        return $detailList;


    }
    public static function get($id_staff_checkpoint)
    {

        require("connect_database.php");
        $sql="SELECT * 
        FROM (detail_of_staff_in_checkpoint NATURAL JOIN staff NATURAL JOIN position NATURAL JOIN Date) INNER JOIN CheckPoint ON id_checkpoint=id";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_staff_checkpoint=$my_row[id_staff_checkpoint];
        $id_staff = $my_row[id_staff];
            $first_name = $my_row[first_name];
            $last_name= $my_row[last_name];
            $phone=$my_row[phone];
            $id_position=$my_row[id_position];
            $name_position=$my_row[name_position];
            $date = $my_row[date];
            $name_checkpoint = $my_row[name_checkpoint];
            $province = $my_row[province];
            $county = $my_row[county];
        require("connection_close.php");
        return new  Detail($id_staff_checkpoint,$id_staff,$first_name,$last_name,$phone,$id_position,$name_position,$date,$name_checkpoint,$province,$county);

    }
    public static function search($key)
    {
        $detailList=[];
        require("connect_database.php");
        $sql="SELECT * FROM staff  WHERE (id_staff like '%$key%' or first_name like '%$key%' or last_name like '%$key%' or DOB LIKE '%$key%' or phone LIKE '%$key%' or address_staff LIKE '%$key%' ) and status = 1";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_staff_checkpoint=$my_row[id_staff_checkpoint];
            $id_staff = $my_row[id_staff];
            $first_name = $my_row[first_name];
            $last_name= $my_row[last_name];
            $phone=$my_row[phone];
            $id_position=$my_row[id_position];
            $name_position=$my_row[name_position];
            $date = $my_row[date];
            $name_checkpoint = $my_row[name_checkpoint];
            $province = $my_row[province];
            $county = $my_row[county];
        
           
            $detailList[] = new Detail($id_staff_checkpoint,$id_staff,$first_name,$last_name,$phone,$id_position,$name_position,$date,$name_checkpoint,$province,$county);
        }
        require("connection_close.php");
        return  $detailList;

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