
<?php
require_once './controller/formController.php';
$formController = new formController();

if(isset($_GET['action'])){
    $action = $_GET['action'];
    if($action == 'form'){
        $formController->showForm();
    }elseif($action == 'submit'){
        $formController->addUser();
    }
}else{
    $formController->showUsers();
}
?>
