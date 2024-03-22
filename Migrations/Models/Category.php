<?php


namespace Models\Category;

class Category{

    private $ID_Category;
    private $Name;

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

    /**
     * Get the value of Name
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Set the value of Name
     */
    public function setName($Name): self
    {
        $this->Name = $Name;

        return $this;
    }
}