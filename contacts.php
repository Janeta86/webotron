<?php
/* Попытка подключения к серверу MySQL. Предполагая, что вы используете MySQL
 сервер с настройкой по умолчанию (пользователь root без пароля) */
$link = mysqli_connect("localhost", "root", "", "contacts");
 
// Проверьте подключение
if($link === false){
    die("ERROR: Нет подключения. " . mysqli_connect_error());
}
 
//  экранирует специальные символы в строке
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$phone= mysqli_real_escape_string($link, $_REQUEST['phone']);

 
// Попытка выполнения запроса вставки
$sql = "INSERT INTO persons (name, phone) VALUES ('$name', '$phone')";
if(mysqli_query($link, $sql)){
    echo "Записи успешно добавлены.";
} else{
    echo "ERROR: Не удалось выполнить $sql. " . mysqli_error($link);
}
 
// Закрыть соединение
mysqli_close($link);
?>