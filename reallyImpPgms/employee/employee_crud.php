<?php
// Connect to MySQL
$conn = mysqli_connect("localhost:3307", "root", "", "");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database if not exists
$dbname = "company";
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if (!mysqli_query($conn, $sql)) {
    die("Error creating database: " . mysqli_error($conn));
}

// Select the database
mysqli_select_db($conn, $dbname);

// Create table if not exists
$sql = "CREATE TABLE IF NOT EXISTS employee (
    emp_id INT(6) PRIMARY KEY,
    emp_name VARCHAR(50) NOT NULL,
    salary DECIMAL(10,2) NOT NULL
)";
if (!mysqli_query($conn, $sql)) {
    die("Error creating table: " . mysqli_error($conn));
}

// Get form data safely
$emp_id   = $_POST['emp_id'] ?? '';
$emp_name = $_POST['emp_name'] ?? '';
$salary   = $_POST['salary'] ?? '';
$action   = $_POST['action'] ?? '';

if ($action == "Insert") {
    $sql = "INSERT INTO employee (emp_id, emp_name, salary) 
            VALUES ('$emp_id', '$emp_name', '$salary')";
    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully<br>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} elseif ($action == "Update") {
    $sql = "UPDATE employee SET emp_name='$emp_name', salary='$salary' 
            WHERE emp_id='$emp_id'";
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully<br>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} elseif ($action == "Delete") {
    $sql = "DELETE FROM employee WHERE emp_id='$emp_id'";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully<br>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} elseif ($action == "Select") {
    $sql = "SELECT * FROM employee";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<h3>Employee Records:</h3>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row['emp_id'] . " | Name: " . $row['emp_name'] . " | Salary: " . $row['salary'] . "<br>";
        }
    } else {
        echo "No records found";
    }
}

// Close connection
mysqli_close($conn);
?>