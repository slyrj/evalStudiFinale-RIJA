

<?php
    
    require __DIR__ . '/constants.php';

        //connection bdd

        $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if(mysqli_errno($connection)) {
               die(mysqli_error($connection));
        }





    