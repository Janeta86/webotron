 <!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
   
  
        <link rel="stylesheet" href=
    "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="login.css">
        <title>Login Page</title>

      <meta charset="utf-8">
      <title>Glowing Inputs Login Form UI</title>
      <link rel="stylesheet" href="login.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
<?php
session_start(["use_strict_mode" => true]);
   if (isset($_SESSION['username'])) {

?>

   <p>Вы вошли под именем <?=$_SESSION['username']?></p>
   <p><a href='validate.php?logout=1'>Выйти</a></p>

<?php }
   else{
   ?>
   <form action="validate.php" method="post">
      <div class="login-form">
         <div class="text">
            LOGIN
         </div>
         <form>
            <div class="field">
               <div class="fas fa-envelope"></div>
               <input type="text" placeholder="Username" name="login">
            </div>
            <div class="field">
               <div class="fas fa-lock"></div>
               <input type="password" name="password" type="password" placeholder="Password">
            </div>

            <button class="button" type="submit" >LOGIN</button>
            <?php }
echo ("<p style='color: #ff4242; font-size: 15px; margin-top: 20px;'>".$_SESSION['message']."</p>");
unset($_SESSION['message']);

    ?>  
      </div>  
   </form>
   
    
   </body>
</html>




