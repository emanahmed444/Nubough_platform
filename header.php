<?php
// header.php

// نبدأ السيشن لو مش شغالة
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// تحديد روابط الصفحات حسب حالة تسجيل الدخول
$myCoursesUrl = (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) ? 'my-courses.php' : 'login.php';
$walletUrl    = (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) ? 'wallet.php'    : 'login.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مكانك نبوغ - منصة تعليمية</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        /* الهيدر */
        header.header {
            background-color: #ffffff;
            color: #000000;
            position: fixed;   
            top: 0;            
            left: 0;
            width: 100%;       
            z-index: 1000;     
            font-family: 'Cairo', sans-serif;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        body.dark-mode header.header {
            background-color: #000000 !important;
            color: #ffffff !important;
        }
        .header-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1px 2px;
        }
        .header-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .logo {
            font-size: 1.5rem;
            font-weight: 800;
        }
        .menu-toggle {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: inherit;
        }
        .header-right .theme-toggle {
            background: none;
            border: none;
            font-size: 1.3rem;
            cursor: pointer;
            color: inherit;
        }

        /* المينيو للموبايل */
        .mobile-menu {
            display: none;
            background: #f9f9f9;
            padding: 16px;
            border-top: 1px solid #ddd;
        }
        .mobile-menu.active {
            display: block;
        }
        .menu-buttons {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .menu-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            background: #eee;
            transition: background 0.3s;
            text-decoration: none;
            color: inherit;
        }
        .menu-btn:hover {
            background: #ddd;
        }

        /* الوضع الليلي */
        body.dark-mode {
            background-color: #121212;
            color: #ffffff;
        }
        body.dark-mode .mobile-menu {
            background: #222;
            border-color: #444;
        }
        body.dark-mode .menu-btn {
            background: #333;
            color: #fff;
        }
        body.dark-mode .menu-btn:hover {
            background: #444;
        }
    </style>
</head>
<body class="light-mode">
    <!-- Header -->
    <header class="header">
        <div class="header-container">
            <div class="header-left">
                <button class="menu-toggle" id="menuToggle">
                    <i class="fas fa-bars"></i>
                </button>
                <h1 class="logo">مكانك نبوغ</h1>
            </div>
            <div class="header-right">
                <button class="theme-toggle" id="themeToggle">
                    <i class="fas fa-sun"></i>
                    <i class="fas fa-moon"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div class="mobile-menu" id="mobileMenu">
            <div class="menu-buttons">
                <a class="menu-btn new-account" href="register.php">
                    <i class="fas fa-user-plus"></i>
                    أنشئ حسابك
                </a>
                <a class="menu-btn login" href="login.php">
                    <i class="fas fa-sign-in-alt"></i>
                    تسجيل الدخول
                </a>
                <a class="menu-btn wallet" href="<?php echo $walletUrl; ?>">
                    <i class="fas fa-wallet"></i>
                    محفظتي
                </a>
                <a class="menu-btn my-courses" href="<?php echo $myCoursesUrl; ?>">
                    <i class="fas fa-graduation-cap"></i>
                    فصولي
                </a>
                <a class="menu-btn my-home" href="index.php">
                    <i class="fas fa-home" style="color: pink;"></i>
                    الرئيسية
                </a>
                <a class="menu-btn logout" href="logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    تسجيل الخروج
                </a>
            </div>
        </div>
    </header>

    <!-- JS -->
    <script>
        // فتح/قفل المينيو للموبايل
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
        });

        // تبديل الثيم Light / Dark
        const themeToggle = document.getElementById('themeToggle');
        const body = document.body;
        themeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            body.classList.toggle('light-mode');
        });
    </script>
</body>
</html>
