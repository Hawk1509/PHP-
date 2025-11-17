<!doctype html>
<html>
    <body>
        <form method="POST">
            RollNo:
            <input type="text" name="rno" required ><br><br>
            Fname:
            <input type="text" name="fname" required ><br><br>
            Lname:
            <input type="text" name="lname" required ><br><br>
            Math:
            <input type="number" name="math" required ><br><br>
            English:
            <input type="number" name="eng" required ><br><br>
        </form>
        <?php
            $conn = mysqli_connect("localhost","root","password");
            