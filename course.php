<?php
require_once 'connection.php';
?>
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

        .nav_img {
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

        .table-data{
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 14px;
            margin-left: auto;
            margin-right: auto;
            width: 60vw;
        }

        .table-data thead tr{
            background-color: #235391;
            text-align: left;
            color: #FFFFFF;
      
        }

        .table-data th, td{
            padding: 4px 4px;
            text-align: left;

        }

        .table-data tbody tr{
            border-bottom: 1px solid black;
          
        }
        .register{
    float: right;
    list-style: none;
    background-color: #57cc02;
    color: white;
    width: 50px;    
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-weight: 500;
    font-size: 30px;
    border-radius: 10px;

    }
    .register:hover{
        background-color: #ffffff;
    color: #57cc02;
    border: 3px solid #57cc02;
    }
    .btn{
    background: white;
    }

    .logo{
    height:18px;
    }
    </style>
</head>

<body>
    <nav>

        <a href="home.php"><img src="images/logost.png" class="nav_img" alt="" ></a>
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
            Course List
        </h1>
        
        
        <table id="example" class="table-data" width="50%">
 

            <thead>
            <tr>  
                <td colspan="7" class = "btn">
                    <a href="#" class="register">+</a>
            </td>
        </tr>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Credit Hour</th>
            
                    <!-- <th class="text-center">Delete</th> -->
                </tr>
            </thead>
            <tbody>
            <?php
            $query = "select * from course ";
            $stmt = mysqli_query($connection,$query);
            if($stmt){
                while($row = mysqli_fetch_assoc($stmt)){
                    $name = $row['COURSE_NAME'];
                    $description = $row['COURSE_DESC'];
                    $credit  = $row['COURSE_CHR'];
                    // $last_name = $row['LAST_NAME'];
                    // $dob = $row['DOB'];
                    // $gender = $row['GENDER'];
                    // $email = $row['EMAIL'];
                    // $is_student = $row['IS_STUDENT'];
                    // $country = $row['COUNTRY'];
                    // $state = $row['STATE'];
                    // $district = $row['DISTRICT'];
                    // $street = $row['STREET'];
                    echo  
                        '<tr>
                            <th>'.$name.'</th>
                            <td>'.$description.'</td>
                            <td>'.$credit.'</td>
                    
                            
                        </tr>';
                }
            }
            ?>
        </tbody>
</table>

</body>

</html>

<!-- // #ffffff #235391 #57cc02 #bcbcbc -->