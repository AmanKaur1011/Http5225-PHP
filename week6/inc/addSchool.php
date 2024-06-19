<?php
include('functions.php');
// print_r($_POST);
// Array ( [schoolName] => test [schoolLevel] => test [schoolPhone] => 345678 [schoolEmail] => sdsf@gmail.com )
if(isset($_POST['addSchool'])){
$schoolName= $_POST['schoolName'];
$schoolLevel= $_POST['schoolLevel'];
$email= $_POST['email'];
$phone= $_POST['phone'];
//connection string
include('../reusable/connect.php');

$query= "INSERT INTO schools (`School Name`, `School Level`, `Phone`, `Email`) 
VALUES( '".mysqli_real_escape_string($connect, $schoolName)."',
        '".mysqli_real_escape_string($connect, $schoolLevel)."',
        '".mysqli_real_escape_string($connect, $phone)."',
        '".mysqli_real_escape_string($connect, $email)."')";

$school= mysqli_query($connect, $query);
if($school){
    set_message('School was added Succesfully' ,'success');
    header("Location: ../index.php");
}else{
    echo "Failed: " . mysqli_error($connect);

}}else{
    echo "you should be not here!";
}
?>
<!-- if your page is purely a phn page you don't need to close te php tag -->