<?php

if(isset($_POST['post_id']) ) {

    if(isset($_COOKIE['user'])) { // якщо існує юзер
        $userSQL = 'SELECT * FROM users WHERE id=' . $_COOKIE['user'];  // тоді обираємо користувача
        $userResault = $conn->query($userSQL);

        if($userResault) {
            $user = $userResault->fetch_assoc(); // якщо юзер найдений

            $sql = 'SELECT * FROM user_post_likes WHERE user_id=' . $user['id'] . " AND post_id=" . $_POST['post_id'];
            var_dump(sql);
            $resault = $conn->query($sql);

            if($resault->num_rows > 0) {
                $sql = 'DELETE * FROM user_post_likes WHERE user_id=' . $user['id'] . " AND post_id=" . $_POST['post_id'];
                $conn->query($sql);

                echo json_encode(['status' == 'disliked', 'count' == 1]); // зняти лайк
            }
            else {
                $sql = "INSERT INTO `user_post_likes` (post_id, user_id) VALUES ('" . $_POST['post_id'] . "', '" . $user['id'] . "');";
                if($resault = $conn->query($sql)) { // якщо все успішно
                    echo json_encode(['status' == 'liked', 'count' == 2]);
            }
            };

        } else {
            echo 'no login';
        }
    } 
} else {
    echo "error";
}
?>
