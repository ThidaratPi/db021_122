<?php class StaffController{
    public function index()
    {
        $staff_List=Staff::getAll();
        require_once("./views/staff/index_staff.php");
    }
    public function newStaff(){
        $staff_List=Staff::getAll();
        $agency_List=Agency::getAll();
        require_once('./views/staff/newStaff.php');
    }
     public function addStaff()
     {
        $id_staff=$_GET['id_staff'];
        $first_name=$_GET['first_name'];
        $last_name=$_GET['last_name'];
        $DOB=$_GET['DOB'];
        $phone=$_GET['phone'];
        $address_staff=$_GET['address_staff'];
        $name_agency=$_GET['name_agency'];
        echo $name_agency;
        Staff::Add($id_staff,$first_name,$last_name,$DOB,$phone,$address_staff,$name_agency);
        StaffController::index();
    }
    public function updateForm()
    {
       
        $id_staff=$_GET['id_staff'];
        $agency_List=Agency::getAll();
        $staff=Staff::get($id_staff);
        require_once('./views/staff/updateForm.php');
       
    }
    public function update()
    {
        $id_staff=$_GET['id_staff'];
        $first_name=$_GET['first_name'];
        $last_name=$_GET['last_name'];
        $DOB=$_GET['DOB'];
        $phone=$_GET['phone'];
        $address_staff=$_GET['address_staff'];
        $name_agency=$_GET['name_agency'];
        $id=$_GET['id'];

       Staff::update($id_staff,$first_name,$last_name,$DOB,$phone,$address_staff,$name_agency,$id);
        StaffController::index();
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