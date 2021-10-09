<?php 
    include 'connect.php';

    if(isset($_POST['report'])){
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $location = $_POST['location'];
        $message = $_POST['message'];

        
            $query =mysqli_query($conn,"INSERT INTO report values('','$fullname','$phone','$location','$message',now())");
            if($query){
                
                echo '<script>alert("Your Report has been recorded.. \n Our Response team is attending to it...")</script>';
                echo '<script>window.history.go(-1)</script>';
            } else{
                echo mysqli_error($query);
            }

    }
