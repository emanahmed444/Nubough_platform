
<?php
session_start();

// لو المستخدم مش عامل تسجيل دخول
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!---->

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فصولي - منصة نبوغ</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Cairo', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .header {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .page-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1e293b;
        }
        
        .back-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }
        
        .back-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        }
        
        .courses-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .course-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            gap: 30px;
            transition: all 0.3s ease;
        }
        
        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }
        
        .course-image {
            width: 150px;
            height: 150px;
            border-radius: 15px;
            object-fit: cover;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        
        .course-info {
            flex: 1;
        }
        
        .course-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 10px;
        }
        
        .course-description {
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        
        .course-meta {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
            color: #64748b;
            font-size: 0.9rem;
        }
        
        .course-price {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 15px;
        }
        
        .course-actions {
            display: flex;
            gap: 15px;
        }
        
        .btn {
            padding: 12px 24px;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            border: none;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        }
        
        .btn-secondary {
            background: #f1f5f9;
            color: #1e293b;
            border: 2px solid #e2e8f0;
        }
        
        .btn-secondary:hover {
            background: #e2e8f0;
        }
        
        .status-badge {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
        }
        
        .status-enrolled {
            background: #dcfce7;
            color: #166534;
        }
        
        .status-pending {
            background: #fef3c7;
            color: #92400e;
        }
        
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .empty-state h2 {
            font-size: 2rem;
            color: #64748b;
            margin-bottom: 20px;
        }
        
        .empty-state p {
            color: #94a3b8;
            font-size: 1.1rem;
            margin-bottom: 30px;
        }
        
        .empty-state .btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 30px;
            font-size: 1.1rem;
        }
        
        /* رسالة التنبيه */
        .alert-message {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px 30px;
            border-radius: 15px;
            font-size: 1.1rem;
            font-weight: 600;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            display: none;
            animation: slideIn 0.3s ease;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translate(-50%, -60%);
            }
            to {
                opacity: 1;
                transform: translate(-50%, -50%);
            }
        }
        
        .alert-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
            display: none;
        }
        
        @media (max-width: 768px) {
            .course-card {
                flex-direction: column;
                text-align: center;
            }
            
            .course-image {
                width: 120px;
                height: 120px;
            }
            
            .course-actions {
                flex-direction: column;
            }
            
            .page-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 class="page-title">فصولي</h1>
        <button class="back-btn" onclick="window.location.href='index.php'">
            <i class="fas fa-arrow-right"></i>
            العودة للرئيسية
        </button>
    </div>
    
    <div class="courses-container" id="coursesContainer">
        <!-- سيتم ملء هذا القسم ديناميكياً -->
    </div>
    
    <!-- رسالة التنبيه -->
    <div class="alert-overlay" id="alertOverlay"></div>
    <div class="alert-message" id="alertMessage">
        سيتم توجيهك لصفحة المحفظة لإتمام عملية الشراء
    </div>
    
    <script>
        // بيانات الكورسات
        const coursesData = {
            'أساسيات اللغة الإيطالية': {
                image: 'images/italian1.jpg',
                description: 'أساسيات اللغة الإيطالية بطريقة سهلة ومبسطة، تشمل التحدث والاستماع، ومناسبة للمبتدئين تماماً.',
                hours: '56 ساعة',
                students: '30 طالب',
                price: '2000 ج.م'
            },
            'الحساب الذهني والتركيز': {
                image: 'images/math4.jpg',
                description: 'برنامج مميز لتنمية مهارات الحساب الذهني والتركيز، من خلال تقنيات السوروبان المناسبة للابتدائي والإعدادي.',
                hours: '120 ساعة',
                students: '+90 طالب',
                price: '900 ج.م'
            },
            'تعليم القراءة والكتابة بالإنجليزية': {
                image: 'images/WhatsApp Image 2025-08-22 at 11.15.20_90ebe6e2.jpg',
                description: 'طريقة ممتعة وتفاعلية لتعليم الأطفال القراءة والكتابة باللغة الإنجليزية باستخدام الأصوات، مناسبة للمراحل المبكرة.',
                hours: '+80 ساعة',
                students: '+50 طالب',
                price: '1200 ج.م'
            }
        };
        
        // دالة عرض الكورسات المنضم إليها
        function displayJoinedCourses() {
            const container = document.getElementById('coursesContainer');
            const joinedCourses = JSON.parse(localStorage.getItem('joinedCourses') || '[]');
            
            if (joinedCourses.length === 0) {
                // عرض رسالة عدم وجود كورسات
                container.innerHTML = `
                    <div class="empty-state">
                        <h2>لا يوجد كورسات انضممت اليها!</h2>
                        <p>انضم إلى الكورسات المتاحة للبدء في رحلة التعلم</p>
                        <button class="btn" onclick="window.location.href='index.php'">
                            <i class="fas fa-arrow-left"></i>
                            العودة للكورسات
                        </button>
                    </div>
                `;
                return;
            }
            
            // عرض الكورسات المنضم إليها
            let coursesHTML = '';
            joinedCourses.forEach(courseName => {
                const courseData = coursesData[courseName];
                if (courseData) {
                    coursesHTML += `
                        <div class="course-card">
                            <img src="${courseData.image}" alt="${courseName}" class="course-image">
                            <div class="course-info">
                                <h3 class="course-title">${courseName}</h3>
                                <p class="course-description">${courseData.description}</p>
                                <div class="course-meta">
                                    <span>⏱ ${courseData.hours}</span>
                                    <span>👥 ${courseData.students}</span>
                                    <span class="status-badge status-enrolled">منضم</span>
                                </div>
                                <div class="course-price">${courseData.price}</div>
                                <div class="course-actions">
                                    <button class="btn btn-primary" onclick="buyCourse('${courseName}', '${courseData.price}')">
                                        <i class="fas fa-shopping-cart"></i>
                                        شراء الكورس
                                    </button>
                                    <button class="btn btn-secondary" onclick="continueLearning('${courseName}')">
                                        <i class="fas fa-play"></i>
                                        استكمال التعلم
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                }
            });
            
            container.innerHTML = coursesHTML;
        }
        
        function buyCourse(courseName, price) {
            const overlay = document.getElementById('alertOverlay');
            const message = document.getElementById('alertMessage');
            
            message.textContent = `سيتم توجيهك لصفحة المحفظة لإتمام عملية شراء ${courseName}`;
            
            overlay.style.display = 'block';
            message.style.display = 'block';
            
            // الانتقال لصفحة المحفظة بعد 2 ثانية
            setTimeout(() => {
                overlay.style.display = 'none';
                message.style.display = 'none';
                window.location.href = 'wallet.php';
            }, 2000);
        }

        function continueLearning(courseName) {
            const overlay = document.getElementById('alertOverlay');
            const message = document.getElementById('alertMessage');

            message.textContent = 'يرجى شراء الكورس أولاً';
            message.style.background = 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)';
            message.style.color = 'white';

            overlay.style.display = 'block';
            message.style.display = 'block';

            // إخفاء الرسالة بعد 3 ثواني
            setTimeout(() => {
                overlay.style.display = 'none';
                message.style.display = 'none';
            }, 3000);
        }

        // إخفاء الرسالة عند النقر على الخلفية
        document.getElementById('alertOverlay').addEventListener('click', function() {
            this.style.display = 'none';
            document.getElementById('alertMessage').style.display = 'none';
        });
        
        // عرض الكورسات عند تحميل الصفحة
        document.addEventListener('DOMContentLoaded', function() {
            displayJoinedCourses();
        });
    </script>
</body>
</html>
