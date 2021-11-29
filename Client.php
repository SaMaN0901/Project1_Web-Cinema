
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <link rel="stylesheet" href="css/reg-au.css">
</head>
<body>
    <!-- banner -->
<div class="banner">
            <span class="icon-lenta"></span>
            <p>Добро пожаловать на WebCinema</p>
        </div>
 <!-- banner -->
<div class="wrapp">

<div class="container">
<h2 class="title">Вас приветстувет! Администрация сайта! <br>
   Nurmamatov Samandar || Erejepov Salauat</h2>


    <!-- Профиль -->
<?php
if($_COOKIE['user']== '' ):

?>

<?php 
else:?>
<p class="title"><?=$_COOKIE['user']?></p>

<?php 
endif;
?>

<a href="index.html"><img src="images/web_logo.png" alt=""></a>

</div>
</div>

</body>
</html>