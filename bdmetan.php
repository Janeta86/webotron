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
    //МЕТАН
    $ComplectsM = $_POST['ComplectsM'];
    $EngineM = $_POST['EngineM'];
    $BallonM = $_POST['BallonM'];
    $BallonKrepM = $_POST['BallonKrepM'];
    $MulticlapanM = $_POST['MulticlapanM'];
    $GazmagistralM = $_POST['GazmagistralM'];
    $ZapravustrM = $_POST['ZapravustrM'];
    $nameM = $_POST['nameM'];
    $emailM = $_POST['emailM'];
    $telM = $_POST['telM'];
 
 

      $sql = "INSERT INTO `GBO_metan` (ComplectsM, EngineM, BallonM, BallonKrepM, MulticlapanM, GazmagistralM, ZapravustrM, nameM, emailM, telM)
      VALUES ('".$ComplectsM."','".$EngineM."', '".$BallonM."', '".$BallonKrepM."', '".$MulticlapanM."', '".$GazmagistralM."', '".$ZapravustrM."','".$nameM."', '".$emailM."', '".$telM."')";
  

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