
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="exercice.php" method="post">
 <p>Votre nom : <input type="text" name="first_name" /></p>
 <p><input type="submit" value="OK"></p>
</form>
    
    <?php
    session_start();
    $_SESSION = session_id();
           

    

            if($_GET['first_name'] && $_GET['first_name'] !== '' ) {
                echo "Bonjour, " .$_GET['first_name'];
            }

            else if($_POST['first_name'] && $_POST['first_name'] !==''){
                echo "Bonjour, " .$_POST['first_name'];
            }
            
            else{
                echo "Bonjour, Anonyme";
            }
            
           unset($_SESSION["first_name"]); //faire le reset
            ?>

<br>
<br>

<form action="">
<input type="submit" name="Reset" value="Reset">
</form>
    
</body>
</html>