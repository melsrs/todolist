<?php

namespace Repositories\UserManager;

use Models\DbConnexion\DbConnexion;
use Models\User\User;

class UserManager
{

    private $pdo;

    public function __construct(DbConnexion $dbConnexion)
    {
        $this->pdo = $dbConnexion->getPDO();
    }

    public function login(string $email, string $password)
    {
        $hash = hash("whirlpool", $password);


        try {
            $stmt = $this->pdo->query("SELECT * FROM user WHERE email = '$email' AND password = '$hash' ");
        } catch (\PDOException $e) {
            var_dump($e);
        }
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $user = new User($row);
        }

        if (isset($user)) {
            return $stmt->rowCount() == 1;
        }
    }

    public function register(User $user)
    {
        $password = hash("whirlpool", $user->getPassword());

        try {
            $stmt = $this->pdo->prepare("INSERT INTO user VALUES(NULL, ?, ?, ?, ?)");
            $stmt->execute([$user->getFirstName(), $user->getLastName(), $user->getEmail(), $password]);
            return $stmt->rowCount() == 1;
        } catch (\PDOException $e) {
            return $e;
        }
    }

    public function checkUserExist(User $user)
    {
        $email = $user->getEmail();

        try {
            $stmt = $this->pdo->query("SELECT * FROM user WHERE email = '$email' ");
        } catch (\PDOException $e) {
            return $e;
        }
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $user = new User($row);
        }

        return $stmt->rowCount() == 1;
    }
}
