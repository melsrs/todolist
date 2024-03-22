<?php
namespace Repositories\PriorityManager;

use Models\Priority;
use Models\DbConnexion\DbConnexion;

class PriorityManager
{
    private $pdo;

    public function __construct(DbConnexion $dbConnexion)
    {
        $this->pdo = $dbConnexion->getPDO();
    }

    public function allPriorities()
    {
        $priorities = [];

        try {
            $stmt = $this->pdo->query("SELECT * FROM priority");
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $priorities[] = new Priority($row);
            }
        } catch (\PDOException $e) {
            return $priorities;
        }
        return $priorities;
    }

    public function insertPriority(Priority $objet)
    {
        $name = $objet->getNamePriority();
        try {
            $stmt = $this->pdo->prepare("INSERT INTO priority (name) VALUES (?)");
            $stmt->execute([$name]);

            return $stmt->rowCount() == 1;
        } catch (\PDOException $e) {
            return false;
        }
    }
}
