<?php 
    
    require_once('./config/dbconfig.php'); 
    $db = new operations();
    $result=$db->view_record();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Crud Operation in Php Using OOP</title>
</head>
<body class="bg-dark">

    
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="text-center text-dark"> Employees Record </h2>
                    </div>
                    <h3><a href="index.php">Add employee details</a></h3>
                    <a href="view.php" class="nav-link">Home</a>
                    <a href="https://kalpas.in/" class="nav-link">About Us</a>
                    <div class="card-body">
                        <?php
                              $db->display_message(); 
                              $db->display_message();
                        ?>
                        <table class="table table-bordered">
                            <tr>
                                <td style="width: 10%"> ID </td>
                                <td style="width: 10%"> Name </td>
                                <td style="width: 20%"> Mobile </td>
                                <td style="width: 20%"> Email </td>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($result))
                                    {
                                ?>
                                    <td><?php echo $data['id'] ?></td>
                                    <td><?php echo $data['name'] ?></td>
                                    <td><?php echo $data['mobile'] ?></td>
                                    <td><?php echo $data['email'] ?></td>
                                    <td><a href="edit.php?id=<?php echo $data['id'] ?>" class="btn btn-success">Edit</a></td>
                                    <td><a href="del.php?id=<?php echo $data['id'] ?>" class="btn btn-danger">Del</a></td>
                            </tr>
                            <?php
                                    }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>