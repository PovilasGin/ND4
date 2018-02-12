<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="user.php" method="POST">
        <input type="text" name="name" id="">
        <input type="password" name="" id="">    
        <input type="submit" value="Ok">
    </form>
    
    <?php 
    session_start();
    $_SESSION['username'] = "Povilas";
    

?>
    <?php if(isset($_SESSION['username'])): ?>
        <p style="color:red;">
        <?php 
            echo $_SESSION['username'];
            unset($_SESSION['username']);
         ?>
         </p>
    <?php endif ?>

</body>
</html>