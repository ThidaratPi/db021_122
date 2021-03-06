<?php class PositionController{
    public function index()
    {
        $position_List=Position::getAll();
        require_once("./views/position/index_position.php");
    }
    public function newPosition(){
        $position_List=Position::getAll();
        require_once('./views/position/newPosition.php');
    }
     public function addPosition()
     {
        $id_position=$_GET['id_position'];
        $name_position=$_GET['name_position'];
        $income=$_GET['income'];
    
        Position::Add($id_position,$name_position,$income);
        PositionController::index();
    }
   
    
    public function updateForm()
    {
       
        $id_position=$_GET['id_position'];
        $position=Position::get($id_position);
        require_once('./views/position/updateForm.php');
       
    }
    public function update()
    {
        $id_position=$_GET['id_position'];
        $name_position=$_GET['name_position'];
        $income=$_GET['income'];
        $id=$_GET['id'];

      Position::update($id_position,$name_position,$income,$id);
       PositionController::index();
    }
    public function search()
    {
        $key=$_GET['key'];
        $position_List=Position::search($key);
        require_once('./views/position/index_position.php');
    }
    public function deleteConfirm()
    {
        $id=$_GET['id_position'];
        $position=Position::get($id);
        require_once('./views/position/deleteConfirm.php');


    }
    public function delete()
    {
       
        $id=$_GET['id'];
        Position::delete($id);
        PositionController::index();

    }
    
  
   
    
    

}
?>