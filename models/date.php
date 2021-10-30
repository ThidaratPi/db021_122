<?php class Date{
     public $id_date;
     public $date;
     public $time;
     public $id_checkpoint;
     public $name_checkpoint;
     public $province;
     public $country;
   

    public function __construct($id_date,$date,$time,$id_checkpoint,$name_checkpoint,$province,$country)
    {
        $this->id_date = $id_date;
        $this->date=$date;
        $this->time=$time;
        $this->id_checkpoint = $id_checkpoint;
        $this->name_checkpoint=$name_checkpoint;
        $this->province=$province;
        $this->country=$country;

       
    }
    public static function getAll()
    {
        $dateList=[];
        require("connect_database.php");
        $sql="SELECT DISTINCT * FROM Date INNER JOIN CheckPoint ON id_checkpoint=id";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_date = $my_row[id_date];
            $date = $my_row[date];
            $time= $my_row[time];
            $id_checkpoint = $my_row[id_checkpoint];
            $name_checkpoint = $my_row[name];
            $province= $my_row[province];
            $country= $my_row[country];
            
           
            $dateList[] = new Date($id_date,$date,$time,$id_checkpoint,$name_checkpoint,$province,$country);
        }
        require("connection_close.php");
        return $dateList;


    }
   


}

?>