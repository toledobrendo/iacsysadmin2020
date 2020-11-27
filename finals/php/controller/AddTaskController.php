<?php
    require_once '../resources/DatabaseProperties.php';

    $newTask = $_POST['newTask'];

    try {
        if (!$newTask) {
            throw new Exception('Task name empty. Please try again.');
        }

        @ $db = new mysqli(DB_HOST_IP.':'.DB_PORT, DB_USERNAME, DB_PASSWORD, DB_NAME);

        $dbError = mysqli_connect_errno();
        if ($dbError) {
            throw new Exception('Error: Could not connect to database. Please try again later.');
        }

        $query = 'insert into tasks (name, created_date) values (?, ?)';
        $stmt = $db->prepare($query);
        $stmt->bind_param("ss", $newTask, new DateTime());
        $stmt->execute();

        $affectedRows = $stmt->affected_rows;
        if ($affectedRows > 0) {
            echo $affectedRows." task inserted into the database.";
        } else {
            throw new Exception('Error: The task was not added.');
        }

        $stmt->close();

        header('Location: ../../index.php');
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>