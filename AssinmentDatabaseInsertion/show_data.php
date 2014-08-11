<!doctype html>
<html>

<head>
    <title>Show the value in</title>
   
</head>

<body>
<div>
    <form method="post" action="send_data_from_dropdown_to_database.php">
        Student Name:
        <select>
            <?php
            $connect = mysql_connect('localhost','root','');
            $db = mysql_select_db('students',$connect);
            $query = "select id,name from students_tbl";
            $result = mysql_query($query);
                while($row = mysql_fetch_array($result))
                {
                    echo "<option value=".$row['id'].">".$row['name']."</option>";
                }

            ?>
        </select>
        <br/>
        <br/>
        Course Name:
        <select multiple>
            <?php
            $connect = mysql_connect('localhost','root','');
            $db = mysql_select_db('students',$connect);
            $query = "select id,title from courses_tbl";
            $result = mysql_query($query);
            while($row = mysql_fetch_array($result))
            {
                echo "<option value=".$row['id'].">".$row['title']."</option>";
            }

            ?>
        </select>
        <br/>
        <input type="submit" value="Submit" >
    </form>
</div>
    <br/>
    <a href="index.php">Home</a>
</body>
</html>