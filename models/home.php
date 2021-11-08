<?php class Home{
    public $id_staff_checkpoint;
    public $time;
    public $date;
    public $name_checkpoint;
    public $province;
    public $county;
    public $id_date;
    public $num;
    

    public function __construct($id_staff_checkpoint,$time,$date,$name_checkpoint,$province,$county,$id_date,$num)
    {
        $this->id_staff_checkpoint=$id_staff_checkpoint;
        $this->time=$time;
        $this->date=$date;
        $this->name_checkpoint=$name_checkpoint;
        $this->province=$province;
        $this->county=$county;
        $this->id_date=$id_date;
        $this->num=$num;
      
       
    }
    public static function getAll()
    {
        $homeList=[];
        require("connect_database.php");
        $sql="SELECT date,time,name,province,county,id_date ,id,COUNT(id_staff) AS num
        FROM detail_of_staff_in_checkpoint NATURAL JOIN staff NATURAL JOIN position NATURAL JOIN Date INNER JOIN CheckPoint ON id_checkpoint=id WHERE status_d=1
        GROUP By id_date";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_staff_checkpoint=$my_row[id_staff_checkpoint];
            $time=$my_row[time];
            $date = $my_row[date];
            $name_checkpoint = $my_row[name];
            $province = $my_row[province];
            $county = $my_row[county];
            $id_date=$my_row[id_date];
            $num=$my_row[num];
           
            $homeList[] = new Home($id_staff_checkpoint,$time,$date,$name_checkpoint,$province,$county,$id_date,$num);
        }
        require("connection_close.php");
        return $homeList;


    }
   
    public static function search($key)
    {
        $homeList=[];
        require("connect_database.php");
        $sql="SELECT date,time,name,province,county,id_date ,id,COUNT(id_staff) AS num
        FROM detail_of_staff_in_checkpoint NATURAL JOIN staff NATURAL JOIN position NATURAL JOIN Date INNER JOIN CheckPoint ON id_checkpoint=id WHERE (date LIKE '%$key%' or time LIKE '%$key%' or name LIKE '%$key%' or province LIKE '%$key%' or county LIKE '%$key%' ) and status = 1
        GROUP By id_date
       HAVING num LIKE '%$key%'";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_staff_checkpoint=$my_row[id_staff_checkpoint];
            $time=$my_row[time];
            $date = $my_row[date];
            $name_checkpoint = $my_row[name];
            $province = $my_row[province];
            $county = $my_row[county];
            $id_date=$my_row[id_date];
            $num=$my_row[num];
           
            $homeList[] = new Home($id_staff_checkpoint,$time,$date,$name_checkpoint,$province,$county,$id_date,$num);
        }
        require("connection_close.php");
        return  $homeList;

    }
   
    


}

?>