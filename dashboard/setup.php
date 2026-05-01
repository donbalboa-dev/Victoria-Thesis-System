<?php
include '../config.php';
?>
<!DOCTYPE html>
<html>
<head><title>Admin Setup</title></head>
<body>
<h2>👨‍💼 Admin Setup</h2>

<?php
// Create admins table ONLY
$sql = "
    CREATE TABLE IF NOT EXISTS admins (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )
";

if(mysqli_query($conn, $sql)) {
    echo "✅ Admins table created<br>";
} else {
    echo "❌ Error: " . mysqli_error($conn) . "<br>";
}

// Add default admin
if(mysqli_query($conn, "INSERT IGNORE INTO admins (username, password) VALUES ('admin', 'admin123')")) {
    echo "✅ Default admin: <strong>username: admin | password: admin123</strong><br>";
}

echo "<hr>";
echo "<a href='login-form.php'><strong>🔐 Test Login Now</strong></a>";
echo "<br><small>Run once, then DELETE this file!</small>";
?>