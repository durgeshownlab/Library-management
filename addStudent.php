<?php
    $name=$_POST['name'];
    $fname=$_POST['fname'];
    $dob=$_POST['dob'];
    $regNo=$_POST['regNo'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $course=$_POST['course'];
    $branch=$_POST['branch'];
    $profile=$_POST['profile'];
    $address=$_POST['address'];

    // $output=$name." ".$fname." ".$dob." ".$regNo." ".$mobile." ".$email." ".$course." ".$branch." ".$profile." ".$address;

    //INSERT INTO `student_details` (`s_id`, `s_name`, `f_name`, `reg_no`, `mob_no`, `email`, `course`, `branch`, `dob`, `address`, `profile`, `occupied_no_of_books`) VALUES ('1', 'durgesh', 'ashok singh', '192h1a05g3', '7667107173', 'durgesh@gmail.com', 'b.tech', 'cse', '2022-11-16', 'rtyrthdgdfgsdgsdfgdsgdsg', 'dfdsgsdgdfg', '1');

    require("_dbconnect.php");
    
    $query="INSERT INTO `student_details` (`s_name`, `f_name`, `reg_no`, `mob_no`, `email`, `course`, `branch`, `dob`, `address`, `profile`,`entry_time`) VALUES ('$name', '$fname', '$regNo', '$mobile', '$email', '$course', '$branch', '$dob', '$address', '$profile', CURRENT_TIMESTAMP);";

    $result=mysqli_query($conn, $query);

    if ($result) {
        echo "successfully inserted";
    }
    else
    {
        echo "not inserted";
    }
    

?>