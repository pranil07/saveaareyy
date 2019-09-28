<?php
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$conn = new mysqli ('localhost','root','','final');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
   $stmt = $conn->prepare("insert into finaltble
   (username,password,email)
   values(?,?,?)");
    $stmt->bind_param("sss",$username,$password,$email);
    $stmt->execute();
    echo "Registration Successfull Thanks For Your Support To Save Aarey Forest";
    $stmt->close();
    $conn->close();
}

?>
