<?php 

namespace Models\Possede;

class Possede {

    private $ID_Task;
    private $ID_Category;

    

    /**
     * Get the value of ID_Task
     */
    public function getIDTask()
    {
        return $this->ID_Task;
    }

    /**
     * Set the value of ID_Task
     */
    public function setIDTask($ID_Task): self
    {
        $this->ID_Task = $ID_Task;

        return $this;
    }

    /**
     * Get the value of ID_Category
     */
    public function getIDCategory()
    {
        return $this->ID_Category;
    }

    /**
     * Set the value of ID_Category
     */
    public function setIDCategory($ID_Category): self
    {
        $this->ID_Category = $ID_Category;

        return $this;
    }
}