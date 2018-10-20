<?php
$Name = $_POST['Name'];
$Age = $_POST['Age'];
$Gender = $_POST['Gender'];
$Address = $_POST['Address'];
$Phone_no = $_POST['Phone_no'];
$Trade = $_POST['Trade'];

if ( !empty($Name) || !empty($Age) || !empty($Gender) || !empty($Address) || !empty($Phone_no) || !empty($Trade) ) {
	$host = "localhost";
	$dbname = "labour";
    $dbUsername ="root";
    $password ="";

	$conn = new mysqli($host, $dbUsername, $password, $dbname);

	if (!$conn) {
		die('Connect Error'.mysqli_connect_error());
} else {
    $INSERT = "INSERT INTO register (Name , Age, Gender, Address, Phone_no, Trade) VALUES ('$Name', '$Age', '$Gender', '$Address', '$Phone_no', '$Trade')";

    mysqli_query($conn,$INSERT);

    echo "succesful".$INSERT;

}}else {
	 echo "All field are required";
	 die();
}
?>