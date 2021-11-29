<?php
$login=filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

if(mb_strlen($login)<5||mb_strlen($login)>90){
    echo"Недопустимая длина логина";
    exit();
}

else if(mb_strlen($pass)<2||mb_strlen($pass)>10){
    echo"Недопустимая длина пароля";
    exit();
}

$pass=md5($pass."samancek2001");

$mysql=new mysqli('localhost','root','saman0901','web-cinema');

$result= $mysql->query("SELECT * FROM `webusers` WHERE `login`='$login' AND `pass`='$pass'");




if (mysqli_num_rows($result) > 0) {

    $user = mysqli_fetch_assoc($result);

    $_POST['webusers'] = [
        "id" => $user['id'],
        "name" => $user['name'],
        "login" => $user['login']
    ];

    header('Location: /Client.php');

} else {
   echo "Такого пользователя не существует";
}


setcookie('user' ,$user['name'],time()+3600*24,"/");




$mysql->close();



?>