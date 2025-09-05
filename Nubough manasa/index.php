<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <!-- Google Font -->
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
                <h1 class="logo">منصة نبوغ</h1>
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

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay">
            <div class="hero-content">
                <!-- 🟡 التأثير الجديد مع المؤشر -->
                <h1 class="typewriter-text">
                    <span id="typed-text"></span><span class="cursor"></span>
                </h1>
                <p class="hero-description">انضم ليا ويلا نبدأ ونشوف رحلتنا بتقول اي 🚀</p>
                <button class="hero-btn">اكتشف الكورسات</button>
            </div>
        </div>
    </section>

    <!-- Welcome Section -->
    <section class="welcome-section">
        <div class="welcome-content">
            <h2 class="welcome-title">المناهج الدراسية</h2>
            <div class="education-levels">
                <div class="level-item">
                    <div class="level-icon primary">
                        <i class="fas fa-child"></i>
                    </div>
                    <span class="level-label">الابتدائية</span>
                </div>
                <div class="level-item">
                    <div class="level-icon preparatory">
                        <i class="fas fa-flask"></i>
                    </div>
                    <span class="level-label">الإعدادية</span>
                </div>
                <div class="level-item">
                    <div class="level-icon secondary">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <span class="level-label">الثانوية</span>
                </div>
            </div>
        </div>
    </section>

    <script src="js/script.js"></script>

    <!-- ✨ سكريبت الكتابة -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const textElement = document.getElementById("typed-text");
            const phrases = [
                "ذاكر وافهم صح واحنا معاك",
                "هنشرح كل درس بأسلوب مبتكر ولذيذ",
                "هنقدملك دعم نفسي علمي وكمان فني:]"
            ];

            let currentPhrase = 0;
            let currentChar = 0;
            let isDeleting = false;
            let delay = 100;

            function type() {
                const fullText = phrases[currentPhrase];
                if (isDeleting) {
                    currentChar--;
                } else {
                    currentChar++;
                }

                textElement.textContent = fullText.substring(0, currentChar);

                if (!isDeleting && currentChar === fullText.length) {
                    delay = 1500;
                    isDeleting = true;
                } else if (isDeleting && currentChar === 0) {
                    isDeleting = false;
                    currentPhrase = (currentPhrase + 1) % phrases.length;
                    delay = 500;
                } else {
                    delay = isDeleting ? 50 : 100;
                }

                setTimeout(type, delay);
            }

            type();
        });
    </script>
</body>
</html>
