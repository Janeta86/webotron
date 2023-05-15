<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "mybase"; 

try {
    // Открываем соединение, указываем адрес сервера, имя бд, имя пользователя и пароль,
    // также сообщаем серверу в какой кодировке должны вводится данные в таблицу бд.
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    // Устанавливаем атрибут сообщений об ошибках (выбрасывать исключения)
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
    // Переносим данные из полей формы в переменные
  catch(PDOException $e) { 
      echo '<script> alert("Произошла ошибка"); </script>' . $e->getMessage(); 
 } 
    //ПРОПАН
    $ComplectsP = $_POST['ComplectsP'];
    $EngineP = $_POST['EngineP'];
    $BallonP = $_POST['BallonP'];
    $BallonKrepP = $_POST['BallonKrepP'];
    $MulticlapanP = $_POST['MulticlapanP'];
    $GazmagistralP = $_POST['GazmagistralP'];
    $ZapravustrP = $_POST['ZapravustrP'];
    $nameP = $_POST['nameP'];
    $emailP = $_POST['emailP'];
    $telP = $_POST['telP'];


      $sql = "INSERT INTO `GBO_propan` (ComplectsP, EngineP, BallonP, BallonKrepP, MulticlapanP, GazmagistralP, ZapravustrP, nameP, emailP, telP)
      VALUES ('".$ComplectsP."','".$EngineP."', '".$BallonP."', '".$BallonKrepP."', '".$MulticlapanP."', '".$GazmagistralP."', '".$ZapravustrP."', '".$nameP."', '".$emailP."', '".$telP."')";
  

    $statement = $db->prepare($sql);
    // Выполняем запрос
    $statement->execute($data);
    if(!$sql) 
      {
        echo '<script> alert("Заявка не отправлена"); </script>';
    /*     header('Location: index.php'); */
            
      }
   
    /* echo "Запись успешно создана!"; */
/* } */
     else 
      {
        echo '<script> alert("Заявка успешно отправлена"); </script>';
  /*       header('Location: index.php'); */
           
      } 

      
// Закрываем соединение
$db = null;
?>

            <script type="text/javascript">
            setInterval(function(){ document.location.replace("index.php"); }, 1000);
            </script>