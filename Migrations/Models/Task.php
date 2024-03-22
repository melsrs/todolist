<?php 

namespace Models\Task;

class Task {

    private $ID_Task;
    private $Name;
    private $Description;
    private $Date;
    private $ID_User;
    private $ID_Priority;


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

    /**
     * Get the value of Description
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Set the value of Description
     */
    public function setDescription($Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * Get the value of Date
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * Set the value of Date
     */
    public function setDate($Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    /**
     * Get the value of ID_User
     */
    public function getIDUser()
    {
        return $this->ID_User;
    }

    /**
     * Set the value of ID_User
     */
    public function setIDUser($ID_User): self
    {
        $this->ID_User = $ID_User;

        return $this;
    }

    /**
     * Get the value of ID_Priority
     */
    public function getIDPriority()
    {
        return $this->ID_Priority;
    }

    /**
     * Set the value of ID_Priority
     */
    public function setIDPriority($ID_Priority): self
    {
        $this->ID_Priority = $ID_Priority;

        return $this;
    }
}