<?php
namespace App\Core;

use PDO;


class DB
{

    private $ServerName = 'localhost';
    private $DBname = 'main';
    private $Username = 'root';
    private $Password = '';
    private $connection = '';
    public function __construct()
    {
        $this->Setup();

    }

    public function Setup()
    {
        try {
            $this->connection = new PDO("mysql:host = localhost;dbname=main;",'root','');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           // echo 'connected';
        }catch(Exception $e)
        {
            echo $e->getMessage();
        }

    }

    public function Create($query,$data)
    {


        $stmt = $this->connection->prepare($query);
        foreach ($data as $key => $val) {
            $stmt->bindValue(':'.$key, $val);
        }
        $stmt->execute();
        return $this->connection->lastInsertId();
        /*
        $fullName = $_REQUEST['fullName'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $address = $_REQUEST['address'];
        $gender = $_REQUEST['gender'];

        $stmt = $this->connection->prepare("INSERT INTO users (username,password,fullname,email,phone,address,gender)
                                    VALUES (:username, :password, :fullname,:email,:phone,:address,:gender)");
        $stmt->bindParam(':fullname', $fullName);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':gender', $gender);
        $stmt->execute();
*/
    }

    public function Read($sql,$fetch='')
    {
        $statmenet = $this->connection->prepare($sql);
        $statmenet->execute();
        if($fetch != '')
        {$result = $statmenet->fetch(PDO::FETCH_ASSOC);}
        else
        {$result = $statmenet->fetchAll(PDO::FETCH_ASSOC);}
        return $result;
    }

    public function Update()
    {

    }

    public function  Delete()
    {

    }

}


