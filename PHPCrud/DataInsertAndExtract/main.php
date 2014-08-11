<?php

    function student()
    {
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];

        $connect = mysql_connect('localhost','root','');
        $db = mysql_select_db('students',$connect);

        $query = "select count(*) from students_tbl where id = '$id' or name = '$name'";
        $result = mysql_query($query);
        if($result >= 0)
        {
            $query = "insert into students values ('$id','$name')";
            $result = mysql_query($query);
            if($result)
            {
                echo "Data inserted, thank you<br/>";
            }
        }
        else
        {
            echo "Data already exists<br/>";
        }
    }

    function course_entry()
    {
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $code = $_REQUEST['code'];

        $connect = mysql_connect('localhost','root','');
        $db = mysql_select_db('students',$connect);

        $query = "select count(*) from courses_tbl where id = '$id' or title = '$title' or code = '$code'";
        $result = mysql_query($query);
        if($result >= 0)
        {
            $query = "insert into courses_tbl values ('$id','$title','$code')";
            $result = mysql_query($query);
            if($result)
            {
                echo "Course Data inserted, thank you<br/>";
            }
        }
        else
        {
            echo "Data already exists<br/>";
        }

    }

    function course_list()
    {
        $connect = mysql_connect('localhost','root','');

        $db = mysql_select_db('students',$connect);

        $result = mysql_query("select title from courses_tbl");

        while($row = mysql_fetch_array($result))
        {
            echo "<option>".$row['title']."</option>";
        }

    }

    function course_assign()
    {
        $name = $_REQUEST['name'];

        $connect = mysql_connect('localhost','root','');

        $db = mysql_select_db('students',$connect);

        mysql_query("insert into students_tbl (name) values ('$name')");

        $result = mysql_query("select id from students_tbl where name = '$name' ");

        $student_id = mysql_fetch_array($result);

        $a = $student_id['id'];

        foreach($_REQUEST['title'] as $course_title)
        {
            $result = mysql_query("select id from courses_tbl where title = '$course_title' ");

            $course_id = mysql_fetch_array($result);

            $b = $course_id['id'];

            $query = "insert into map_students_courses (student_id,course_code) values ('$a','$b')";

            $result = mysql_query($query);
        }

        if($result)
        {
            echo "Data inserted, thank you<br/>";
        }
        else
        {
            echo "Data already exists<br/>";
        }

    }