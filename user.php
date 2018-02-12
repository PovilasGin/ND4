<?php 
        

        session_start();
       
        $name = $_POST['data'];
        $_SESSION['username'] = $name;
        
       

        function checkUser(){
            if($name == $user[0]){
                echo "true";
            }
        }
        checkUser();

        $user = array(
            'username' => "admin",
            'password' => "admin123"
        );
        header("Location: index.php");
?>
        
    