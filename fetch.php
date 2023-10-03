<?php
include('includes/config.php');
?>
<head>
    <style>
        table, td,th {
        border: 1px solid;
        color:black;
        

}

table {
  width: 40%;
  border-collapse: collapse;
  height: 50%;
margin:auto;
}
body{
         background-image: url("image/p24.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        }
    </style>
</head>

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary" style="font: size 10px; text-align:center;">Admin</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <?php
                $query = "SELECT * FROM users";
                $query_run = mysqli_query($con, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <th>sno</th>
                    <th>username</th>
                    <th>password</th>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $row['sno']; ?></td>
                                <td><?php  echo $row['username']; ?></td>
                                <td><?php  echo $row['password']; ?></td>
                                
                                <td>
                                    <form action="fupdate.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['sno']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="code.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['sno']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    

</div>
