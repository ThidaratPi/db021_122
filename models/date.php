<?php class Date{
     public $id_date;
     public $date;
     public $time;
   

    public function __construct($id_date,$date,$time)
    {
        $this->id_date = $id_date;
        $this->date=$date;
        $this->time=$time;
       
       
    }
    public static function getAll()
    {
        $dateList=[];
        require("connect_database.php");
        $sql="SELECT DISTINCT * FROM Date";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_date = $my_row[id_date];
            $date = $my_row[date];
            $time= $my_row[time];
           
            
           
            $dateList[] = new Date($id_date,$date,$time);
        }
        require("connection_close.php");
        return $dateList;


    }
   


}

?>