<?php class Checkpoint{
     public $id_checkpoint;
     public $name_checkpoint;
     public $province;
     public $country;
   

    public function __construct($id_checkpoint,$name_checkpoint,$province,$country)
    {
        $this->id_checkpoint = $id_checkpoint;
        $this->name_checkpoint=$name_checkpoint;
        $this->province=$province;
        $this->country=$country;

       
       
    }
    public static function getAll()
    {
        $checkpointList=[];
        require("connect_database.php");
        $sql="SELECT DISTINCT * FROM CheckPoint";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_checkpoint = $my_row[id_checkpoint];
            $name_checkpoint = $my_row[name_checkpoint];
            $province= $my_row[province];
            $country= $my_row[country];
           
            
           
            $checkpointList[] = new Checkpoint($id_checkpoint,$name_checkpoint,$province,$country);
        }
        require("connection_close.php");
        return $checkpointList;


    }
   


}

?>