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
  
    $sql = "select * from GBO_metan";
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
<style>
    td{
       /*  border: 1px solid black; */
        padding: 10px;
        margin: 5px;
        text-align: center;
        font-size: 14px;
        font-weight: 400;
        border: 1px solid #bbbbbb;
        color: var(--text-color);
        
    }
    th {
        padding: 10px;
        margin: 5px;
        text-align: center;
        font-size: 18px;
        font-weight: 500;
        border: 2px solid #bbbbbb;
        color: var(--text-color);
    }
</style>
  
<body>
    <div class="table-wrap">
    <table>
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
                <td><?php echo $rows['ComplectsM']; ?></td>
                <td><?php echo $rows['BallonM']; ?></td>
                <td><?php echo $rows['EngineM']; ?></td>
                <td><?php echo $rows['BallonKrepM']; ?></td>
                <td><?php echo $rows['MulticlapanM']; ?></td>
                <td><?php echo $rows['GazmagistralM']; ?></td>
                <td><?php echo $rows['ZapravustrM']; ?></td>
                <td><?php echo $rows['nameM']; ?></td>
                <td><?php echo $rows['emailM']; ?></td>
                <td><?php echo $rows['telM']; ?></td>
  
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