<?php
 session_start();
 require_once 'admin/connection.php';
 $name_z = $_POST['name_z'];
 $phone_z = $_POST['phone_z'];


    $name_z = $_POST['name_z'];
    $phone_z = $_POST['phone_z'];


    if ($password === $password_confirm) {

        mysqli_query($sql, "INSERT INTO `requestforassistance` (name_z, phone_z)
        VALUES ('".$name_z."', '".$phone_z."')");

        $_SESSION['message'] = 'Данные отправлены!';
        header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'Произошла ошибка';
        header('Location: ../index.php');
    }
 
 ?>



  
/* $db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "mybase"; 
try {
    // Открываем соединение, указываем адрес сервера, имя бд, имя пользователя и пароль,
    // также сообщаем серверу в какой кодировке должны вводится данные в таблицу бд.
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    // Устанавливаем атрибут сообщений об ошибках (выбрасывать исключения)
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Переносим данные из полей формы в переменные.
    //МЕТАН
    $name_z = $_POST['name_z'];
    $phone_z = $_POST['phone_z'];
 
 

      $sql = "INSERT INTO `requestforassistance` (name_z, phone_z)
      VALUES ('".$name_z."', '".$phone_z."')";
  

    $statement = $db->prepare($sql);
    // Выполняем запрос
    $statement->execute($data);
    
    echo "Запись успешно создана!";
}
 
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
 
// Закрываем соединение
$db = null; */
?>