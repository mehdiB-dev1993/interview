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

    public function Create($tableName,$data)
    {
        $columns = array_keys($data);
        $query = "INSERT INTO $tableName (" . implode(', ', $columns) . ") VALUES (:" . implode(', :', $columns) . ")";

        $stmt = $this->connection->prepare($query);

        foreach ($data as $key => $val) {
            $stmt->bindValue(':'. $key, $val);

        }
        $stmt->execute();
        return $this->connection->lastInsertId();


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


