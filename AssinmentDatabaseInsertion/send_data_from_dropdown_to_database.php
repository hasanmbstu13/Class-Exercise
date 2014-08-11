<!doctype html>
<html>
    <head>
        <title>Student Entry Result</title>
        
    </head>
    <body>
        <div>
            <?php
            require_once 'students_tbl_data_insertion.php';
            $name = $_POST['nameText'];
            $connect = mysql_connect('localhost', 'root', '');
            $db = mysql_select_db('students', $connect);
            //mysql_query("insert into students_tbl (name) values ('$name')");
            $result = mysql_query("select id from students_tbl where name = '$name' ");
            $student_id = mysql_fetch_array($result);
            $a = $student_id['id'];
            foreach ($_POST['courseTitleText'] as $course_title) {
                $result = mysql_query("select id from courses_tbl where title = '$course_title' ");
                $course_id = mysql_fetch_array($result);
                $b = $course_id['id'];
                $query = "insert into map_students_courses (student_id,course_code) values ('$a','$b')";
                $result = mysql_query($query);
            }
            if ($result) {
                echo "Data inserted, thank you<br/>";
            } else {
                echo "Data already exists<br/>";
            }
            ?>
            <br/><br/>
            <a href="student.html">Student Entry</a><br/>
            <a href="index.html">Home</a>
        </div>
    </body>
</html>