<?php
$controllers = array('pages'=>['home','error','search'],'staff'=>['index','newStaff','addStaff','search','updateForm','update','deleteConfirm','delete'],'position'=>['index','newPosition','addPosition','search','updateForm','update'],'detail'=>['index','newDetail','newDetail1','newDetail2','addDetail','search','updateForm','update','deleteConfirm','delete']);

function call($controller,$action){
    require_once("./controllers/".$controller."_controller.php");
    
    switch($controller)
    {
        case "pages":   require_once("./models/home.php");
                          $controller = new PagesController();
                        break;

        case "staff":    require_once("./models/staff.php");
                        $controller = new StaffController();
                        break;
        case "position" : require_once("./models/position.php");
                        $controller = new PositionController();
                         break;
        case "detail" : require_once("./models/detail.php");
                        require_once("./models/date.php");
                        require_once("./models/position.php");
                        require_once("./models/staff.php");
                        $controller = new DetailController();
                        break;

      
    }
    $controller->{$action}();

}
if(array_key_exists($controller,$controllers)){

    if(in_array($action,$controllers[$controller]))

        call($controller,$action);

    else

        call('pages','error');

}

else{

    call('pages','error');

}
