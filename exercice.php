
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- $id_session = session_id() -->
    <?php
    session_start();
    $id_session = session_id();
           

            if($_GET['first_name'] && $_GET['first_name'] !== '' ) {
                echo "Bonjour, " .$_GET['first_name'];
            }

            else if($_POST['first_name'] && $_POST['first_name'] !==''){
                echo "Bonjour, " .$_POST['first_name'];
            }
            
            else{
                echo "Bonjour, Anonyme";
            }
            ?>


<form action="exercice.php" method="post">
 <p>Votre nom : <input type="text" name="first_name" /></p>
 <p><input type="submit" value="OK"></p>
</form>

    
</body>
</html>