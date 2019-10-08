<!DOCTYPE html>
<html lang="en">
<head>
    <title>CSC Admin</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>


<center>
    
    <div style="margin-top: 30px; margin-bottom: 20px"><img src="images/logo.png" width="90"></div>

   <div> <span style="font-family: Muli; font-size: 26px; font-weight: 200">COMPUTER SCIENCE DEPT.</span></div>

   <div> <span style="font-family: Muli; font-size: 18px; font-weight: 100">POPULATE COURSES</span></div>


















    <div style="width: 80%; margin-top: 50px; font-family: Muli">
<form method="post" action="index.php">
        <table class="striped centered" >
            <thead>
            <tr>
                <th>COURSE ID</th>
                <th>PROFESSOR</th>
                <th>CAPACITY</th>

            </tr>
            </thead>

            <tbody>
            <tr>

                <td>
                    <input type = text placeholder="Course ID" required name="course_id">
                </td>


                <td>
                    <input type = text placeholder="Professor's Name" required name="professor">
                </td>



                <td>
                    <input type = text placeholder="Class capacity" required name="capacity">

                </td>

            </tr>
            </tbody>
        </table>

        <div style="margin-bottom: 40px; margin-top: 40px">

                <button class="btn waves-effect waves-light darken-3 blue"   type="submit" name="action">ADD COURSE
                    <i class="material-icons right ">arrow_forward</i>
                </button>
        </div>
</form>
    </div>


    
</center>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>

<?php

$host = "localhost";
$username = "root";
$password = "mysql";
$database = "sauCsc";

$conn = mysqli_connect($host,$username,$password,$database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

else{
   // echo "<script>alert(\"Connected to Db\")</script>";
}



$course_id = $_POST["course_id"];
$professor = $_POST["professor"];
$capacity = $_POST["capacity"];

if(isset($_POST["course_id"],$_POST["professor"],$_POST["capacity"])) {


    $sql = $sql = "INSERT INTO courses (course_id, professor, capacity)
VALUES ('$course_id', '$professor', '$capacity')";

    $result = mysqli_query($conn, $sql);


    if (!$result) {
        echo "<h3><Could not add Course/h3>";
    } else {
        echo "<script>alert(\"New Course Added\")</script>";
    }

}


?>