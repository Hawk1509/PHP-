<html>
<head>
    <title>Student Marks Entry</title>
</head>
<body>
    <h2>Enter Student Marks</h2>
    <form  method="post">
        <label>Roll No:</label>
        <input type="text" name="rollno" required><br><br>

        <label>Name:</label>
        <input type="text" name="sname" required><br><br>

        <label>Maths Marks:</label>
        <input type="number" name="m_marks" required><br><br>

        <label>Science Marks:</label>
        <input type="number" name="s_marks" required><br><br>

        <label>English Marks:</label>
        <input type="number" name="e_marks" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
// connect with database
$conn = mysqli_connect("localhost:3307", "root", "", "school");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// get form values
$rollno  = $_POST['rollno'];
$sname   = $_POST['sname'];
$m_marks = $_POST['m_marks'];
$s_marks = $_POST['s_marks'];
$e_marks = $_POST['e_marks'];

// insert into table
$sql = "INSERT INTO student (rollno, name, maths, science, english)
        VALUES ('$rollno', '$sname', '$m_marks', '$s_marks', '$e_marks')";

if (mysqli_query($conn, $sql)) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>