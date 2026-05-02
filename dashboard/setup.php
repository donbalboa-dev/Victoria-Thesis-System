<?php
include '../config.php';  // ← ROOT

mysqli_query($conn, "
    CREATE TABLE IF NOT EXISTS admins (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL
    )
");

mysqli_query($conn, "INSERT IGNORE INTO admins (username, password) VALUES ('admin', 'admin123')");

$result = mysqli_query($conn, "SELECT * FROM admins");
echo "✅ Admins ready:<br>";
while($row = mysqli_fetch_assoc($result)) {
    echo "✓ " . $row['username'] . " / " . $row['password'] . "<br>";
}
echo "<br><a href='login-form.php'>🔐 Test Login Now</a>";
?>