<?php
//connect to the DB
//connect to the server(server_name,server_user_id,server_user_password)
$mysql_db= mysqli_connect("localhost","root","","my"); 

//connect to the database(access_info_variable,database_name)
mysqli_select_db($mysql_db,"my");
?>