<?php
    include "connection.php";
    $upid=$_REQUEST ['updateid'];
    $query="select * from feedback where id='$upid'";
    $recordset=mysqli_query($conn,$query);
    $record=mysqli_fetch_row($recordset);
    $id=$record[0];
    $name=$record[1];
    $email=$record[2];
    $message=$record[3];
    
?>
<html>
    <head>
        <title>s
            update
        </title>
    </head>
    <body>
        <form action="" method="post">
            <table border="1" align="center">
                <tr>
                    <td>
                        id
                    </td>
                    <td> <input type="text" name="id" value= "<?php echo $record[0];?>"></td>
                </tr>
                <tr>
                    <td>
                        name
                    </td>
                    <td> <input type="text" name="name" value= "<?php echo $record[1];?>"></td>
                </tr>
                <tr>
                    <td>
                        email
                    </td>
                    <td> <input type="email" name="email" value= "<?php echo $record[2];?>"></td>
                </tr>
                <tr>
                    <td>
                        message
                    </td>
                    <td> <input type="text" name="message" value= "<?php echo $record[3];?>"></td>
                </tr>
                 <tr>
                    <td colspan="2" align="center"><input type="submit" name="update" value="update"></td>
                </tr>
 

            </table>
        </form>
        <?php
        if(isset($_REQUEST['update']))
        
        {
            $id=$_REQUEST['id'];
            $nm=$_REQUEST['name'];
            $email=$_REQUEST['email'];
            $message=$_REQUEST['message'];
            
            
            
            $query="update rajvi.feedback set id='$id',name='$nm',email='$email',message='$message'where id='$id'";
            $update=mysqli_query($conn,$query);
            if($update)
                header("location:feedback.php?msg=record updated");
            else
                header("location:feedback.php?msg=record not updated");
        }
        ?>
    </body>
</html>

    
    
