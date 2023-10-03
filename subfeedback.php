<?php
    include "connection.php";
    if(isset($_REQUEST['submit']))
    {
        $id=$_REQUEST['id'];
        $query="select*from feedback";
        $data=mysqli_query($conn,$query);
        while($record=mysqli_fetch_row($data))
        {
            if($record[0]==$id)
            {
                header("location:feedback.php?msg=dublicate entry");
            }
        }
        $id=$_REQUEST['id'];
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $message=$_REQUEST['message'];
       
        if($id != "" && $name != "" && $email != "" && $message != "")
        {
            $query="insert into rajvi. feedback (id,name,email,message)values('$id','$name','$email','$message')";
            $ins=mysqli_query($conn,$query);
            if($ins)
                header("location:feedback.php?msg=inserted");
            
                header("location:feedback.php?msg=not inserted");    
        }

    }
?>


