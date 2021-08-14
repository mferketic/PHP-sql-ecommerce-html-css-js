<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Brisanje knjige</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
            include("includes/auth.php");
            include("includes/db.php");
            require('includes/header.php');

            if(isset($_GET['contactID'])!="") {
                $contactID = $_GET['contactID'];

                $query = "DELETE FROM contact WHERE id='{$contactID}'";
                $result = mysqli_query($conn, $query);
                if($result){
                    echo "<div class='alert alert-success'>Problem solved.</div>";
                } else {
                    echo "Neuspesno";
                }
            } 
        ?>
		<?php
		include 'reklame.php';
		include 'includes/footer.php';
		?> 
    </body>
</html>