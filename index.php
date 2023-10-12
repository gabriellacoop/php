<?php
include("process_form.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SUBSCRIBE FOR A STUDENT MEETING</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <header>
        <nav>
            
        </nav>
        <div class="logo">
            <a href="student.png"><img src="student.png" alt="Description"></a>
        </div>
    </header>

    <h2>Add Content</h2>
    <form action="process_form.php" method="POST">
    <label for="Student_ID">Student ID:</label>
    <input type="text" id="Student_ID" name="Student_ID" required><br>
<p></p>
    <label for="First_Name">First Name:</label>
    <input type="text" id="First_Name" name="First_Name" required><br>
    <p></p>
    <label for="Last_Name">Last Name:</label>
    <input type="text" id="Last_Name" name="Last_Name" required><br>
    <p></p>
    <label for="Email">E-mail:</label>
    <input type="text" id="Email" name="Email" required><br>
    <p></p>
    <button type="submit">Submit</button>
</form>

</form>

    </form>

    <footer>
        &copy; 2023 Gaby Database Web
    </footer>
</body>

</html>