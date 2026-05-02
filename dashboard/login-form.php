<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your head -->
    <link rel="stylesheet" href="../asset/css/login.css">
</head>
<body class="login-page">
    <div class="login-container">
        <div class="login-logo">
            <img src="../asset/images/victoria-logo.png" alt="Silvanas Express Logo">
        </div>
        <h1 class="login-title">Silvanas Express</h1>
        <p class="login-subtitle">Staff Management Portal</p>
        

        
        <form method="POST" action="login.php">
            <div class="form-group">
                <input type="text" class="form-input" name="username" placeholder="Username (admin)" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-input" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="login" class="login-button">🔐 Access Dashboard</button>
        </form>
        <a href="../costumer-pages/index.php" class="back-link">← Back to Website</a>
    </div>

    <!-- Popups -->
    <div class="popup-overlay" id="errorPopup">
        <div class="popup-card popup-error">
            <div class="popup-icon">❌</div>
            <h2 class="popup-title">Login Failed!</h2>
            <p class="popup-message">Invalid username or password.<br></p>
            <button class="popup-btn" onclick="closePopup('error')">Try Again</button>
        </div>
    </div>

    <div class="popup-overlay" id="successPopup">
        <div class="popup-card popup-success">
            <div class="popup-icon">✅</div>
            <h2 class="popup-title">Login Successful!</h2>
            <p class="popup-message">Welcome to Silvanas Express Dashboard</p>
            <button class="popup-btn" onclick="goToDashboard()">Enter Dashboard</button>
        </div>
    </div>

    <script src="../asset/js/login-form.js"></script>
</body>
</html>