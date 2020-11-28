<html>
    <head>
        <title>Sample PHP MySQL</title>
    </head>
    <body>
        <h3>Values inside sample.sample_table. Yes</h3>
        <?php
            define('DB_HOST_IP', '127.0.0.1');
            define('DB_PORT', '3306');
            define('DB_USERNAME', 'bptoledo');
            define('DB_PASSWORD', '123qwe');
            define('DB_NAME', 'sample');

            @ $db = new mysqli(DB_HOST_IP.':'.DB_PORT, DB_USERNAME, DB_PASSWORD, DB_NAME);

            if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }

            $query = 'select * from sample_table;';
            $stmt = $db->prepare($query);

            $stmt->execute();
            $result = $stmt->get_result();

            while ($row = $result->fetch_assoc()) {
                echo '<p>ID: '.$row['id'].' - Value: '.$row['value'];
            }
        ?>
    </body>
</html>
