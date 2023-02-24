<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>
    a.badge{
        text-decoration: none;
    }
  </style>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="text-center">PHP OOP CRUD</h1>
                <hr style="height: 1px;color: black;background-color: black">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile No.</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include 'model.php';
                            $model = new Model();
                            $rows = $model->fetch();
                            // var_dump($rows);
                            $i = 1;
                            if(!empty($rows))
                            {
                                foreach($rows as $row)
                                {
                        ?>
                            <tr>
                                <td><?php echo $i++;?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['mobile'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td>
                                    <a href="read.php?id=<?php echo $row['id'];?>" class="badge bg-info text-dark">Read</a>
                                    <a href="delete.php?id=<?php echo $row['id'];?>" class="badge bg-danger">Delete</a>
                                    <a href="edit.php?id=<?php echo $row['id'];?>" class="badge bg-success">Edit</a>
                                </td>
                            </tr>
                        <?php
                                }
                            }
                            else{
                                echo "<h1>No Data</h1>";
                            }
                        ?>
                    </tbody>
                </table>
                <a href="index.php"><-Back</a>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>