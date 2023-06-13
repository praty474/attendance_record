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

        .container {
            /* background: green; */
            height: 100vh;
            width: 100vw;
            padding: 70px 0;
            /* border: 3px solid green; */
            /* text-align: center; */
            display: flex;
            justify-content: center;
        }

        .box {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            background: #235391;
            height: 60vh;
            width: 60vw;
            align-items: center;
            /* max-width: 100vw; */
            align-content: center;
            color: #ffffff;
            text-align: center;
            border-radius: 10px;
            box-shadow: 5px 5px 10px 5px black;
            font-size: 1.1em;
        }

        .box1 {
            height: 50vh;
            width: 30vw;
            /* background: navy; */
            /* border: 2px solid black; */
            /* order: 2; */
            align-self: flex-end;


        }

        .box2 {
            height: 50vh;
            width: 30vw;
            /* background: red; */
            /* border: 2px solid black; */
            /* flex-grow: 2; */

        }

        input {
            width: 28vw;
            box-sizing: border-box;
            text-align: center;
            border-radius: 5px;
            /* height: 25px; */
            height: 4vh;
            margin: 2px;
            border: 0;
        }

        select {
            width: 28vw;
            box-sizing: border-box;
            text-align: center;
            border-radius: 5px;
            /* height: 25px; */
            height: 4vh;



        }

        .button {
            background: transparent;
            width: 10vw;
            border-radius: 15px;
            border: #57cc02 solid 3px;
            color: #57cc02;
        }

        .button:hover {
            background: #57cc02;
            width: 10vw;
            border-radius: 15px;
            border: #57cc02 solid 3px;
            color: #ffffff;
        }

        .checkbox {
            /* height: 20px; */
            height: 3vh;
        }

        h1 {
            text-align: center;
            padding: 10px;
            color: #235391;
        }
        .register{
    float: left;
    list-style: none;
    background-color: #57cc02;
  color: white;
  padding: 14px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;


}
    </style>
</head>

<body bgcolor="#bcbcbc">
<a href="student_list.php" class="register">Back</a>
    <h1>Add new user</h1>

    <div class="container">
    <form action="" method="POST">
        <div class="box">
     
            <div class="box1">
                <div class="column">

                    <label for="FIRST_NAME">First Name</label>
                    <br>
                    <input type="text" name="FIRST_NAME" value=""></input>
                    <br>
                    <label for="LAST_NAME">Last Name</label>
                    <br>
                    <input type="text" name="LAST_NAME" value=""></input>
                    <br>
                    <label for="EMAIL">Email</label>
                    <br>
                    <input type="email" name="EMAIL" value=""></input>
                    <br>
                    <label for="GENDER">Gender</label><br>
                    <select id="GENDER" name="GENDER">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>

                    </select><br>
                    <label for="COUNTRY">Country</label><br>
                    <select id="COUNTRY" name="COUNTRY">
                        <option value="Nepal">Nepal</option>
                        <option value="India">India</option>
                        <option value="China">China</option>
                        <option value="Bhutan">Bhutan</option>
                    </select>
                    <br>
                    <label for="DISTRICT"> District</label><br>
                    <select id="country-state" name="DISTRICT">
                        <option value="">Select state</option>
                        <option value="BA">Bagmati Zone</option>
                        <option value="BH">Bheri Zone</option>
                        <option value="1">Central Region</option>
                        <option value="DH">Dhaulagiri Zone</option>
                        <option value="4">Eastern Development Region</option>
                        <option value="5">Far-Western Development Region</option>
                        <option value="GA">Gandaki Zone</option>
                        <option value="JA">Janakpur Zone</option>
                        <option value="KA">Karnali Zone</option>
                        <option value="KO">Kosi Zone</option>
                        <option value="LU">Lumbini Zone</option>
                        <option value="MA">Mahakali Zone</option>
                        <option value="ME">Mechi Zone</option>
                        <option value="2">Mid-Western Region</option>
                        <option value="NA">Narayani Zone</option>
                        <option value="RA">Rapti Zone</option>
                        <option value="SA">Sagarmatha Zone</option>
                        <option value="SE">Seti Zone</option>
                        <option value="3">Western Region</option>
                    </select>

                </div>
            </div>
            <div class="box2">
                <div class="column">
                    <label for="MIDDLE_NAME">Middle Name</label><br>
                    <input type="text" name="MIDDLE_NAME" value=""></input>
                    <br>
                    <label for="DOB">Date Of Birth</label><br>
                    <input type="date" name="DOB" value=""></input>
                    <br>
                    <label for="IS_STUDENT">Is_student</label><br>
                    <input type="checkbox" name="IS_STUDENT" class="checkbox"></input>
                    <!-- <select name="IS_STUDENT" id="IS_STUDENT">
                    <option value="1">Student</option>
                    <option value="0">Teacher</option>
    
                </select> -->
                    <br><label for="STATE">State</label><br>
                    <select id="State" name="STATE">
                        <option value="">Select state</option>
                        <option value="BA">Bagmati Zone</option>
                        <option value="BH">Bheri Zone</option>
                        <option value="1">Central Region</option>
                        <option value="DH">Dhaulagiri Zone</option>
                        <option value="4">Eastern Development Region</option>
                        <option value="5">Far-Western Development Region</option>
                        <option value="GA">Gandaki Zone</option>
                        <option value="JA">Janakpur Zone</option>
                        <option value="KA">Karnali Zone</option>
                        <option value="KO">Kosi Zone</option>
                        <option value="LU">Lumbini Zone</option>
                        <option value="MA">Mahakali Zone</option>
                        <option value="ME">Mechi Zone</option>
                        <option value="2">Mid-Western Region</option>
                        <option value="NA">Narayani Zone</option>
                        <option value="RA">Rapti Zone</option>
                        <option value="SA">Sagarmatha Zone</option>
                        <option value="SE">Seti Zone</option>
                        <option value="3">Western Region</option>
                    </select>
                    <br>
                    <label for="STREET">Street</label><br>
                    <input type="text" name="STREET" value=""></input><br>

                    <label for="CONTACT_NUM">Contact Number</label><br>
                    <input type="number" name="CONTACT_NUM"></input>



                </div>

            </div>
            <input type="submit" value="Submit" name="submit" class="button">
 
        </div>

    </form>
    </div>
