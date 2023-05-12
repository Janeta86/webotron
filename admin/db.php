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
  
    $sql = "select * from requestforassistance";
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
        font-size: 18px;
        
    }
    th {
        padding: 10px;
        margin: 5px;
        text-align: center;
        font-size: 20px;
    }
</style>
  
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
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
                <td><?php echo $rows['name_z']; ?></td>
                <td><?php echo $rows['phone_z']; ?></td>
  
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
  
<?php   
    mysqli_close($conn);
?>