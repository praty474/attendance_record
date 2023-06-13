<html>
<head>
    <link rel="stylesheet" href="style.css">
    <style>
        #select {
  color: #ffffff;
  background:#235391 ;
  height: 30px;
  width: 300px;
  font-size: 16px;
  border-radius: 10px;
}

.button {
  background: transparent;
  height: 30px;
  width: 80px;
  border-radius: 15px;
  border: #57cc02 solid 3px;
  color: #57cc02;
}

.button:hover {
  background: #57cc02;
  width: 80px;
  border-radius: 15px;
  border: #57cc02 solid 3px;
  color: #ffffff;
}

input[type=number]{
height:25px;
width: 300px;
margin: 10px;
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
<h1>Add Contact Number</h1>
   
<form method="post">
    <?php
    require_once("connection.php");
    $fetchingStudents =mysqli_query($connection,"select * from user where IS_STUDENT =1") or die(mysqli_error($connection));
    if($fetchingStudents){
    while($data = mysqli_fetch_assoc($fetchingStudents))
    {
        $user_name = $data['FIRST_NAME'];
        $user_id = $data['USER_ID'];
    }
?>
<br>
<b>Select Students:</b>
  <select name="Student" id="select">
    <option value=""disabled selected> Students</option>
    <?php 
      
  foreach ($fetchingStudents as $fetchingStudents) {
  ?>
    <option value="<?php echo $fetchingStudents['USER_ID'];  ?>"><?php echo $fetchingStudents['USER_ID'];  ?> <?php echo $fetchingStudents['FIRST_NAME']; ?> </option>
    <?php 
    }
   ?>

  </select>

<?php
    }
  
    ?>
    <br>
    <label for="CONTACT_NUM"><b>Contact Number:</b></label>
    <input type="number" name=CONTACT_NUM>
    <br>
<input type="submit" name="submit" vlaue="Choose options" class="button">

</Form>

<table class="table-data">  
        <tr>  
             <th> First Name</th>  
             <th>Last Name</th>  
             <th>Contact</th>  
        </tr>  
        <?php  

                $sql = "select user.USER_ID, user.FIRST_NAME, user.LAST_NAME, user_number.CONTACT_NUM
                from user 
                INNER JOIN user_number on user.USER_ID = user_number.USER_ID;";
                $result = mysqli_query($connection, $sql);  
           
        while($row = mysqli_fetch_array($result))  
        {  
        ?>  
        <tr>  
             <td><?php echo $row["FIRST_NAME"]; ?></td>  
             <td><?php echo $row["LAST_NAME"];?></td>  
             <td><?php echo $row["CONTACT_NUM"]; ?></td>  
        </tr>  
        <?php  
        }  
        ?>  
   </table>  


<?php

if (isset($_POST['submit'])){
   
    $CONTACT_NUM = $_POST['CONTACT_NUM'];


    
      $insertquery = "call SP_INSERT_INTO_USER_NUMBER( '$_POST[Student]','$CONTACT_NUM');";
      

      

    $res = mysqli_query ($connection, $insertquery);
    if ($res != ''){
        ?>
        <script>
            alert("data inserted")
            </script>
            <?php
            exit();

    }else{
        ?>
        <script>
            alert("data not inserted")
            </script>
            <?php

    }
}



mysqli_close($connection);
?>


     




</div>
</body>
</html>