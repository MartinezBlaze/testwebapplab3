<?php        $serverName = "testdbtp044890.database.windows.net";         $connectionOptions = array(                             "Database" => "testdbtp044890",                             "Uid" => "apuadmin",                             "PWD" => "Martin070899?");                          

//Establishes the connection        
$conn = sqlsrv_connect($serverName, $connectionOptions);         if (!$conn) {            die("Error connection: ".sqlsrv_errors());        }
echo "DB Server: Connected!";
?>
