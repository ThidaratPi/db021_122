<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else
{
    $controller = 'pages';
    $action = 'home';
}?>
<html>
    <head></head>
    <body>
        <?php echo "controller= ".$controller.",action=".$action;?>
        <br>[<a href="?controller=pages&action=home">home</a>]
        [<a href="?controller=staff&action=index">staff</a>]
        [<a href="?controller=position&action=index">position</a>]
        [<a href="?controller=detail&action=index">เวรทำงาน</a>]<br>

         
        <?php require_once("./routes.php");?>
    </body>
</html>