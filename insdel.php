<?php
    include "connection.php";
    if(isset($_REQUEST['delid']))
    {
        $id=$_REQUEST['delid'];
        $query="delete from feedback where id='$id'";
        $ans=mysqli_query($conn,$query);
        if($ans)
             header("location:feedback.php?msg=deleted");
        else
            header("location:feedback.php?msg=not deleted");
    }
?>    