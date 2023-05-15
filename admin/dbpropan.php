<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "mybase";
     
   // connect the database with the server
   $conn = new mysqli($servername,$username,$password,$dbname);
     
    // if error occurs 
    if ($conn -> connect_errno)
    {
       echo "Failed to connect to MySQL: " . $conn -> connect_error;
       exit();
    }
  
    $sql = "select * from GBO_propan";
    $result = ($conn->query($sql));
    //declare array to store the data of database
    $row = []; 
  
    if ($result->num_rows > 0) 
    {
        // fetch all data from db into array 
        $row = $result->fetch_all(MYSQLI_ASSOC);  
    }   
?>
  
<!DOCTYPE html>
<html>
<!-- <style>
    td{
       /*  border: 1px solid black; */
        padding: 10px;
        margin: 5px;
        text-align: center;
        font-size: 18px;
        
    }
    th {
        padding: 10px;
        margin: 5px;
        text-align: center;
        font-size: 20px;
    }
</style> -->
  
<body>
<div class="table-wrap">
    <table >
        <thead>
            <tr>
                <th>ID</th>
                <th>Комплектация ГБО</th>
                <th>Двигатель</th>
                <th>Баллон</th>
                <th>Крепление баллона</th>
                <th>Мультиклапан</th>
                <th>Газовая магистраль</th>
                <th>Заправочное устройство</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Телефон</th>
            </tr>
        </thead>
        <tbody>
            <?php
               if(!empty($row))
               foreach($row as $rows)
              { 
            ?>
            <tr>
  
                <td><?php echo $rows['id']; ?></td>
                <td><?php echo $rows['ComplectsP']; ?></td>
                <td><?php echo $rows['BallonP']; ?></td>
                <td><?php echo $rows['EngineP']; ?></td>
                <td><?php echo $rows['BallonKrepP']; ?></td>
                <td><?php echo $rows['MulticlapanP']; ?></td>
                <td><?php echo $rows['GazmagistralP']; ?></td>
                <td><?php echo $rows['ZapravustrP']; ?></td>
                <td><?php echo $rows['nameP']; ?></td>
                <td><?php echo $rows['emailP']; ?></td>
                <td><?php echo $rows['telP']; ?></td>
  
            </tr>
            <?php } ?>
        </tbody>
    </table>
              </div>
</body>
</html>
  
<?php   
    mysqli_close($conn);
?>