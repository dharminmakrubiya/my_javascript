<?php


$connection = mysqli_connect("localhost", "root", "", "employee_db");

// Check connection
if ($connection === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$employee_first_name = mysqli_real_escape_string($connection, $_REQUEST['employee_first_name']);
$employee_last_name = mysqli_real_escape_string($connection, $_REQUEST['employee_last_name']);
$employee_salary = mysqli_real_escape_string($connection, $_REQUEST['employee_salary']);
$employee_joining_date = mysqli_real_escape_string($connection, $_REQUEST['employee_joining_date']);
$employee_departement = mysqli_real_escape_string($connection, $_REQUEST['employee_departement']);


// Attempt insert query execution
$sql = "INSERT INTO employee (employee_first_name, employee_last_name, employee_salary,employee_joining_date,employee_departement) VALUES ('$employee_first_name', '$employee_last_name', '$employee_salary','$employee_joining_date','$employee_departement')";
if (mysqli_query($connection, $sql)) {
    echo "Your Record added Successfully :)";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}

// Close connection
mysqli_close($connection);

Display_Employee_Record();

function Display_Employee_Record()
{
    $connection = mysqli_connect("localhost", "root", "", "employee_db");

    // Check connection
    if ($connection === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM employee";
    if ($result = mysqli_query($connection, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Employee First Name</th>";
            echo "<th>Employee Last Name</th>";
            echo "<th>Employee Salary</th>";
            echo "<th>Employee Joining Date</th>";
            echo "<th>Employee Departement</th>";
            echo "</tr>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['employee_first_name'] . "</td>";
                echo "<td>" . $row['employee_last_name'] . "</td>";
                echo "<td>" . $row['employee_salary'] . "</td>";
                echo "<td>" . $row['employee_joining_date'] . "</td>";
                echo "<td>" . $row['employee_departement'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Free result set
            mysqli_free_result($result);
        } else {
            echo "No records matching your query were found.";
        }
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
    }

    $connection->close();

}
?>
