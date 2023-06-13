<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: 'Playfair', serif;
            font-family: 'Roboto', sans-serif;
        }

        img {
            width: 18vw;


        }

        nav {
            height: 100vh;
            width: 18vw;
            background: #235391;
            /* padding-left: 5px; */
            float: left;
        }

        li {
            padding: 10px;
            color: #ffffff;
            border-bottom: 1px solid #bcbcbc;
            list-style: none;
            font-size: 1rem;
        }

        li:hover {
            background: #57cc02;
        }

        a {
            text-decoration: none;
            color: none;
        }

        .container {
            text-align: center;
            padding: 10px;
            color: #235391;
           

        }
        .box {
            height: 50px;
            /* width: 200px; */
            width: 150px;
            background: #ffffff;
            color: #235391;
            
            margin: 10px;
            /* margin-left: 30vw;
            margin-top: 10vh; */
            /* top-right-bottom-left */
            /* border: 5px solid green; */
            padding: 8px;
      
            border-radius: 10px;
            box-shadow: 5px 5px 20px 2px gray;
            display: inline-block;
            
  

        }
        .box1 {
            height: 50px;
            /* width: 200px; */
            width: 150px;
            background: #ffffff;
            color: #235391;
            
            /* margin: 10px;
            margin-left: 30vw; */
            margin-top: 10vh;
            /* top-right-bottom-left */
            /* border: 5px solid green; */
            padding: 8px;
            border-radius: 10px;
            box-shadow: 5px 5px 20px 2px gray;
            display: inline-block;
            

        }

        .stu1{
            width: 75px;
            float:right;
       

    transform: translateY(-20%);
       
        }
        .content{
            float:left;
            margin-left: 40px;
        }
    </style>
</head>

<body>
    <nav>

        <a href="home.php"><img src="images/logost.png" alt=""></a>
        <ul>
        <a href="student_list.php">
                <li>Students</li>
            </a>
            <a href="add_attendance.php">
                <li>Attendance</li>
            </a>
            <a href="report.php">
                <li>Attendance Reports</li>
            </a>
            <a href="Course.php">
                <li>Course</li>
            </a>
            <a href="contact.php">
                <li>Student Numbers</li>
            </a>
            <a href="static_data.php">
                <li>Static Data</li>
            </a>

        </ul>
    </nav>
    <div class="container">
        <h1>
            Welcome to Student Attendance Record
        </h1>
        <div class="content">
        <div class="box">
            Students
            <img src="images/stu.png" alt="" class="stu1">
        <?php
        require_once("connection.php");

function blah()
{
    global $connection;
    $sql = "SELECT COUNT(*) FROM user where IS_STUDENT=1";
    if ($result=mysqli_query($connection, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
    return $rowcount;
}

echo '<h2>'.blah();
?>


        </div>


        <div class="box1">
            Course
            <img src="images/course.png" alt="" class="stu1">
        <?php
        require_once("connection.php");

        function bla()
        {
            global $connection;
            $sql = "SELECT COUNT(*) FROM course ";
            if ($result=mysqli_query($connection, $sql)){
            $row= mysqli_fetch_array($result);
            $rowcount = $row[0];
            mysqli_free_result($result);
        }
            return $rowcount;
}

echo '<h2>'.bla();
?>

</div>
        </div>
        
    </div>
</body>

</html>

<!-- // #ffffff #235391 #57cc02 #bcbcbc -->