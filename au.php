<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reg-au.css">
    <title>Авторизация</title>
</head>
<body>

 <!-- banner -->
 <div class="banner">
            <span class="icon-lenta"></span>
            <p>Добро пожаловать на WebCinema</p>
        </div>


    <div class="wrapp">
    <div class="container">

<h2 class="title">Авторизация</h2>
        <form action="php/auth.php" method="POST">
       <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин">
       <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль">
       <button class="vue-btn" type="submit">Войти</button>
       <p>
               У вас нет аккаунта? - <a href="reg-page.php">Зарегистрироваться!</a>
           </p> 
        
         <div class="re-au_logos">
      <a href=""> <img src="images/social_logos/vk.png" alt=""></a>
      <a href=""> <img src="images/social_logos/intstagram.png " alt=""></a>
      <a href=""> <img src="images/social_logos/google.png" alt=""></a>
      <a href=""> <img src="images/social_logos/twitter.png" alt=""></a>

         </div>

        </form>
       
        <a href="index.html"><img src="images/web_logo.png" alt=""></a>
    </div>
    </div>
</body>
</html>