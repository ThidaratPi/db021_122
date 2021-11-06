<?php class DetailController{
    public function index()
    {
        $detail_List=Detail::getAll();
        require_once("./views/detail/index_detail.php");
    }
    public function newDetail(){
        $date_List=Date::getAll();
        $staff_List=Staff::getAll();
        $position_List=Position::getAll();
        require_once('./views/detail/newDetail.php');
    }
    public function newDetail1(){
        $id_position=$_GET['id_position'];
        $id_staff=$_GET['id_staff'];
        $staff=Staff::get($id_staff);
        $position=Position::get($id_position);
        $staff_List=Staff::getAll();
        $position_List=Position::getAll();
        require_once('./views/detail/newDetail1.php');
    }
    public function newDetail2(){
        $id_position=$_GET['id_position'];
        $id_staff=$_GET['id_staff'];
        $position=Position::get( $id_position);
        $staff=Staff::get($id_staff);
        $detail_List=Detail::getAll2($id_staff);
        require_once('./views/detail/newDetail2.php');
    }
     public function addDetail()
     {
        
        $id_date=$_GET['id_date'];
        $id_staff=$_GET['id_staff'];
        $id_position=$_GET['id_position'];
        Detail::Add($id_date,$id_staff,$id_position);
        DetailController::index();
    }
    public function updateForm()
    {
       
        $id_staff_checkpoint=$_GET['id_staff_checkpoint'];
        $detail=Detail::get($id_staff_checkpoint);
        $position_List=Position::getAll();
        require_once('./views/detail/updateForm.php');
       
    }
    public function update()
    {
       
        
        $id_position=$_GET['id_position'];
        $id=$_GET['id'];
       
       Detail::update($id_position,$id);
        DetailController::index();
    }
    public function search()
    {
        $key=$_GET['key'];
        $detail_List=Detail::search($key);
        require_once('./views/detail/index_staff.php');
    }
    public function deleteConfirm()
    {
        $id=$_GET['id_staff_checkpoint'];
        $dep=Detail::get($id);
        require_once('./views/detail/deleteConfirm.php');


    }
  
    public function delete()
    {
       
        $id=$_GET['id'];
        Detail::delete($id);
        DetailController::index();

    }
    

}
?>