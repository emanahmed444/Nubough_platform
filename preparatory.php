<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصفوف الإعدادية - منصة نبوغ</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Cairo', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            direction: rtl;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 100vh;
        }

        .grades-section {
            flex: 1;
            max-width: 500px;
            opacity: 0;
            transform: translateY(20px);
        }

        .page-title {
            color: white;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 40px;
            text-align: center;
        }

        .grade-item {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 20px 25px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
            border: 2px solid transparent;
        }

        .grade-item:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            border-color: #8b5cf6;
            background: rgba(255, 255, 255, 1);
        }

        .grade-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .grade-chevron {
            color: #333;
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }

        .grade-item:hover .grade-chevron {
            transform: translateX(-5px);
        }

        .grade-text {
            font-size: 1.1rem;
            font-weight: 600;
            color: #333;
        }

        .grade-number {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(45deg, #8b5cf6, #a855f7);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 1.3rem;
            box-shadow: 0 4px 15px rgba(139, 92, 246, 0.3);
        }

        .children-section {
            flex: 1;
            max-width: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transform: translateY(20px);
        }

        .children-image {
            max-width: 100%;
            max-height: 80vh;
            height: auto;
            object-fit: contain;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            filter: drop-shadow(0 10px 20px rgba(0, 0, 0, 0.1));
            background: transparent;
        }

        .children-image:hover {
            transform: scale(1.05);
            filter: drop-shadow(0 15px 30px rgba(0, 0, 0, 0.2));
        }

        .back-button {
            position: fixed;
            top: 30px;
            right: 30px;
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .back-button:hover {
            transform: scale(1.1);
            background: white;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .back-button i {
            font-size: 1.5rem;
            color: #333;
        }

        /* Loading Animation */
        .loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        .spinner {
            width: 80px;
            height: 80px;
            border: 8px solid rgba(255, 255, 255, 0.3);
            border-top: 8px solid white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        .loading-text {
            color: white;
            font-size: 1.5rem;
            font-weight: 600;
            margin-top: 20px;
            text-align: center;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                padding: 10px;
            }

            .grades-section,
            .children-section {
                max-width: 100%;
            }

            .page-title {
                font-size: 2rem;
                margin-bottom: 30px;
            }

            .grade-item {
                padding: 15px 20px;
                margin-bottom: 12px;
            }

            .grade-text {
                font-size: 1rem;
            }

            .grade-number {
                width: 45px;
                height: 45px;
                font-size: 1.2rem;
            }

            .back-button {
                top: 20px;
                right: 20px;
                width: 50px;
                height: 50px;
            }

            .back-button i {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 480px) {
            .page-title {
                font-size: 1.8rem;
            }

            .grade-item {
                padding: 12px 15px;
            }

            .grade-text {
                font-size: 0.9rem;
            }

            .grade-number {
                width: 40px;
                height: 40px;
                font-size: 1.1rem;
            }
        }

        /* footer styles copied from index.php */
        .custom-footer, .custom-footer * { font-family: 'Cairo', 'Noto Kufi Arabic', Arial, sans-serif; direction: rtl; }
        .custom-footer { position: relative; background: #9370DB; background-image: url('data:image/svg+xml;utf8,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="10" cy="10" r="1.2" fill="white" fill-opacity="0.5"/><circle cx="60" cy="30" r="0.8" fill="white" fill-opacity="0.4"/><circle cx="80" cy="80" r="1.1" fill="white" fill-opacity="0.3"/><circle cx="30" cy="70" r="0.7" fill="white" fill-opacity="0.4"/><circle cx="90" cy="20" r="1.3" fill="white" fill-opacity="0.5"/><circle cx="50" cy="50" r="0.9" fill="white" fill-opacity="0.3"/></svg>'); background-repeat: repeat; background-size: 180px 180px; color: #fff; padding: 48px 0 0 0; margin-top: 0; overflow: hidden; z-index: 1; }
        .footer-flask { position: absolute; bottom: 0; width: 120px; opacity: 0.92; z-index: 2; pointer-events: none; }
        .footer-flask-left { left: 0; transform: rotate(-18deg); }
        .footer-flask-right { right: 0; transform: rotate(18deg); }
        .footer-content { position: relative; z-index: 3; max-width: 900px; margin: 0 auto; text-align: center; padding-bottom: 32px; }
        .footer-divider { width: 60%; height: 4px; background: #8B0000; border-radius: 2px; margin: 18px auto 18px auto; opacity: 0.7; }
        .footer-social { display: flex; justify-content: center; gap: 32px; margin-bottom: 8px; }
        .footer-icon { display: inline-block; border-radius: 50%; box-shadow: 0 2px 12px rgba(0,0,0,0.10); transition: transform 0.2s; background: transparent; }
        .footer-icon:hover { transform: scale(1.08) rotate(-3deg); }
        .footer-text { color: #fff; font-size: 1.25rem; margin: 18px 0 8px 0; display: flex; align-items: center; justify-content: center; gap: 12px; flex-wrap: wrap; }
        .footer-heart { color: #8B0000; font-size: 1.5rem; margin: 0 6px; }
        .footer-dev { margin: 10px 0 0 0; font-size: 1.1rem; font-family: 'Cairo', Arial, sans-serif; display: flex; justify-content: center; align-items: center; gap: 8px; flex-wrap: wrap; }
        .footer-dev-emad { color: #87CEEB; font-weight: bold; font-size: 1.1rem; letter-spacing: 1px; background: none; border-radius: 0; padding: 0; margin: 0 2px; }
        .footer-powered { color: #fff; font-size: 1.05rem; margin-top: 10px; opacity: 0.92; letter-spacing: 0.5px; }
        @media (max-width: 900px) { .footer-content { max-width: 98vw; } .footer-flask { width: 80px; } }
        @media (max-width: 600px) { .footer-content { padding: 0 8px; } .footer-flask { display: none; } .footer-divider { width: 90%; } }
        
        /* إعدادات البلاك مود للفوتر */
        body.dark-mode .custom-footer {
            border-top: none !important;
            box-shadow: none !important;
        }
        
        body.dark-mode .custom-footer::before,
        body.dark-mode .custom-footer::after {
            display: none !important;
        }
    </style>
</head>
<body>
    <!-- Loading Screen -->
    <div class="loading" id="loading">
        <div class="spinner"></div>
        <div class="loading-text">جاري التحميل...</div>
    </div>

    <!-- Back Button -->
    <button class="back-button" onclick="goBack()">
        <i class="fas fa-arrow-right"></i>
    </button>

    <div class="container">
        <!-- Grades Section -->
        <div class="grades-section">
            <h1 class="page-title" data-aos="fade-down">الصفوف الإعدادية</h1>
            
            <div class="grade-item" data-aos="fade-left" data-aos-delay="100" onclick="selectGrade('الصف الأول الإعدادي')">
                <div class="grade-info">
                    <i class="fas fa-chevron-left grade-chevron"></i>
                    <span class="grade-text">الصف الأول الإعدادي</span>
                </div>
                <div class="grade-number">1</div>
            </div>

            <div class="grade-item" data-aos="fade-left" data-aos-delay="200" onclick="selectGrade('الصف الثاني الإعدادي')">
                <div class="grade-info">
                    <i class="fas fa-chevron-left grade-chevron"></i>
                    <span class="grade-text">الصف الثاني الإعدادي</span>
                </div>
                <div class="grade-number">2</div>
            </div>

            <div class="grade-item" data-aos="fade-left" data-aos-delay="300" onclick="selectGrade('الصف الثالث الإعدادي')">
                <div class="grade-info">
                    <i class="fas fa-chevron-left grade-chevron"></i>
                    <span class="grade-text">الصف الثالث الإعدادي</span>
                </div>
                <div class="grade-number">3</div>
            </div>
        </div>

        <!-- Children Image Section -->
        <div class="children-section">
            <img src="images/ثانوي_جديد3-removebg-preview.png" alt="طلاب المدارس" class="children-image" data-aos="fade-right" data-aos-delay="400">
        </div>
    </div>

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });

        // Show loading screen for 2 seconds, then show content
        window.addEventListener('load', function() {
            setTimeout(function() {
                // Hide loading screen
                document.getElementById('loading').style.display = 'none';
                
                // Show content with fade-in effect
                const gradesSection = document.querySelector('.grades-section');
                const childrenSection = document.querySelector('.children-section');
                
                gradesSection.style.transition = 'all 1s ease-in-out';
                childrenSection.style.transition = 'all 1s ease-in-out';
                
                gradesSection.style.opacity = '1';
                gradesSection.style.transform = 'translateY(0)';
                
                childrenSection.style.opacity = '1';
                childrenSection.style.transform = 'translateY(0)';
            }, 2000);
        });

        // Go back function
        function goBack() {
            window.location.href = 'index.php';
        }

        // Grade selection function
        function selectGrade(grade) {
            const clickedItem = event.currentTarget;
            const gradeNumber = clickedItem.querySelector('.grade-number');
            clickedItem.style.transition = 'all 0.4s ease-in-out';
            clickedItem.style.transform = 'scale(1.03)';
            gradeNumber.style.transform = 'scale(1.08)';

            // show loading then redirect to subjects with level flag
            const loading = document.getElementById('loading');
            loading.style.display = 'flex';
            setTimeout(() => {
                window.location.href = `subjects.php?grade=${encodeURIComponent(grade)}&level=prep`;
            }, 800);
        }

        // (disabled) previous success message behavior removed in favor of redirect with spinner

        // Add CSS animations
        const style = document.createElement('style');
        style.textContent = `
            @keyframes pulse {
                0% { transform: scale(1); }
                50% { transform: scale(1.3); }
                100% { transform: scale(1); }
            }
            
            @keyframes slideIn {
                from {
                    opacity: 0;
                    transform: translate(-50%, -50%) scale(0.5);
                }
                to {
                    opacity: 1;
                    transform: translate(-50%, -50%) scale(1);
                }
            }
            
            @keyframes slideOut {
                from {
                    opacity: 1;
                    transform: translate(-50%, -50%) scale(1);
                }
                to {
                    opacity: 0;
                    transform: translate(-50%, -50%) scale(0.5);
                }
            }
        `;
        document.head.appendChild(style);

        // Add click sound effect (optional)
        function playClickSound() {
            // You can add a subtle click sound here
            console.log('Grade selected!');
        }
    </script>
</body>
</html>
<footer class="custom-footer">
  <img src="images/download.png" alt="download left" class="footer-flask footer-flask-left">
  <img src="images/download.png" alt="download right" class="footer-flask footer-flask-right">
  <div class="footer-content">
    <div class="footer-social">
    <a href="#" onclick="return false;" class="footer-icon facebook">
    <svg width="54" height="54" viewBox="0 0 54 54">
        <circle cx="27" cy="27" r="25" fill="#1877F2" stroke="#ADD8E6" stroke-width="3"/>
        <text x="50%" y="58%" text-anchor="middle" fill="#fff" font-size="32" font-family="Arial" dy=".3em" font-weight="bold">f</text>
    </svg>
</a>

            <a href="#" onclick="return false;" class="footer-icon youtube">
                <svg width="54" height="54" viewBox="0 0 54 54">
                    <circle cx="27" cy="27" r="25" fill="#FF0000" stroke="#ADD8E6" stroke-width="3"/>
                    <polygon points="23,19 39,27 23,35" fill="#fff"/>
                </svg>
            </a>
    </div>
    <div class="footer-divider" style="background:#8B0000;"></div>
    <div class="footer-text">
      <span class="footer-heart">❤️</span>
      <span class="footer-main-text">تم صنع هذه المنصة بهدف تهيئة الطالب لكامل جوانب الثانوية العامة و ما بعدها</span>
      <span class="footer-heart">❤️</span>
    </div>
    <div class="footer-dev">
      <span style="color:#fff;">&lt; Developed By &gt;</span>
      <span style="color:#fff;">  </span>
      <a href="https://www.facebook.com/share/15w8sZHijw/" target="_blank" rel="noopener noreferrer" class="footer-dev-emad" style="background:none;color:#87CEEB;padding:0;text-decoration:none;">Eng Eman Ahmed</a>
      <span style="color:#fff;">&lt; All Copy Rights Reserved @2026 &gt;</span>
    </div>
  </div>
</footer>
</html>
