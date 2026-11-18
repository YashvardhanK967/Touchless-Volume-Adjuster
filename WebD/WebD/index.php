<?php

$conn = mysqli_connect("localhost", "root", "", "college");

$name = $_POST['name'];
$roll = $_POST['roll'];
$course = $_POST['course'];

$sql = "INSERT INTO students(name, roll, course)
        VALUES('$name', '$roll', '$course')";

mysqli_query($conn, $sql);

echo "Record Inserted Successfully";

mysqli_close($conn);

?>

<?php
// 1. You still need your connection variables first (you can include your db.php here)
$server = "localhost";
$username = "root";
$password = "";
$dbname = "my_evaluation_db";

$conn = mysqli_connect($server, $username, $password, $dbname);

// 2. Write your SELECT command (asking the database for the info)
$sql = "SELECT name, email FROM users";

// 3. Run the command and save the result into a variable
$result = mysqli_query($conn, $sql);

// 4. Check if the database actually returned any rows
if (mysqli_num_rows($result) > 0) {
    
    // 5. THE LOOP: Fetch each row one by one as an associative array
    while ($row = mysqli_fetch_assoc($result)) {
        // We unpack the data using the exact column names from your database table
        echo "<div class='user-card'>";
        echo "<h3>Name: " . $row['name'] . "</h3>";
        echo "<p>Email: " . $row['email'] . "</p>";
        echo "</div>";
    }
    
} else {
    // What to show if the database table is completely empty
    echo "<p>No users found in the database.</p>";
}
?>