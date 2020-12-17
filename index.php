<!DOCTYPE html>
<html lang="en">
<?php
include 'config.php'
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Insert +
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method='get' action='form.php' class="">
                        <div class="">
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" id="name" name='name' class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="Email">Email address</label>
                                <input type="email" class="form-control" name='email' id="Email" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="Name">Address</label>
                                <input type="text" id="address" name='address' class="form-control">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add User</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <?php

    $RowData = mysqli_query($Con, "SELECT * FROM `tblusers`");
    ?>
    <div class="p-3">
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th></th>
                <th></th>
            </thead>

            <?php
            while ($row = mysqli_fetch_array($RowData)) {
            ?>
                <tr>
                    <td><?php echo $row['ID'] ?></td>
                    <td><?php echo $row['Name'] ?></td>
                    <td><?php echo $row['Email'] ?></td>
                    <td><?php echo $row['Address'] ?></td>
                    <td><a href="delete.php?ID=<?php echo $row['ID'] ?>" class="btn btn-danger">Delete</a></td>
                    <td><a href="" class="btn btn-warning">Update</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>