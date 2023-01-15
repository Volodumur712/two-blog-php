<?php
    if(isset($_POST["submit"])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE a_name = '$login'";
        // . '" AND password="' . $_POST['password'] . '";
        // var_dump($sql);
        $result = $conn->query($sql);
        //var_dump($result);
    
        $user = $result->fetch_assoc();
        //var_dump($user);

        if (password_verify($password, $user['password'])) {
            setcookie("user", $user['id'], time()+3600*24, "/");
        } else {
         echo 'Invalid password.';
       }
    }
?>

<form method="post">
    <p>
        Login: <br/>
        <input type="text" name="login">
    </p>

    <p>
        Password: <br/>
        <input type="password" name="password">
    </p>

    <p>
        
        <input type="submit" name="submit" value="Login">
    </p>
</form>