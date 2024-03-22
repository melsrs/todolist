<?php
namespace Repositories\UserManager;

use Models\User;
use Models\DbConnexion\DbConnexion;

class UserManager
{
    private $pdo;

    public function __construct(DbConnexion $dbConnexion)
    {
        $this->pdo = $dbConnexion->getPDO();
    }

    public function allUsers()
    {
        $users = [];

        try {
            $stmt = $this->pdo->query("SELECT * FROM user");
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $users[] = new User($row);
            }
        } catch (\PDOException $e) {
            return $users;
        }
        return $users;
    }

    public function insertUser(User $objet)
    {
        $name = $objet->getNameUser();
        try {
            $stmt = $this->pdo->prepare("INSERT INTO user (name) VALUES (?)");
            $stmt->execute([$name]);

            return $stmt->rowCount() == 1;
        } catch (\PDOException $e) {
            return false;
        }
    }
}
