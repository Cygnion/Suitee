<?php 


/**
 * Abstract class representing a Manager. Contains PDO.
 * @author Waterfox 
 * @version 1.0.
 */
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