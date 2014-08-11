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
        if (isset($_POST['insertButton'])) {
            //Get values from form
            if (isset($_POST['nameText']) && $_POST['createDate']) {
                $name = $_POST['nameText'];
                $create = $_POST['createDate'];

                mysql_connect('localhost', 'root', '');
                mysql_select_db('students');

                //inserting data students
                $courses_data = "INSERT INTO students_tbl(name,created) VALUES ('$name','$create')";

                //declare in the students variable
                $result = mysql_query($courses_data); //students executes
                if ($result) {
                    echo("Input data is succeed");
                } else {
                    echo("Input data is fail");
                }
            }
            else
            {
                echo 'please fill up all the fields';
            }
        }
        ?>
        <br/>
        <br/>
        <a href="index.php">Home</a>
        <br />        
        <a href="showreport.php">Show  Data</a>
    </body>
</html>
