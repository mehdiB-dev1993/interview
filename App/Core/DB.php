<?php
namespace App\Core;

use PDO;


class DB
{

    private $ServerName = 'localhost';
    private $DBname = 'test';
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
            $this->connection = new PDO("mysql:host = localhost;dbname=test;",'root','');
           // echo 'connected';
        }catch(Exception $e)
        {
            echo $e->getMessage();
        }

    }

    public function Create()
    {

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


