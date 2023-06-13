<html>
<head>
    <link rel="stylesheet" href="style.css">
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
            Take Attendance
        </h1>
        <!-- <a href="register.php" class="register">Add User</a> -->
        <h3>Today's Date:   <?php
            echo "Date".' '. date("y-m-d-l"). '<br>';
?></h3>
<table border="1" cellspacing="0" class="table-data">
    <form action="" method="POST">
    <tr>
        <th>Student Name</th>
        <th >Present</th>
        <!-- <th>Absent</th> -->
    </tr>

    
    <?php
    require_once("connection.php");
    $fetchingStudents =mysqli_query($connection,"select * from user where IS_STUDENT =1") or die(mysqli_error($connection));
    while($data = mysqli_fetch_assoc($fetchingStudents))
    {
        $user_name = $data['FIRST_NAME'];
        $user_id = $data['USER_ID'];
?>
<tr>
    <td class="name"><?php echo $user_name; ?> </td>
    <!-- <td  class="checkbox"><input type="checkbox"  name="studentPresent[]" value="<?php echo $user_id; ?>" ></td>   -->
 
    <td  class="checkbox"> <div class="checkbox-wrapper-40">
  <label>
    <input type="checkbox" name="studentPresent[]" value="<?php echo $user_id; ?>" />
    <span class="checkbox"></span>
  </label>
</div></td> 


    <!-- <td><input type="checkbox" name="studentAbsent[]" value="<?php echo $user_id; ?>" ></td> -->
 
    </tr>
<?php
    }
    ?>
    <tr>
        <td>Select Date(Optional)</td>
        <td colspan="2"><input type="date" name="selected_date"></td>
    </tr>

    <tr>
       <th colspan="2">
        <input type="submit" name="addAttendanceBTN" class="button" />
       </th>
    </tr>
</form>
    </table>
    



    <?php
    if(isset($_POST['addAttendanceBTN'])){
        //date logic starts
        if($_POST['selected_date']== NULL){
            $selected_date = date("Y-m-d");
        }else{
            $selected_date = $_POST['selected_date'];
        }

        //date logic ends

        // echo $selected_date;

        $attendance_month = date ("M", strtotime($selected_date));
        $attendance_year = date ("Y", strtotime($selected_date));
        // echo $attendance_month . '<br>' ;
        // echo $attendance_year;

        if(isset($_POST['studentPresent']))
        {
            $studentPresent = $_POST['studentPresent'];
            $attendance = "P";
            foreach($studentPresent as $atd)
            {
            // echo $atd;
            mysqli_query($connection, "insert into user_attendance(USER_ID,DATE, ATTENDANCE) values('".$atd."', '".$selected_date."', '".$attendance."')")  or die(mysqli_error($connection));
            }
        }
        if(isset($_POST['studentAbsent']))
        {
            $studentAbsent = $_POST['studentAbsent'];
        }






        // print_r ($studentPresent);


    }

    ?>

</div>
</body>
</html>