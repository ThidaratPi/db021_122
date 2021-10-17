<?php class Position{
     public $id_position;
     public $name_position;
     public $income;
   

    public function __construct($id_position,$name_position,$income)
    {
        $this->id_position = $id_position;
        $this->name_position=$name_position;
        $this->income=$income;
       
       
    }
    public static function getAll()
    {
        $positionList=[];
        require("connect_database.php");
        $sql="SELECT DISTINCT * FROM staff  WHERE status = 1";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_position = $my_row[id_position];
            $name_position = $my_row[name_position];
            $income= $my_row[income];
           
            
           
            $positionList[] = new Position($id_position,$name_position,$income);
        }
        require("connection_close.php");
        return $positionList;


    }
    public static function get($id_position)
    {

        require("connect_database.php");
        $sql="SELECT DISTINCT * FROM position WHERE id_position='$id_position'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_position = $my_row[id_position];
        $name_position = $my_row[name_position];
        $income= $my_row[income];
       
        require("connection_close.php");
        return new Position($id_position,$name_position,$income);

    }
    public static function search($key)
    {
        $positionList=[];
        require("connect_database.php");
        $sql="SELECT * FROM position  WHERE id_position like '%$key%' or name_position like '%$key%' or income like '%$key%' ";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_position = $my_row[id_position];
            $name_position = $my_row[name_position];
            $income= $my_row[income];
     
           
            $positionList[] = new Position($id_position,$name_position,$income);
        }
        require("connection_close.php");
        return $positionList;

    }
   

     public static function update($id_position,$name_position,$income,$id)
     {
        require("connect_database.php");
        $sql="UPDATE `position` SET `id_position`='$id_position',`name_position`='$name_position',`income`=$income WHERE id_staff = '$id'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return ;
        
     }




}

?>