
<?php
// шифруванння пароля
 $password = "we";
 $passwordHash = password_hash($password, PASSWORD_BCRYPT);
 echo $passwordHash . "<hr/>";

// // echo password_verify($password, $passwordHash);
// if (password_verify($password, $passwordHash)) {
//   echo 'Password is valid!';
// } else {
//   echo 'Invalid password.';
// }

?>