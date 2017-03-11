<?php
require_once 'connect.inc.php';
require_once 'core.inc.php';
if(isset($_SESSION['user_id'])){
	header('Location: default.php');
}
else
{
	if(isset($_POST['username']) && isset($_POST['password'])){
	    $username=$_POST['username'];
	    $password=$_POST['password'];
	    $password_hash=md5($password);
	    if(!empty($username) && !empty($password)){
	        $query="SELECT `id` FROM `login` WHERE `username`='$username' AND `password`='$password_hash'";
	        if($query_run = mysqli_query($stat,$query)){
	            $query_num_rows = mysqli_num_rows($query_run);
	            if($query_num_rows == 0){
	                echo 'You have entered wrong username or password !';
	            }
	            else if($query_num_rows == 1){
	                function mysqli_result($res, $row, $field) {
	                    $res->data_seek($row); 
	                    $datarow = $res->fetch_array(); 
	                    return $datarow[$field]; 
	                }
	                $user_id= mysqli_result($query_run, 0,'id');
	                $_SESSION['user_id'] = $user_id;
	                header('Location: default.php');
	            }
	        }
	        else
	        {
	            echo 'You have entered wrong username or password !';
	        }
	    }else {
	        echo 'You must have to enter username and password';
	    }
	}
}
?>