<?php
require_once 'database.php';
require_once './model/form.php';

class formDB extends database
{
    function listAllUser(){
        $db = $this->connectDB();
        $results = $db->query("SELECT * FROM user");
        $users =[];
        foreach ($results as $result){
            $id = $result['id'];
            $name = $result['name'];
            $email= $result['email'];
            $comment= $result['comment'];
            $user = new form($id, $name,$email, $comment );
            $users[] = $user;
        }
        return $users;
    }

    function addUser($user){
        try {
            $db = $this->connectDB();
            $sql = "INSERT INTO user (name, email, comment) VALUES('".$user->getName()."','".$user->getEmail()."','".$user->getComment()."')";
            $db->exec($sql);
        }
        catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        $db = null;
    }
}

?>