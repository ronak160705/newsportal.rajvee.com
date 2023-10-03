<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contect-us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
    <style>
        form
        {
            width:400px;
            margin:0 auto;
            border:5px solid black;
            padding:10px;
            
            color:black;
	        font-style: normal;
	        font-weight: 500;
        }
        body{
            background-image: url("image/p23.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            
        }
    </style>
</head>
<body>
   <?php require('nav.php') ?>
    <h1 class="text-center" style="margin: 40px;">Contact Us</h1>
   

    <form action="subcontect.php" method="POST" class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" class="form-control" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control" required>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" class="form-control" required>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" class="form-control" required></textarea><br>

        <input type="submit" value="Submit" name="submit">
    </form>
    </body>
</html>                