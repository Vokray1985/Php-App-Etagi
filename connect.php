<?php

$db = new mysqli 
('localhost', // Имя хоста
'vokray', //Имя пользователь
'', // Пароль
'world_x' // Название базы данных
);

//print_r($db);
if ($db->connect_errno !=0) {
    die("Error in Connection $db->connect_error");
} else {
    printf("Connected to database\n");
    
    $qres = $db->query("SELECT name, code FROM country");
    printf("<table>");
    printf("<tr><th>Country Code</th><th>Country Name</th></tr>");
    while ($row = $qres->fetch_assoc()) {
        printf("<tr><td>%s</td><td> %s</td></tr>\n", $row['code'], $row['name']);
    }
}

?>