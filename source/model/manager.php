<?php 



abstract class Manager 
{

    protected PDO $pdo;

    public function __construct()
    {
        $this->pdo = initPDO();
    }

    abstract public function getById(int $id):?Model;
    abstract public function getAll():array;
}

?>