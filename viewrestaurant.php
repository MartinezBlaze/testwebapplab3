<?php
  $serverName = "testdbtp044890.database.windows.net";
  $connectionOptions = array(
    "Database" => "testdbtp044890",
    "Uid" => "apuadmin",
    "PWD" => "Martin070899?");

  //Establishes the connection        
  $conn = sqlsrv_connect($serverName, $connectionOptions);
  if (!$conn) {
    die("Error connection: ".sqlsrv_errors());
  }
  echo "DB Server: Connected!";

  while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
  {
    echo "<tr>";
    echo "<td>". $row['restaurant_id'] . "</td>";
    echo "<td>". $row['restaurant_name'] ."</td>";
    echo "<td>". $row['restaurant_address'] . "</td>";
    echo "<td>". $row['restaurant_phone'] . "</td>";
    echo "</tr>";
  }
  sqlsrv_free_stmt($getResults); 
?>
