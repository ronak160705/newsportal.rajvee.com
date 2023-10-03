
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Portal</title>
    <style>
        /* CSS for styling the website */
       
            body{
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("image/p23.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        
        
        
        section {
            padding: 20px;
        }
        .feedback-form {
            width:400px;
            margin:0 auto;
            border:5px solid black;
            padding:10px;
           
            color:black;
	        font-style: normal;
	        font-weight: 500;  
            padding: 60px;
            
           
        }
        label {
            display: block;
            margin-bottom: 7px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 60%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color:black;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            width: 80px;
            height: 40px;
            
        }
        input[type="Update"] {
            background-color:black;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            width: 50px;
            height: 30px;
            
        } 
        input[type="Delete"] {
            background-color:black;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            width: 40px;
            height: 20px;
            
        }      
        

    </style>
</head>
<body>
    
    <section>
     
        <div class="feedback-form">
            
            <form action="subfeedback.php" method="post">
                <label for="name">Id:</label>
                <input type="text" id="name" name="id" required>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea><br>
                <input type="submit" value="insert" name="submit">
                <input type="Update" value="Update" name="update">
                <input type="delete" value="Delete" name="delete">
            </form>
        </div>
    </section>
    <?php
        if(isset($_REQUEST['msg']))
        {
            $message=$_REQUEST['msg'];
            echo $message;

        } 
    ?> 
    <?php
    include "connection.php";
    $query="select * from feedback";
    $recordset=mysqli_query($conn,$query);
?>
        <table border=1 align="center">
        <tr>
            <th> id </th>    
            <th> name </th>    
            <th> email </th>    
            <th> message </th>    
       
            <th colspan=2> operation </th>
        </tr>     
        <?php
        while($record=mysqli_fetch_row($recordset)) 
        {
        ?>
        <tr>
            <td><?php echo $record[0]; ?></td>     
            <td><?php echo $record[1]; ?></td>     
            <td><?php echo $record[2]; ?></td>     
            <td><?php echo $record[3]; ?></td>     
              
            <td><a href="insdel.php?delid=<?php echo $record[0]; ?>"> delete </a></td>
            <td><a href="upfeedback.php ? updateid=<?php echo $record[0]; ?>"><?php echo "update"?></td>
        </tr>
        <?php        
        }
        ?>
        </table>
    </body>
</html>
