<?php
session_start();

if(!isset($_SESSION['admin'])) {
    header("Location: login-form.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silvanas Express - Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../asset/css/dashboard.css">

</head>
<body>
    <div class="dashboard">
        <!-- SIDEBAR -->
        <nav class="sidebar">
            <div class="logo">
                <img src="../asset/images/victoria-logo.png" alt="Silvanas Express" class="sidebar-logo">
            </div>

            <!-- DASHBOARD -->
            <div class="menu-group">
                <a href="#" class="menu-item active">
                    <i class="fas fa-tachometer-alt menu-icon"></i>
                    <span> Dashboard</span>
                </a>
            </div>

            <!-- ORDER MANAGEMENT -->
            <div class="menu-group">
                <div class="menu-title">📋 Order Management</div>
                <a href="#" class="menu-item">
                    <i class="fas fa-clock menu-icon"></i>
                    <span>Pending Orders</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-spinner menu-icon"></i>
                    <span>Ongoing Orders</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-check-circle menu-icon"></i>
                    <span>Completed Orders</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-history menu-icon"></i>
                    <span>Order History</span>
                </a>
            </div>

           <!-- RESERVATION MANAGEMENT -->
            <div class="menu-group">
                <div class="menu-title">🏠 Reservation Management</div>
                <a href="#" class="menu-item">
                    <i class="fas fa-clock menu-icon"></i>
                    <span>Pending Reservations</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-check-circle menu-icon"></i>
                    <span>Confirmed Reservations</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-check-double menu-icon"></i>
                    <span>Completed Reservations</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-calendar-alt menu-icon"></i>
                    <span>Reservation Calendar</span>
                </a>
            </div>

            <!-- REPORTS -->
            <div class="menu-group">
                <div class="menu-title">📊 Reports</div>
                <a href="#" class="menu-item">
                    <i class="fas fa-chart-line menu-icon"></i>
                    <span>Sales Report</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-file-alt menu-icon"></i>
                    <span>Reservation Summary</span>
                </a>
            </div>

            <!-- SETTINGS -->
            <div class="menu-group">
                <div class="menu-title">⚙️ Settings</div>
                <a href="#" class="menu-item">
                    <i class="fas fa-utensils menu-icon"></i>
                    <span>Menu Management</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-map menu-icon"></i>
                    <span>Table Layout</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-sms menu-icon"></i>
                    <span>SMS Settings</span>
                </a>
            </div>

            <!-- LOGOUT -->
            <div class="menu-group">
                <a href="logout.php" class="menu-item">
                    <i class="fas fa-sign-out-alt menu-icon"></i>
                    <span> Logout</span>
                </a>
            </div>
        </nav>

        <!-- HEADER -->
        <header class="header">
            <div class="header-title">Silvanas Express Dashboard</div>
            <div class="header-right">
                <div class="admin-info">
                    <i class="fas fa-user"></i>
                    <span> Admin</span>
                </div>
                <div class="admin-info">
                    
                    <span> 2:30 PM</span>
                </div>
            </div>
        </header>

        <!-- MAIN CONTENT -->
        <main class="main">
            <div class="content">
                <h1>Dashboard</h1>
                <p>Welcome to your Silvanas Express Dashboard!</p>
            </div>
        </main>
    </div>

    <script src="../asset/js/dashboard.js"></script>

</body>
</html>

