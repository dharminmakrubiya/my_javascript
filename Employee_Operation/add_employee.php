<?php
include "db_employee_connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Employee Operation</title>
</head>

<body>
    <section class="vh-100" style="background-color: #09f1de">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card rounded-5">
                        <div class="card-body p-4" id="first_div">
                            <form action="add_employee_record.php" method="POST">
                                <h3>
                                    Employee
                                    <small class="text-muted">Record Form</small>
                                </h3>

                                <div class="mb-3">
                                    <label for="" class="form-label">Employee First Name:</label>
                                    <input type="text" class="form-control" name="employee_first_name" placeholder="eg. abc">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Employee Last Name:</label>
                                    <input type="text" class="form-control" name="employee_last_name" placeholder="eg. pqr">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Salary</label>
                                    <input type="text" class="form-control" name="employee_salary" placeholder="eg. 10,000">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Joining Date</label>
                                    <input type="date" class="form-control" name="employee_joining_date" placeholder="eg. 11/11/2022">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Departement</label>
                                    <input type="text" class="form-control" name="employee_departement" placeholder="eg. it">
                                </div>

                                <div>
                                    <input type="submit" class="btn btn-primary" name="add_employee_button" class="button" value="Add" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
</body>

</html>