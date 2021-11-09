<?php
    class PagesController
    {
        public function home()
        { 
            $home_List=Home::getAll();
            $home=Home::getamount();
            require_once('views/pages/home.php');
         }
        public function error()
        {   require_once('views/pages/error.php'); }
        public function search()
    {
        $key=$_GET['key'];
        $home_List=Home::search($key);
        require_once('views/pages/home.php');
    }
    }
?>