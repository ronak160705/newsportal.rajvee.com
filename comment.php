<?php
include('connection.php');
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
}
    </style>
</head>

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="m-0 font-weight-bold text-primary">Show Comment</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <?php
                $query = "SELECT * FROM comment";
                $query_run = mysqli_query($conn, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="border:2px solid black;  border-collapse: collapse;">
                    <th>name</th>
                    <th>email</th>
                    
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