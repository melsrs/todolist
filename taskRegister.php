<?php 

session_start();

use Models\DbConnexion\DbConnexion;
use Models\Task;
use Repositories\TaskManager\TaskManager;
include ("./autoloader.php");

if(isset($_POST)){
    $data = file_get_contents("php://input");
    $decodedTask = (json_decode($data, true));
    $task = new Task($decodedTask);
    $dbConnexion = new DbConnexion();
    $taskManager = new TaskManager($dbConnexion);

    if($taskManager->insertTasks(($task))){
        $_SESSION["id"] = $user->getId_user();
        echo "inserted";
    }else{
        echo "Error";
    }

}
