<?php
    include "connection.php";
    if(isset($_REQUEST['submit']))
    {
    
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $message=$_REQUEST['message'];
       
        if($name != "" && $email != "" && $message != "")
        {
            $query="insert into comment(name,email,message)values('$name','$email','$message')";
            $ins=mysqli_query($conn,$query);
            if($ins)
                header("location:comment.php?msg=inserted");
            
                header("location:comment.php?msg=not inserted");    
        }

    }
?>


