<?php
    include "db_connection.php";
?>

<!DOCTYPE html>
<html>
      
<head>

    <script>
        
        var $name = document.getElementById("taskText");

        function displayEnteredName() {

            alert($name);

        }

    </script>

    <title>
        CRUD Task Demo
    </title>
</head>
  
<body style="text-align:center;">
      
    <form method="post">
        <input type="text" name="taskText" placeholder="Enter New Task Here!">
        <input type="submit" name="addTaskButton"
                class="button" value="Add Task" />
        <input type="submit" name="listTaskButton"
                class="button" value="List Tasks" />
    </form>

    <?php

        if(array_key_exists('addTaskButton', $_POST)) {

            if(array_key_exists('taskText', $_POST)) {

                $taskString = $_POST['taskText'];
                addTask($taskString);

            }

            //addTask("Testing");
        }

        if(array_key_exists('listTaskButton', $_POST)) {

            echo '<script type="text/javascript">',
            'displayEnteredName();',
            '</script>'
       ;

        }
        
        function addTask($taskName) {
            
            echo '<script type="text/javascript">',
                'jsfunction();','</script>';

            // Insert task name in data base.

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "task_list_db";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO task (id, task_text) VALUES (NULL, '$taskName')";

            if ($conn->query($sql) === TRUE) {
                //echo "New record created successfully";
            } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();

            displayTask();

        }

        function displayTask() {
            
            // Insert task name in data base.

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "task_list_db";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Attempt select query execution
            $sql = "SELECT * FROM task";
            if($result = mysqli_query($conn, $sql)){
                if(mysqli_num_rows($result) > 0){
                    echo "<table>";
                        echo "<tr>";
                            echo "<th>Task Id</th>";
                            echo "<th>Task Name</th>";
                        echo "</tr>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['task_text'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    // Free result set
                    mysqli_free_result($result);
                } else{
                    echo "No records matching your query were found.";
                }
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }

            $conn->close();

        }

    ?>

</head>
  
</html>