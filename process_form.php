<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Student Event</title>
</head>

<body>
    <header>
        <div>
            <h1>Student Event</h1>
        </div>
    </header>

<?php
$conn = mysqli_connect("localhost", "root", "", "project"); 

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $Student_ID = $_POST[`Student_ID`];
    $First_Name = $_POST[`First Name`];
    $Last_Name = $_POST[`Last Name`];
    $Email = $_POST[`E-mail`];
    
    
    // to insert data
    $sql = "INSERT INTO project (`Student_ID`, `First Name`, `Last Name`, `E-mail`) VALUES ('$Student_ID', '$First_Name', '$Last_Name', '$Email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Invalid request";
}

// close the connection
$conn->close();
?>

<footer>
       Gaby S@lviano 2023
    </footer>
</body>

</html>