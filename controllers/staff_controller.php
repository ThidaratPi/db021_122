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
    // public function updateForm()
    // {
       
    //     $id_order_cus=$_GET['id_order_cus'];
    //     $staff_List=staff::getAll();
    //     $customer_List=customer::getAll();
    //     $order=Order::get($id_order_cus);
    //     require_once('./views/order/updateForm.php');
       
    // }
    // public function update()
    // {
    //     $id_order_cus=$_GET['id_order_cus'];
    //     $date_order=$_GET['date_order'];
    //     $id_staff=$_GET['fname_staff'];
    //     $id_customer=$_GET['name_customer'];
    //     $id=$_GET['id'];

    //     Order::update($id_order_cus,$date_order,$id_staff,$id_customer,$id);
    //     OrderController::index();
    // }
    // public function search()
    // {
    //     $key=$_GET['key'];
    //     $order_List=Order::search($key);
    //     require_once('./views/order/index_order.php');
    // }
  
    

}
?>