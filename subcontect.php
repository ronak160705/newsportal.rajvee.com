<?php
    include "connection.php";
    if(isset($_REQUEST['submit']))
    {
    
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $subject=$_REQUEST['subject'];
        $message=$_REQUEST['message'];
       
        if($name != "" && $email != "" && $subject != "" && $message != "")
        {
            $query="insert into rajvi.contect(name,email,subject,message)values('$name','$email','$subject','$message')";
            $ins=mysqli_query($conn,$query);
            if($ins)
                header("location:contect-us.php?msg=inserted");
            else
                header("location:contect-us.php?msg=not inserted");    
        }

    }
?>


