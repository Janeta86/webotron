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
    //ПОМОЩЬ
    $name_z = $_POST['name_z'];
    $phone_z = $_POST['phone_z'];

      $sql = "INSERT INTO `requestforassistance` (name_z, phone_z)
      VALUES ('".$name_z."', '".$phone_z."')";
  
  $statement = $db->prepare($sql);
  // Выполняем запрос
  $statement->execute($data);
  if(!$sql) 
    {
      echo '<script> alert("Заявка не отправлена"); </script>';
          
    }
   else 
    {
      echo '<script> alert("Заявка успешно отправлена"); </script>';
         
    } 
// Закрываем соединение
$db = null;
?>
          <script type="text/javascript">
          setInterval(function(){ document.location.replace("index.php"); }, 1000);
          </script>
