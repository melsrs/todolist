<?php
namespace Repositories\TaskManager;

use Models\Task;
use Models\DbConnexion\DbConnexion;

class TaskManager
{
    private $pdo;

    public function __construct(DbConnexion $dbConnexion)
    {
        $this->pdo = $dbConnexion->getPDO();
    }

    public function allTasks()
    {
        $tasks = [];

        try {
            $stmt = $this->pdo->query("SELECT * FROM task");
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $tasks[] = new Task($row);
            }
        } catch (\PDOException $e) {
            return $tasks;
        }
        return $tasks;
    }

    public function insertTasks(Task $objet)
    {
        $name = $objet->getNameTask();
        try {
            $stmt = $this->pdo->prepare("INSERT INTO task (name) VALUES (?)");
            $stmt->execute([$name]);

            return $stmt->rowCount() == 1;
        } catch (\PDOException $e) {
            return false;
        }
    }
}
