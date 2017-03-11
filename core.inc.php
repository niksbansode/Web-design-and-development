<?php
session_start(); //session will be start if user is logged in or try to login
ob_start(); //this will make new buffer to get the input

$server =$_SERVER['SCRIPT_NAME'];
@$ref_url=$_SERVER['HTTP_REFERER'];

//this function will check if any user is logged in or not
function get_status(){
    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
        return true;
    }
    else
        return false;  
}

//this function is used to get respective field from database like firstname, lastname whichever we want to display by 
function getinfo($field){
    $get_query="SELECT `$field` FROM `credenz` WHERE `id`='".$_SESSION['user_id']."'";
    require 'connect.inc.php';
    if($query_run=mysqli_query($stat,$get_query)){        
        if($query_result=mysqli_resulta($query_run,0,$field)){
            return $query_result;
        }
    }
}
//it is try to get the field from perticular row
function mysqli_resulta($res, $row, $f) {
    $res->data_seek($row);
    $datarow = $res->fetch_array();
    return $datarow[$f];
}
?>