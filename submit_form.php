<?php
// Database connection
$host = "localhost";
$user = "root"; 
$password = ""; 
$dbname = "school_db";

$data=mysqli_connect($host, $user, $password, $dbname);
if($data==false)
{
    die("connection error");
}
if(isset($_POST['apply'])){
    $data_name=$_POST['name'];
    $data_age=$_POST['age'];
    $data_class=$_POST['class'];
    $data_address=$_POST['address'];
    $data_parent_name=$_POST['parent_name'];

// SQL query to insert form data into the table
$sql = "INSERT INTO students (name, age, class, address, parent_name)
VALUES ('$data_name', '$data_age', '$data_class', '$data_address', '$data_parent_name')";
$result=mysqli_query($data,$sql);
if($result){
    echo "apply failed";
}
else{
    echo "apply failed";
}

}