</body>

</html>

<?php

include 'connection.php';

if (isset($_POST['submit'])){
    $FIRST_NAME = $_POST['FIRST_NAME'];
    $MIDDLE_NAME = $_POST['MIDDLE_NAME'];
    $LAST_NAME = $_POST['LAST_NAME'];
    $DOB = $_POST['DOB'];
    $GENDER =$_POST['GENDER'];
    $EMAIL = $_POST['EMAIL'];
    // $IS_STUDENT = $_POST['IS_STUDENT'];
    $IS_STUDENT = isset($_POST['IS_STUDENT']) ? 1 : 0;
    $COUNTRY = $_POST['COUNTRY'];
    $STATE = $_POST['STATE'];
    $DISTRICT = $_POST['DISTRICT'];
    $STREET = $_POST['STREET'];
    // $CONTACT_NUM = $_POST['CONTACT_NUM'];
    // $USER_ID =  mysqli_insert_ID($connection);
    

    //    $insertquery = "INSERT INTO USER( FIRST_NAME, MIDDLE_NAME, LAST_NAME, DOB, GENDER, EMAIL, IS_STUDENT, COUNTRY, STATE, DISTRICT, STREET ) VALUES( '$FIRST_NAME', '$MIDDLE_NAME', '$LAST_NAME', '$DOB', '$GENDER', '$EMAIL', '$IS_STUDENT', '$COUNTRY', '$STATE', '$DISTRICT', '$STREET' )
    //    ";
    //   $insertquery = "call SP_INSERT_FORM( '$FIRST_NAME', '$MIDDLE_NAME', '$LAST_NAME', '$DOB', '$GENDER', '$EMAIL', '$IS_STUDENT', '$COUNTRY', '$STATE', '$DISTRICT', '$STREET', last_insert_id(),'$CONTACT_NUM' );";
    
      $insertquery = "call SP_INSERT_INTO_USER( '$FIRST_NAME', '$MIDDLE_NAME', '$LAST_NAME', '$DOB', '$GENDER', '$EMAIL', '$IS_STUDENT', '$COUNTRY', '$STATE', '$DISTRICT', '$STREET');";
      

      

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



<!-- // #ffffff #235391 #57cc02 #bcbcbc -->