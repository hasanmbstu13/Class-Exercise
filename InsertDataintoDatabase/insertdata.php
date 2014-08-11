<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        var_dump($_POST);
        $name = $_POST['nameText'];
        $created = $_POST['createdDate'];
        //echo $name.' '.$created;
        mysql_connect('localhost','root','');
        mysql_select_db('students');
        mysql_query("INSERT into students_tbl(name,created) values('$name','$created')");
        
        
        echo 'Inserted Sucessfully';
        
        
       
        ?>
    </body>
</html>
