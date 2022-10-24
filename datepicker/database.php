<?php
$con = mysqli_connect('localhost', 'root', '','dates');

//run a simple condition to check your connection
if (!$con)
{
    die("You DB connection has been failed!: " . mysqli_connect_error());
}
$connection = "You have successfully connected to the mysql database";
// echo $connection;
$result = mysqli_query($con, "SELECT * FROM dates");
$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
}
echo json_encode($data);
exit();
?>

