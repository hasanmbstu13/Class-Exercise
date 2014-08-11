<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //var_dump($_POST);
        $title = $_POST['titleText'];
        $code = $_POST['codeText'];
        //echo $name.' '.$created;
        mysql_connect('localhost','root','');
        mysql_select_db('students');
        mysql_query("INSERT into courses_tbl(title,code) values('$title','$code')");
        
        echo 'Inserted Sucessfully';
        
        ?>
    </body>
</html>
