<?php
    $name=$_POST['name'];
    $fname=$_POST['fname'];
    $dob=$_POST['dob'];
    $regNo=$_POST['regNo'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $course=$_POST['course'];
    $branch=$_POST['branch'];
    //$profile=$_FILES['profile']['name'];
    $address=$_POST['address'];

//   saving image into a profile img folder
    $path="/img/profile_img/default_profile.png";

    if(isset($_FILES['profile']['name']))
    {
        if($_FILES['profile']['name']!='')
        {
            $filename=$_FILES['profile']['name'];
            $extension=pathinfo($filename, PATHINFO_EXTENSION);
            $new_name=$regNo.".".$extension;
            $path="img/profile_img/".$new_name;
            if(move_uploaded_file($_FILES['profile']['tmp_name'], $path))
            {
                require("_dbconnect.php");
                
                $query="INSERT INTO `student_details` (`s_name`, `f_name`, `reg_no`, `mob_no`, `email`, `course`, `branch`, `dob`, `address`, `profile`,`entry_time`) VALUES ('$name', '$fname', '$regNo', '$mobile', '$email', '$course', '$branch', '$dob', '$address', '$path', CURRENT_TIMESTAMP);";
    
                $result=mysqli_query($conn, $query);
    
                if ($result) {
                    echo "successfully inserted";
                }
                else
                {
                    echo "not inserted";
                }
            }
        }
        else
        {
            require("_dbconnect.php");
            
            $query="INSERT INTO `student_details` (`s_name`, `f_name`, `reg_no`, `mob_no`, `email`, `course`, `branch`, `dob`, `address`, `profile`,`entry_time`) VALUES ('$name', '$fname', '$regNo', '$mobile', '$email', '$course', '$branch', '$dob', '$address', '$path', CURRENT_TIMESTAMP);";

            $result=mysqli_query($conn, $query);

            if ($result) {
                echo "successfully inserted";
            }
            else
            {
                echo "not inserted";
            }
        }
    }
    else
    {
        require("_dbconnect.php");
            
            $query="INSERT INTO `student_details` (`s_name`, `f_name`, `reg_no`, `mob_no`, `email`, `course`, `branch`, `dob`, `address`, `profile`,`entry_time`) VALUES ('$name', '$fname', '$regNo', '$mobile', '$email', '$course', '$branch', '$dob', '$address', '$path', CURRENT_TIMESTAMP);";

            $result=mysqli_query($conn, $query);

            if ($result) {
                echo "successfully inserted";
            }
            else
            {
                echo "not inserted";
            }
    }

?>