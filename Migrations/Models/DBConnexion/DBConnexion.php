<?php

namespace  Models\DbConnexion;

class DbConnexion
{
    private $host   = "localhost";
    private $login  = "Todolist_";
    private $pass   = "Todolist_";
    private $bdd    = "todolist_";
    private $pdo;

    function __construct()
    {
        try {
            $this->pdo = new \PDO("mysql:host={$this->host};dbname={$this->bdd};charset=utf8", $this->login, $this->pass);
        } catch (\PDOException $e) {
            die("Service indisponible");
        }
    }

    public function getPDO()
    {
        return $this->pdo;
    }
}
