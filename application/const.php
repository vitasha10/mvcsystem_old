<?php
$constants = [
    ['display_errors',1],
    ['controller_name','Main'],
    ['action_name','index'],
    ['mysql_server','localhost'],    
    ['mysql_db','chat'],
    ['mysql_user','chat_usr'],
    ['mysql_pass','z29SNcf8HUHAkVTo']
];
foreach($constants as $const){
    define($const[0], $const[1]);
}
