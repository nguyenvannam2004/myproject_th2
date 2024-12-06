<?php

class Users
{
    private $id;
    private $username;
    private $password; 
    private $role;

    public function __construct($id, $username, $password, $role)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;  
        $this->role = $role;
    }

    //getter
    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()  
    {
        return $this->password;  
    }

    public function getRole()
    {
        return $this->role;
    }

    // setter
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password)  
    {
        $this->password = $password;  
    }

    public function setRole($role)
    {
        $this->role = $role;
    }
}

?>
