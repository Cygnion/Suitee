<?php 
/**
 * Represents a manager for the tag model. Extends Manager.
 * @author Waterfox 
 * @version 1.0
 * @see Manager::__construct();
 */
class TagManager extends Manager
{
    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get a Tag by its id.
     * @param int $id the id of the tag. 
     * @return Tag the corresponding tag.
     */
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

    /**
     * Return an array of Tag containing all.
     * @return array the array of tags.
     */
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