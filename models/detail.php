<?php class Detail{
    public $id_staff_checkpoint;
     public $id_staff;
     public $first_name;
     public $last_name;
    public $time;
    public $id_position;
    public $name_position;
    public $date;
    public $name_checkpoint;
    public $province;
    public $county;
    public $id_date;
    

    public function __construct($id_staff_checkpoint,$id_staff,$first_name,$last_name,$time,$id_position,$name_position,$date,$name_checkpoint,$province,$county,$id_date)
    {
        $this->id_staff_checkpoint=$id_staff_checkpoint;
        $this->id_staff = $id_staff;
        $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->time=$time;
        $this->id_position=$id_position;
        $this->name_position=$name_position;
        $this->date=$date;
        $this->name_checkpoint=$name_checkpoint;
        $this->province=$province;
        $this->county=$county;
        $this->id_date=$id_date;
      
       
    }
    public static function getAll()
    {
        $detailList=[];
        require("connect_database.php");
        $sql="SELECT * 
        FROM (detail_of_staff_in_checkpoint NATURAL JOIN staff NATURAL JOIN position NATURAL JOIN Date) INNER JOIN CheckPoint ON id_checkpoint=id WHERE status_d=1 ORDER BY id_staff_checkpoint";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_staff_checkpoint=$my_row[id_staff_checkpoint];
            $id_staff = $my_row[id_staff];
            $first_name = $my_row[first_name];
            $last_name= $my_row[last_name];
            $time=$my_row[time];
            $id_position=$my_row[id_position];
            $name_position=$my_row[name_position];
            $date = $my_row[date];
            $name_checkpoint = $my_row[name];
            $province = $my_row[province];
            $county = $my_row[county];
            $id_date=$my_row[id_date];
           
            $detailList[] = new Detail($id_staff_checkpoint,$id_staff,$first_name,$last_name,$time,$id_position,$name_position,$date,$name_checkpoint,$province,$county,$id_date);
        }
        require("connection_close.php");
        return $detailList;


    }
    public static function getAll2($id_position,$id_staff)
    {
        $detailList=[];
        require("connect_database.php");
        $sql="SELECT * FROM Date INNER JOIN CheckPoint ON id=id_checkpoint
        WHERE Date.date  NOT IN  (SELECT date FROM detail_of_staff_in_checkpoint NATURAL JOIN Date WHERE id_staff='$id_staff' and status_d=1 AND id_position='$id_position')";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_date=$my_row[id_date];
            $time=$my_row[time];
            $date = $my_row[date];
            $name_checkpoint = $my_row[name];
            $province = $my_row[province];
            $county = $my_row[county];
           
            $detailList[] = new Detail($id_staff_checkpoint,$id_staff,$first_name,$last_name,$time,$id_position,$name_position,$date,$name_checkpoint,$province,$county,$id_date);
        }
        require("connection_close.php");
        return $detailList;


    }
    public static function get($id_staff_checkpoint)
    {

        require("connect_database.php");
        $sql="SELECT * 
        FROM (detail_of_staff_in_checkpoint NATURAL JOIN staff NATURAL JOIN position NATURAL JOIN Date) INNER JOIN CheckPoint ON id_checkpoint=id WHERE id_staff_checkpoint='$id_staff_checkpoint' ";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_staff_checkpoint=$my_row[id_staff_checkpoint];
        $id_staff = $my_row[id_staff];
            $first_name = $my_row[first_name];
            $last_name= $my_row[last_name];
            $time=$my_row[time];
            $id_position=$my_row[id_position];
            $name_position=$my_row[name_position];
            $date = $my_row[date];
            $name_checkpoint = $my_row[name];
            $province = $my_row[province];
            $county = $my_row[county];
            $id_date=$my_row[id_date];
        require("connection_close.php");
        return new  Detail($id_staff_checkpoint,$id_staff,$first_name,$last_name,$time,$id_position,$name_position,$date,$name_checkpoint,$province,$county,$id_date);

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
            $time=$my_row[time];
            $id_position=$my_row[id_position];
            $name_position=$my_row[name_position];
            $date = $my_row[date];
            $name_checkpoint = $my_row[name];
            $province = $my_row[province];
            $county = $my_row[county];
            $id_date=$my_row[id_date];
           
            $detailList[] = new Detail($id_staff_checkpoint,$id_staff,$first_name,$last_name,$time,$id_position,$name_position,$date,$name_checkpoint,$province,$county,$id_date);
        }
        require("connection_close.php");
        return  $detailList;

    }
   
     public static function Add($id_date,$id_staff,$id_position)
     { 
        
        require("connect_database.php");
        $sql = "INSERT INTO `detail_of_staff_in_checkpoint`( `id_date`, `id_staff`, `id_position`, `status_d`) 
        VALUES ('$id_date','$id_staff','$id_position',1);";
        $result = $conn->query($sql);
  
        require("connection_close.php");
        return  ;
     }
    
     public static function update($id_position,$id)
     {
        require("connect_database.php");
        $sql="UPDATE `detail_of_staff_in_checkpoint` SET `id_position`='$id_position' WHERE id_staff_checkpoint = '$id'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return ;
        
     }
     public static function delete($id)
     {
         require_once("connect_database.php");
         $sql="UPDATE `detail_of_staff_in_checkpoint` SET`status_d`=2 WHERE id_staff_checkpoint = $id";
         $result=$conn->query($sql);
         require("connection_close.php");
         return ;
     }



}

?>