<?php
    ini_set('display_errors', 1);
    require_once 'php/controller/IndexController.php'
?>
<html>
<head>
    <title>My Tasks</title>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="lib/fontawesome/css/all.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="lib/jquery/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="card border-secondary mt-3">
            <div class="card-body">
                <form method="POST" action="php/controller/AddTaskController.php" class="form-inline">
                    <div class="search-form row">
                        <div class="col-12 text-center">
                            <h3>Brendo's Tasks</h3>
                        </div>
                        <div class="form-group col-10">
                            <input type="text" class="form-control w-100" id="new-task" placeholder="New Task" name="newTask">
                        </div>
                        <div class="form-group col-2">
                            <button type="submit" class="btn btn-success w-100"><i class="fas fa-plus"></i> Add Task</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card border-secondary mt-3">
            <div class="card-body">
                <?php foreach ($tasks as &$task) { ?>
                <div class="card mb-1">
                    <div class="card-body">
                        <?= $task->getName() ?>
                        <div class="card-text">
                            <small class="text-muted">Added <?= $task->getCreatedDate() ?></small>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>