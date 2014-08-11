<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        mysql_connect('localhost','root','');
        mysql_select_db('students');
        $qury = mysql_query("Select * from students");
        echo "<table border='1'>";
        while ($data = mysql_fetch_object($qury))
        {
            echo"<tr><td>";
            echo $data->name;
            echo $data->created;
            echo "</tr></td>";
        }
        echo "</table>";
        ?>
    </body>
</html>
