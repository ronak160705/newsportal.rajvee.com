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
            <h1 class="m-0 font-weight-bold text-primary" style="text-align:center;">Show Contacts</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <?php
                $query = "SELECT * FROM contect";
                $query_run = mysqli_query($con, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <th>name</th>
                    <th>email</th>
                    <th>subject</th>
                    <th>message</th>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $row['name']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['subject']; ?></td>
                                <td><?php  echo $row['message']; ?></td>
                                
                                
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
