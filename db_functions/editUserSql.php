<?php
include('../db_functions/fcns.php');

$conn = connect();
$userid = $_POST['userid'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$type = $_POST['type'];

echo "HELLO";
echo $userid;
echo "<br>";
// Code to update all personal information and then set session varibales to newly entered inputs.
$sql = "UPDATE user SET firstname = ?, lastname = ?, location = ?, type = ? WHERE user_id = ?";

$stmt = $conn-> prepare($sql);
$stmt->bind_param('ssssi',$firstname, $lastname, $location, $type, $userid);
$stmt->execute();


?>
