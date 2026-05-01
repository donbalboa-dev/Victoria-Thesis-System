<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Login - Silvanas Express</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/login.css">
</head>
<body 
class="login-page">
    <div class="login-container">
        <div class="login-logo">🍽️</div>
        <h1 class="login-title">Silvanas Express</h1>
        <p class="login-subtitle">Staff Management Portal</p>
        
        <?php if(isset($_GET['error'])): ?>
            <div class="error">❌ Invalid username or password!</div>
        <?php endif; ?>
        
        <form method="POST" action="login.php">
            <div class="form-group">
                <input type="text" class="form-input" name="username" 
                       placeholder="Username (admin)" required autocomplete="username">
            </div>
            
            <div class="form-group">
                <input type="password" class="form-input" name="password" 
                       placeholder="Password" required autocomplete="current-password">
            </div>
            
            <button type="submit" name="login" class="login-button">
                🔐 Access Dashboard
            </button>
        </form>
        
        <a href="../costumer-pages/index.php" class="back-link">← Back to Website</a>
    </div>
</body>
</html>