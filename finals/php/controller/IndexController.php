<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once __ROOT__.'/resources/DatabaseProperties.php';
    require_once __ROOT__.'/model/Tasks.php';

    try {
        @ $db = new mysqli(DB_HOST_IP.':'.DB_PORT, DB_USERNAME, DB_PASSWORD, DB_NAME);

        $dbError = mysqli_connect_errno();
        if ($dbError) {
            throw new Exception('Error: Could not connect to database. Please try again later.');
        }

        $query = 'select * from tasks;';
        $stmt = $db->prepare($query);

        $stmt->execute();
        $result = $stmt->get_result();

        $tasks = array();
        while ($row = $result->fetch_assoc()) {
            $task = new Task();
            $task->setName($row['id']);
            $task->setCreatedDate($row['createdDate']);
            array_push($tasks, $task);
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>