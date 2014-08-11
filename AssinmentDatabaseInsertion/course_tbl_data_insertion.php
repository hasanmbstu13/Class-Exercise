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
            if (isset($_POST['courseTitleText']) && $_POST['courseCodeText']) {
                $course_title = $_POST['courseTitleText'];
                $course_code = $_POST['courseCodeText'];

                mysql_connect('localhost', 'root', '');
                mysql_select_db('students');

                //inserting data students
                $courses_data = "INSERT INTO courses_tbl(title,code) VALUES ('$course_title','$course_code')";

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
