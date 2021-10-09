<?php 
    include 'connect.php';
    session_start();

    if(isset($_POST['register'])){
        $fullname = $_POST['fullname'];
        $email = strtolower(trim($_POST['email']));
        $password = strtolower(trim($_POST['password']));
        $location = strtolower(trim($_POST['location']));
        $cpassword = strtolower(trim($_POST['cpassword']));

        if($cpassword !== $password){
            echo '<script>alert("Password do not match")</script>';
            echo '<script>window.location.replace("account.html")</script>';
        } else{
            $query =mysqli_query($conn,"INSERT INTO users values('','$fullname','$email','$location','$password',now())");
            if($query){
                $_SESSION['email'] = $email;
                echo '<script>alert("Login Success")</script>';
                echo '<script>window.location.replace("../dashboard/")</script>';
            } else{
                echo mysqli_error($query);
            }

        }
    }

    if(isset($_POST['login'])){
        $email = strtolower(trim($_POST['email']));
        $password = strtolower(trim($_POST['password']));

        $check =mysqli_query($conn,"SELECT * FROM users where email ='$email' and password ='$password'");

        if(mysqli_num_rows($check) ==0){
            echo '<script>alert("Incorrect Username or password")</script>';
            echo '<script>window.location.replace("account.html")</script>';
        } else {
            $_SESSION['email'] = $email;
            echo '<script>alert("Login Success")</script>';
            echo '<script>window.location.replace("../dashboard/")</script>';
        }
    }

?>