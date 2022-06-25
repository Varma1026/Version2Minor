<?php
session_start();
include './include/config.php';

///User Registration
if(isset($_POST['registerStudent'])){
    if(isset($_POST['fullName']) && $_POST['fullName'] != '' && isset($_POST['phoneNumber']) && $_POST['phoneNumber'] != '' && isset($_POST['rollNumber']) && $_POST['rollNumber'] != '' && isset($_POST['email']) && $_POST['email'] != '' && isset($_POST['branch']) && $_POST['branch'] != '' && isset($_POST['parentName']) && $_POST['parentName'] != '' && isset($_POST['section']) && $_POST['section'] != '' && isset($_POST['parentNumber']) && $_POST['parentNumber'] != '' && isset($_POST['gender']) && $_POST['gender'] != '' && isset($_POST['password']) && $_POST['password'] != '' && isset($_POST['confirmPassword']) && $_POST['confirmPassword'] != '' && isset($_POST['question']) && $_POST['question'] != '' && isset($_POST['answer']) && $_POST['answer'] != ''){
        $fullName = $conn -> real_escape_string($_POST['fullName']);
        $phoneNumber = $conn -> real_escape_string($_POST['phoneNumber']);
        $rollNumber = $conn -> real_escape_string($_POST['rollNumber']);
        $email = $conn -> real_escape_string($_POST['email']);
        $branch = $conn -> real_escape_string($_POST['branch']);
        $section = $conn -> real_escape_string($_POST['section']);
        $parentName = $conn -> real_escape_string($_POST['parentName']);
        $parentNumber = $conn -> real_escape_string($_POST['parentNumber']);
        $gender = $conn -> real_escape_string($_POST['gender']);
        $password = $conn -> real_escape_string($_POST['password']);
        $confirmPassword = $conn -> real_escape_string($_POST['confirmPassword']);
        $question = $conn -> real_escape_string($_POST['question']);
        $answer = $conn -> real_escape_string($_POST['answer']);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "Invalid email";
        }elseif(strlen($phoneNumber) != 10){
            echo "Phone Number Incorrect";
        }elseif(strlen($parentNumber) != 10){
            echo "Parent Phone Number Incorrect";
        }elseif("$password" != "$confirmPassword"){
            echo "Password and Confirm Password mismatch";
        }else{
            $passwordhash=md5($confirmPassword);
            $verify=mysqli_query($conn,"SELECT * FROM `tbl_student` WHERE `rollnum` = '$rollNumber' AND `email` = '$email'");
            if($verify){
                if(mysqli_num_rows($verify)>0){
                    echo "User Already Exits!!! Please Login!!";
                }else{
                    $insert=mysqli_query($conn,"INSERT INTO `tbl_student`(`fname`, `rollnum`, `branch`, `section`, `gender`, `phonenumber`, `email`, `parent|guardian_name`, `parent|guardian_num`, `password`, `question`, `answer`, `logintype`) VALUES ('$fullName','$rollNumber','$branch','$section','$gender','$phoneNumber','$email','$parentName','$parentNumber','$passwordhash','$question','$answer','Student')");
                    echo mysqli_error($conn);
                    if($insert){
                        echo "Registration Successful";
                    }else{
                        echo "Registration Failed";
                    }
                }
            }else{
                echo "Please try AfterSometime!!";
            }
        }
    }else{
        echo "failed";
    }
}

///User Login
if(isset($_POST['StudentLogin'])){
	if (!isset($_POST['userRollNumber']) || $_POST['userRollNumber'] == "" || !isset($_POST['userPassword']) || $_POST['userPassword'] == "") {
		echo "All fields must be filled!";
	}else {

		$UserName = $conn -> real_escape_string($_POST['userRollNumber']);
		$Password = md5($conn -> real_escape_string($_POST['userPassword']));
        
		// Login Type Check
        $Login = mysqli_query($conn,"SELECT * FROM `tbl_student` WHERE `rollnum`='$UserName'");
        if (mysqli_num_rows($Login) == 1) {
            $LoginRow = mysqli_fetch_array($Login);
            // If the password inputs matched the hashed password in the database
            if($Password==$LoginRow['password']) {
                $_SESSION['sess_user'] = $LoginRow['email'];
                echo  "Logged";
            }else{
                echo "Wrong Credentials";
            } 
        }else{
            echo "Wrong Credentials";
        }
    }
}