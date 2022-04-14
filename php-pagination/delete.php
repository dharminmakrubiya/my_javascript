<?php 

include "config.php"; 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `users` WHERE `id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>
 <!--  //         $sql="select * from users";
    // $rs_result=mysqli_query($con, $sql);
    // $total_records=mysqli_num_rows($rs_result);
    // $total_pages=ceil($total_records/$num_per_page);
    // echo '<nav aria-label="Page navigation example">';
    // echo "<ul class='pagination'>";
    // echo "<li class='page-item'><a class='page-link' href='index1.php?page=".($page-1)."' class='button'>Previous</a></li>"; 

    // for($i=1;$i<=$total_pages;$i++)
    // {
        
    //     echo "<li><a class='page-link' href='view.php?page=".$i."'>".$i."</a></li>" ;
    // }
    // echo "<li><a class='page-link' href='view.php?page=".($page+1)."' class='button'>NEXT</a></li>";
    // echo "</ul>";
    // echo "</nav>"; -->