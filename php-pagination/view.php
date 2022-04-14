<?php 

include "config.php";

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>users</h2>

<table class="table">

    <thead>

        <tr>

        <th>Select All</th>

        <th>ID</th>

        <th>First Name</th>

        <th>Last Name</th>

        <th>Email</th>

        <th>Gender</th>

        <th>Action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

    //         $sql="select * from users";
    // $rs_result=mysqli_query($con, $sql);
    // $total_records=mysqli_num_rows($rs_result);
    // $total_pages=ceil($total_records/$num_per_page);
    // echo '<nav aria-label="Page navigation example">';
    // echo "<ul class='pagination'>";
    // echo "<li class='page-item'><a class='page-link' href='view.php?page=".($page-1)."' class='button'>Previous</a></li>"; 

    // for($i=1;$i<=$total_pages;$i++)
    // {
        
    //     echo "<li><a class='page-link' href='view.php?page=".$i."'>".$i."</a></li>" ;
    // }
    // echo "<li><a class='page-link' href='view.php?page=".($page+1)."' class='button'>NEXT</a></li>";
    // echo "</ul>";
    // echo "</nav>";

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {



        ?>

                    <tr>

                    <td><input type="checkbox" name="chkbox[]  value=".$row[0]."/></td>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['firstname']; ?></td>

                    <td><?php echo $row['lastname']; ?></td>

                    <td><?php echo $row['email']; ?></td>

                    <td><?php echo $row['gender']; ?></td>

                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }


            }


        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>