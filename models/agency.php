<?php class Agency{
     public $id_agency;
     public $name_agency;
    

    public function __construct($id_agency,$name_agency)
    {
        $this->id_agency=$id_agency;
        $this->name_agency=$name_agency;
       
    }
    public static function getAll()
    {
        $agencyList=[];
        require("connect_database.php");
        $sql="SELECT * FROM agency";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_agency = $my_row[id];
            $name_agency = $my_row[name];
           
            $agencyList[] = new Agency($id_agency,$name_agency);
        }
        require("connection_close.php");
        return $agencyList;


    }
   

}

?>