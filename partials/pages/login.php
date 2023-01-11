<?php
    if(isset($_POST['submit'])) {
        $sql = 'SELECT * FROM users WHERE a_name="' . $_POST['login'] . '" AND password="' . $_POST['password'] . '";';
        var_dump($sql);
        $result = $conn->query($sql);
    
        $user = $result->fetch_assoc();

        //setcookie("user", $user['id'], time()=3600*24, "/");

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