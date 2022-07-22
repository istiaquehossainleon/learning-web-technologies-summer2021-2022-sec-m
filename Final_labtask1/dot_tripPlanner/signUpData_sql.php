<?php
    if(isset($_POST['submit'])){
        
        $fname = $_POST['fname'];
        $sname = $_POST['sname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        
        $connection = mysqli_connect('localhost','root','','dot_tripplanner');
        
        $query = "INSERT INTO signupdata(fname,sname,email,password,dob,gender) ";
        $query .= "VALUES ('$fname', '$sname', '$email', '$password', '$dob', '$gender')";
        
        $result = mysqli_query($connection, $query);
        
        if(!$result){
           die('Connect Error: ' . mysqli_connect_error());
        } else{
                header ("location: login_page.php");
        }

    }
?>
