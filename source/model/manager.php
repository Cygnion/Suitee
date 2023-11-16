<?php 



abstract class Manager 
{

    protected PDO $pdo;

    public function __construct()
    {
        include_once('../database/connector.php');
        $this->pdo = initPDO();
    }

    abstract public function getById();
    abstract public function getAll();
}

?>