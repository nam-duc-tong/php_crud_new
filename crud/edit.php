<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="text-center">PHP OOP CRUD TUTORIAL</h1>
                <hr style="height: 1px;color: black;background-color:black">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mx-auto">
                <?php
                    include 'model.php';
                    $model = new Model();
                    $id = $_REQUEST['id'];
                    $row = $model->edit($id);
                    if(isset($_POST['update']))
                    {
                        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address']))
                        {
                            if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address']))
                            {
                                $data['id'] = $id;
                                $data['name'] = $_POST['name'];
                                $data['email'] = $_POST['email'];
                                $data['mobile'] = $_POST['mobile'];
                                $data['address'] = $_POST['address'];

                                $update = $model->update($data);

                                if($update)
                                {
                                    echo "<script>alert('record update successfully');</script>";
                                    echo "<script>window.location.href='record.php';</script>";
                                }
                                else{
                                    echo "<script>alert('record update failed');</script>";
                                    echo "<script>window.location.href='record.php';</script>";
                                }
                            }
                            else{
                                    echo " <script> alert('empty');</script>";
                                    header("Location: edit.php?id=$id");
                            }
                        }
                    }
                ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" value="<?php echo $row['name'];?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" value="<?php echo $row['email'];?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Mobile</label>
                        <input type="text" name="mobile" value="<?php echo $row['mobile'];?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <textarea name="address" id="" cols="" rows="3" class="form-control"><?php echo $row['address'];?> </textarea>
                    </div>
                    <div class="form-group" style="margin-top: 15px;">
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                        <a class="record" href="record.php">Record-></a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>