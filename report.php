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
table{
    border-left: 1px solid black;
    border-right: 1px solid black;
}

input[type=date]{
     margin: 10px;

     width: 290px;
     border: 3px solid #235391;
     background: #235391;
     color: #FFFFFF;
     padding:2px;
     border-radius: 5px;
}
.date{
  margin-left: 130px;
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
<h1>Attendance Report</h1>
   
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

    <label for="selected_date"><b class="date">Select Date:</b></label>
    
    <input type="date" name="selected_date">
<input type="submit" name="submit" vlaue="Choose options" class="button"><br>
Select date to view all attendance of particular date.
</Form>


<?php
      if(isset($_POST['submit'])){
       

        if($_POST['selected_date']== NULL){
          echo $_POST['Student'];
?>

          <table class="table-data" >
         <tr>
               <th> ID</th>  
               <th>Date</th> 
               <th>Attendance</th> 
          </tr> 
          <?php  
                  $sql = "select * from view_atten_record where USER_ID = '$_POST[Student]'";
                  $result = mysqli_query($connection, $sql);  
             
          while($row = mysqli_fetch_array($result))  
          {  
          ?>  
         <tr>  
               <td><?php echo $row["USER_ID"]; ?></td>  
               <td><?php echo $row["DATE"];?></td>  
              <td><?php echo $row["ATTENDANCE"]; ?></td>  
          </tr> 
          <?php  
          }  
          ?>  
     </table> '
     
     <?php
      }
   

      else{
          $selected_date = $_POST['selected_date'];
          $sel = "select * from user_attendance where DATE = '$selected_date'";
          $res = mysqli_query($connection, $sel);  
          ?>
          <table class="table-data" >
          <tr>
                <th> ID</th>  
                <th>Date</th> 
                <th>Attendance</th> 
           </tr> 
           <?php
          while($row = mysqli_fetch_array($res))  
          {  
          ?>  
         <tr>  
               <td><?php echo $row["USER_ID"]; ?></td>  
               <td><?php echo $row["DATE"];?></td>  
              <td><?php echo $row["ATTENDANCE"]; ?></td>  
          </tr> 
          <?php  
          }  
          ?>  
          <?php
     }

      
      
        ?>
        <!-- // $sql = "select * from view_atten_record where USER_ID = USER_ID "; -->
       
<?php
      }
 ?>



</div>
</body>
</html>