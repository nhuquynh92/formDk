<?php
class form{
    private $id;
    private $name;
    private $email;
    private $comment;

    /**
     * form constructor.
     * @param $id
     * @param $name
     * @param $email
     * @param $comment
     */
    public function __construct($id=0, $name=null, $email=null, $comment=null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }




}




?>