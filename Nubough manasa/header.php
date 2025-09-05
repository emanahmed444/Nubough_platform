<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منصة نبوغ - منصة تعليمية</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        .typewriter-text {
            font-family: 'Cairo', sans-serif;
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
            width: 100%;
            margin: 20px 0;
            direction: rtl;
            color: #fff;
        }

        .typewriter-text .cursor {
            display: inline-block;
            width: 2px;
            height: 1em;
            background-color: #fff;
            margin-right: 2px;
            animation: blink 0.8s infinite;
            vertical-align: middle;
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }
        
        /* Styles for the theme toggle button */
        .theme-toggle {
            position: relative;
            width: 60px; /* تم زيادة العرض */
            height: 30px; /* تم زيادة الارتفاع */
            background-color: #f1f1f1;
            border-radius: 30px; /* تم تعديل نصف القطر ليتناسب مع الارتفاع الجديد */
            padding: 3px; /* تم زيادة المساحة الداخلية */
            cursor: pointer;
            border: none;
            outline: none;
            transition: background-color 0.3s;
        }

        .theme-toggle::before {
            content: '';
            position: absolute;
            width: 24px; /* تم زيادة حجم الدائرة */
            height: 24px; /* تم زيادة حجم الدائرة */
            background-color: #fff;
            border-radius: 50%;
            top: 3px;
            left: 3px;
            transition: transform 0.3s, background-color 0.3s;
        }

        body.dark-mode .theme-toggle {
            background-color: #333;
        }

        body.dark-mode .theme-toggle::before {
            transform: translateX(30px); /* تم تعديل المسافة ليتناسب مع العرض الجديد */
            background-color: #555;
        }

        .theme-toggle .fa-moon,
        .theme-toggle .fa-sun {
            position: absolute;
            font-size: 16px; /* تم زيادة حجم الأيقونات */
            color: #fff;
            line-height: 30px; /* تم تعديل المسافة ليتناسب مع الارتفاع الجديد */
        }

        .theme-toggle .fa-moon {
            right: 8px;
            top: 0;
            color: #f1f1f1; /* لون القمر في الوضع الفاتح */
        }

        .theme-toggle .fa-sun {
            left: 8px;
            top: 0;
            color: #f1c40f; /* لون الشمس في الوضع الداكن */
        }
    </style>
</head>
<body class="light-mode">
    <header class="header">
        <div class="header-container">
            <div class="header-left">
                <button class="menu-toggle" id="menuToggle">
                    <i class="fas fa-bars"></i>
                </button>
                <h1 class="logo">منصة نبوغ</h1>
            </div>
            <div class="header-right">
                <button class="theme-toggle" id="themeToggle">
                    <i class="fas fa-sun"></i>
                    <i class="fas fa-moon"></i>
                </button>
            </div>
        </div>

        <div class="mobile-menu" id="mobileMenu">
            <div class="menu-buttons">
                <button class="menu-btn new-account">
                    <i class="fas fa-user-plus"></i>
                    أنشئ حسابك
                </button>
                <button class="menu-btn login">
                    <i class="fas fa-sign-in-alt"></i>
                    تسجيل الدخول
                </button>
            </div>
        </div>
    </header>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Theme toggle button logic
            const themeToggleBtn = document.getElementById("themeToggle");
            const body = document.body;
            
            themeToggleBtn.addEventListener("click", () => {
                body.classList.toggle("dark-mode");
                const isDarkMode = body.classList.contains("dark-mode");
                // يمكنك إضافة منطق إضافي لتغيير الألوان بناءً على الوضع الجديد هنا إذا لزم الأمر
            });

            // Mobile menu toggle logic
            const menuToggleBtn = document.getElementById("menuToggle");
            const mobileMenu = document.getElementById("mobileMenu");

            menuToggleBtn.addEventListener("click", () => {
                mobileMenu.classList.toggle("active");
            });
        });
       

    </script>