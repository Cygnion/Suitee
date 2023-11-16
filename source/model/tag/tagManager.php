<?php 

class TagManager extends Manager
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getById(int $id) : Tag
    {
        foreach($this->pdo->query("SELECT * FROM SU_TAG WHERE TA_ID = $id LIMIT 1") as $row)
        {
            $t = new Tag(
                $row['TA_CONTENT']
            ); 
            $t->setId($row['TA_ID']);
            return $t;
        }
    }

    public function getAll(): array
    {
        $a = [];
        foreach($this->pdo->query("SELECT * FROM SU_TAG") as $row)
        {
            $t = new Tag(
                $row['TA_CONTENT']
            ); 
            $t->setId($row['TA_ID']);
            array_push($a, $t);
        }
        return $a;
    }
}

?>