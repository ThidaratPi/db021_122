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
     public function addDetail()
     {
        $id_staff_checkpoint=$_GET['id_staff_checkpoint'];
        $id_date=$_GET['id_date'];
        $id_staff=$_GET['id_staff'];
        $id_position=$_GET['id_position'];
        
        Detail::Add($id_staff_checkpoint,$id_date,$id_staff,$id_position);
        DetailController::index();
    }
    public function updateForm()
    {
       
        $id_staff_checkpoint=$_GET['id_staff_checkpoint'];
        $detail=Detail::get($id_staff_checkpoint);
        require_once('./views/detail/updateForm.php');
       
    }
    public function update()
    {
        $id_staff_checkpoint=$_GET['id_staff_checkpoint'];
        $id_date=$_GET['id_date'];
        $id_staff=$_GET['id_staff'];
        $id_position=$_GET['id_position'];
        $id=$_GET['id'];

       Detail::update($id_staff_checkpoint,$id_date,$id_staff,$id_position,$id);
        DetailController::index();
    }
    public function search()
    {
        $key=$_GET['key'];
        $staff_List=Staff::search($key);
        require_once('./views/staff/index_staff.php');
    }
    public function deleteConfirm()
    {
        $id=$_GET['id_staff'];
        $staff=Staff::get($id);
        require_once('./views/staff/deleteConfirm.php');


    }
  
    public function delete()
    {
       
        $id=$_GET['id'];
        Staff::delete($id);
        StaffController::index();

    }
    

}
?>