<?php
$servername="localhost";
$username="root";
$password="";
$database_name="database123";

$conn=new mysqli($servername,$username,$password,$database_name);
//echo $conn;
//now check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $Email = $_POST['Email'];
    $Date = $_POST['Date'];
    $Session = $_POST['Session'];
    $Time = $_POST['Time'];
    $Type = $_POST['Type '];
    $Quantity = $_POST['Quantity'];
    $Food = $_POST['Food'];
    $Parking = $_POST['Parking'];
    $Space = $_POST['Space'];

    $sql_query = "INSERT INTO entry_details VALUES('".$name."','".$phone."','".$Email."','".$Date."','".$Session."','".$Time."','".$Type."','".$Quantity."','".$Food."','".$Parking."','".$Space."')";

    print($sql_query);
    exit();
    if(mysqli_query($conn, $sql_query))
    {
        echo "New Details Entry inserted successfully !";
    }
    else
    {
        echo "Error: " . $sql ."" .mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>