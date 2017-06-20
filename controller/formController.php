<?php
require_once './db/formDB.php';

class formController
{
    function showUsers(){
        $formDB = new formDB();
        $users = $formDB->listAllUser();
        include './view/list.php';
    }

    function addUser(){
        $db = new formDB();
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $comment = $_POST['comment'];
            if (!empty($name) && !empty($email) && !empty($comment)){
                    $user = new form(0, $name, $email, $comment);
                    $db ->addUser($user);
                    header('Location: index.php');
                }
            }else{
                $message = 'No data';
            }
        }

    public function showForm(){
        include './view/add.php';
    }

}


?>