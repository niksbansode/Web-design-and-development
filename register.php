
<?php
require_once 'core.inc.php';
if(!get_status()) {
    if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['location']) && isset($_POST['phone'])){
        require 'connect.inc.php';
        $name=mysqli_real_escape_string($stat,$_POST['name']);
        $password=mysqli_real_escape_string($stat,$_POST['password']);
        $password_hash=mysqli_real_escape_string($stat,md5($password));
        $phone=mysqli_real_escape_string($stat,$_POST['phone']);
        $username=mysqli_real_escape_string($stat,$_POST['username']);
        if(!empty($name) && !empty($password) && !empty($phone) && !empty($username)) {
                $get_query="SELECT `username` FROM `credenz` WHERE `username`='$username'";
                require 'connect.inc.php';
                $query_run=mysqli_query($stat,$get_query);
                if(mysqli_num_rows($query_run)==1) {
                    echo "The user with username : ".$username." is already exist.";
                }
                    $drop_id="ALTER TABLE `credenz` DROP id";
                    $add_id="ALTER TABLE `credenz` ADD id INT NOT NULL AUTO_INCREMENT Primary key FIRST";
                    mysqli_query($stat,$drop_id);
                    mysqli_query($stat,$add_id);
                    $get_query="INSERT INTO `credenz` VALUES ('','".$password_hash."','".$username."','".$name."','".$phone."')";
                    if($query_run=mysqli_query($stat,$get_query) ){
                        header('Location: register_success.php');
                    }
                    else {
                        echo "We are unable to procees your request further. Please try again later !";
                    }
        }
        else {
        echo "All fields are required !";
    }
    }
}
else if(get_status()) {
    echo 'already logged in';
}
?>