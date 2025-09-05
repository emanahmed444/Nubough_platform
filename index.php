<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مكانك نبوغ - منصة تعليمية</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



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

        /* New Hero Section (purple with clouds) */
        .hero-ng {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            padding: 55px 0 120px 0; /* leave space for clouds */
            color: #fff;
            overflow: hidden;
        }
        .hero-ng .hero-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 16px;
        }
        .hero-topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 16px;
            font-family: 'Cairo', sans-serif;
            font-weight: 700;
            letter-spacing: .3px;
        }
        .hero-links {
            display: flex;
            gap: 20px;
        }
        .hero-link { color: #fff; opacity: 0.95; text-decoration: none; }
        .hero-link:hover { opacity: 1; text-decoration: underline; }
        .hero-content-ng {
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 24px;
            align-items: center;
        }
        .hero-title {
            font-size: 2.25rem;
            font-weight: 800;
            margin-bottom: 8px;
        }
        .hero-subtitle {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 16px;
            opacity: 0.98;
        }
        .hero-desc {
            color: #f8fafc;
            line-height: 2;
            font-size: 1rem;
            margin-bottom: 22px;
            max-width: 620px;
        }
        .hero-actions { display: flex; gap: 12px; }
        .btn-subscribe {
            background: #fff;
            color: #111827;
            border: 2px solid #fff;
            padding: 12px 24px;
            border-radius: 999px;
            font-weight: 700;
            cursor: pointer;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }
        .btn-subscribe:hover {
            background: transparent;
            color: #fff;
            border-color: rgba(255,255,255,0.85);
        }
        .btn-login {
            background: rgba(255,255,255,0.85);
            color: #111827;
            border: 2px solid rgba(255,255,255,0.85);
            padding: 12px 24px;
            border-radius: 999px;
            font-weight: 700;
            cursor: pointer;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }
        .btn-login:hover {
            background: rgba(255,255,255,0.95);
            transform: translateY(-2px);
        }
        .hero-figure {
            display: flex; align-items: center; justify-content: center;
        }
        .hero-figure img {
            max-width: 100%; height: auto; object-fit: contain;
            filter: drop-shadow(0 18px 40px rgba(0,0,0,.25));
        }
        /* clouds strip */
        .clouds-strip {
            position: absolute; left: 0; right: 0; bottom: 0;
            height: 120px;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 200" preserveAspectRatio="none"><path d="M0,160 C120,140 240,120 360,140 C480,160 600,200 720,170 C840,140 960,80 1080,100 C1140,110 1200,130 1200,130 L1200,200 L0,200 Z" fill="%23ffffff"/></svg>');
            background-repeat: repeat-x;
            background-size: 1200px 120px;
            animation: clouds-move 12s ease-in-out infinite alternate;
        }
        @keyframes clouds-move { from { background-position-x: 0; } to { background-position-x: -600px; } }

        /* Education Platform Section */
        .education-platform-section {
            padding: 6rem 2rem;
            background-color: #f8fafc;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .platform-container {
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
        }

        .platform-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 4rem;
        }

        .platform-text {
            flex: 1;
            max-width: 600px;
        }

        .platform-title {
            font-family: 'Cairo', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 2rem;
            line-height: 1.3;
        }

        .platform-description {
            font-family: 'Cairo', sans-serif;
            font-size: 1.1rem;
            color: #475569;
            line-height: 1.8;
            margin-bottom: 1.5rem;
            font-weight: 400;
        }

        .platform-image {
            flex: 1;
            max-width: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .education-cartoon {
            max-width: 100%;
            height: auto;
            max-height: 500px;
            object-fit: contain;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .education-cartoon:hover {
            transform: scale(1.05);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        /* Responsive Design for Platform Section */
        @media (max-width: 768px) {
            .education-platform-section {
                padding: 4rem 1rem;
            }

            .platform-content {
                flex-direction: column;
                gap: 2rem;
                text-align: center;
            }

            .platform-title {
                font-size: 2rem;
            }

            .platform-description {
                font-size: 1rem;
            }

            .platform-image {
                max-width: 100%;
            }

            .education-cartoon {
                max-height: 300px;
            }
        }

        @media (max-width: 480px) {
            .platform-title {
                font-size: 1.8rem;
            }

            .platform-description {
                font-size: 0.95rem;
            }

            .education-cartoon {
                max-height: 250px;
            }
        }

      /* Learning Experience Section */
.learning-experience-section {
    padding: 3rem 2rem;   /* قللت الـ padding من 6rem لـ 3rem */
    background-color: #ffffff;
    min-height: 100vh;
    margin-top: 0;       /* لغيت الـ margin-top */
}

        .experience-container {
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
        }

        .experience-main-title {
            font-family: 'Cairo', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            color: #1e293b;
            text-align: center;
            margin-bottom: 4rem;
            line-height: 1.3;
        }

        .feature-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 4rem;
            margin-bottom: 6rem;
        }

        .feature-item.reverse {
            flex-direction: row-reverse;
        }

        .feature-graphic {
            flex: 1;
            max-width: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .feature-text {
            flex: 1;
            max-width: 500px;
        }

        .feature-title {
            font-family: 'Cairo', sans-serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 1.5rem;
            line-height: 1.3;
        }

        .feature-description {
            font-family: 'Cairo', sans-serif;
            font-size: 1.1rem;
            color: #475569;
            line-height: 1.8;
            font-weight: 400;
        }

        /* Brain Image */
        .brain-image-container {
            width: 200px;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .brain-image {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .brain-image:hover {
            transform: scale(1.05);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        /* Teal Blob with Compass */
        .teal-blob {
            width: 200px;
            height: 200px;
            background: linear-gradient(45deg, #14b8a6, #5eead4);
            border-radius: 40% 60% 30% 70% / 70% 30% 70% 30%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 20px 40px rgba(20, 184, 166, 0.3);
        }

        .compass-icon {
            font-size: 3rem;
            color: white;
            z-index: 2;
        }

        .background-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .shape-1 {
            width: 30px;
            height: 30px;
            top: 20%;
            left: 15%;
        }

        .shape-2 {
            width: 20px;
            height: 20px;
            bottom: 25%;
            right: 20%;
        }

        .shape-3 {
            width: 25px;
            height: 25px;
            top: 60%;
            left: 10%;
        }

        /* Responsive Design for Learning Experience */
        @media (max-width: 768px) {
            .learning-experience-section {
                padding: 4rem 1rem;
            }

            .experience-main-title {
                font-size: 2rem;
                margin-bottom: 3rem;
            }

            .feature-item {
                flex-direction: column;
                gap: 2rem;
                margin-bottom: 4rem;
                text-align: center;
            }

            .feature-item.reverse {
                flex-direction: column;
            }

            .feature-title {
                font-size: 1.5rem;
            }

            .feature-description {
                font-size: 1rem;
            }

            .brain-image-container,
            .teal-blob {
                width: 150px;
                height: 150px;
            }

            .brain-image {
                max-width: 100%;
                max-height: 100%;
            }

            .compass-icon {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 480px) {
            .experience-main-title {
                font-size: 1.8rem;
            }

            .feature-title {
                font-size: 1.3rem;
            }

            .feature-description {
                font-size: 0.95rem;
            }

            .brain-image-container,
            .teal-blob {
                width: 120px;
                height: 120px;
            }

            .brain-image {
                max-width: 100%;
                max-height: 100%;
            }

            .compass-icon {
                font-size: 2rem;
            }
        }
       /**/
       /**/
       /* */
/* ===== قسم الكورسات ===== */
.courses-section {
    padding: 50px 20px;
    text-align: center;
    background-color: #fff;
    margin-bottom: 5px; /* قللتها من 100px إلى 30px */
}

.section-title {
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 40px;
    color: #1e293b;
}

.courses-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 25px;
    max-width: 1200px;
    margin: 0 auto;
}

.course-card {
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    text-align: right;
    transition: 0.3s ease;
}

.course-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 18px rgba(0, 0, 0, 0.15);
}

.course-image {
    width: 100%;       /* تخلي الصورة تاخد كل عرض الكارد */
    height: auto;      /* الطول يتظبط تلقائي عشان الصورة ما تتمططش */
    object-fit: contain; /* تخلي الصورة كلها تبان جوه الكارد من غير ما تتقص */
    display: block;     /* عشان مايبقاش فيه مسافة بيضا تحت الصورة */
    margin: 0 auto;     /* تخلي الصورة في النص أفقياً */
}




.course-content {
    padding: 20px;
}

.course-price {
    font-size: 20px;
    font-weight: bold;
    color: #1e293b;
    margin: 0;
}

.stars {
    color: gold;
    font-size: 18px;
    margin: 5px 0 15px 0;
}

.course-description {
    font-size: 15px;
    color: #475569;
    line-height: 1.6;
    margin-bottom: 15px;
}

.course-info {
    font-size: 14px;
    color: #475569;
    display: flex;
    justify-content: space-between;
    margin-bottom: 15px;
}

.course-buttons {
    display: flex;
    gap: 10px;
}

.btn {
    flex: 1;
    padding: 10px;
    border-radius: 8px;
    border: none;
    font-size: 15px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

.btn.blue {
    background: #1e40af;
    color: #fff;
}

.btn.blue:hover {
    background: #1d4ed8;
}

.btn.gray {
    background: #f1f5f9;
    color: #1e293b;
}

.btn.gray:hover {
    background: #e2e8f0;
}
/**/
/* */
.courses-section h2 {
    font-size: 3rem;              /* حجم كبير */
    font-weight: 800;             /* تخينة جدًا */
    color: #2c3e50;               /* لون غامق أنيق */
    text-transform: uppercase;    /* تتحول لحروف كبيرة لو حابب */
    letter-spacing: 2px;          /* مسافات بين الحروف */
    margin-bottom: 50px;          /* مسافة تحت العنوان عشان المربعات */
    position: relative;
    display: inline-block;
    padding-bottom: 15px;
}

.courses-section h2::after {
    content: "";
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: 0;
    width: 100px;                /* طول الخط */
    height: 5px;                 /* سمك الخط */
    background: linear-gradient(to right, #3498db, #9b59b6); 
    border-radius: 5px;
}
.courses-section h2:hover {
    color: #8e44ad; /* بنفسجي أغمق عند الهوفر */
    transition: color 0.3s ease;  /* انتقال ناعم */
}
.course-card {
    position: relative; /* عشان نتحكم في ::before */
    overflow: hidden;   /* عشان الخلفية ما تخرجش برا الكارد */
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    transition: 0.3s ease;
}

/* الطبقة اللي هتظهر بالهوفر */
.course-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, rgba(155, 89, 182, 0.2), rgba(155, 89, 182, 0.05));
    opacity: 0;
    transition: opacity 0.4s ease;
    z-index: 0; /* تخليها تحت النص والصورة */
}

/* لما اعمل hover */
.course-card:hover::before {
    opacity: 1;
}

/* نخلي المحتوى فوق الطبقة */
.course-content,
.course-image {
    position: relative;
    z-index: 1;
}
/* الخط */
.custom-footer, .custom-footer * {
  font-family: 'Cairo', 'Noto Kufi Arabic', Arial, sans-serif;
  direction: rtl;
}

/* خلفية الفوتر مع النجوم */
.custom-footer {
  position: relative;
  background: #9370DB;
  background-image: url('data:image/svg+xml;utf8,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="10" cy="10" r="1.2" fill="white" fill-opacity="0.5"/><circle cx="60" cy="30" r="0.8" fill="white" fill-opacity="0.4"/><circle cx="80" cy="80" r="1.1" fill="white" fill-opacity="0.3"/><circle cx="30" cy="70" r="0.7" fill="white" fill-opacity="0.4"/><circle cx="90" cy="20" r="1.3" fill="white" fill-opacity="0.5"/><circle cx="50" cy="50" r="0.9" fill="white" fill-opacity="0.3"/></svg>');
  background-repeat: repeat;
  background-size: 180px 180px;
  color: #fff;
  padding: 48px 0 0 0;
  margin-top: 0;
  overflow: hidden;
  z-index: 1;
}

/* المخبار */
.footer-flask {
  position: absolute;
  bottom: 0;
  width: 120px;
  opacity: 0.92;
  z-index: 2;
  pointer-events: none;
}
.footer-flask-left {
  left: 0;
  transform: rotate(-18deg);
}
.footer-flask-right {
  right: 0;
  transform: rotate(18deg);
}

/* محتوى الفوتر */
.footer-content {
  position: relative;
  z-index: 3;
  max-width: 900px;
  margin: 0 auto;
  text-align: center;
  padding-bottom: 32px;
}

/* الخطوط الفاصلة */
.footer-divider {
  width: 60%;
  height: 4px;
  background: #8B0000;
  border-radius: 2px;
  margin: 18px auto 18px auto;
  opacity: 0.7;
}

/* الأيقونات الاجتماعية */
.footer-social {
  display: flex;
  justify-content: center;
  gap: 32px;
  margin-bottom: 8px;
}
.footer-icon {
  display: inline-block;
  border-radius: 50%;
  box-shadow: 0 2px 12px rgba(0,0,0,0.10);
  transition: transform 0.2s;
  background: transparent;
}
.footer-icon:hover {
  transform: scale(1.08) rotate(-3deg);
}

/* النصوص والقلوب */
.footer-text {
  color: #fff;
  font-size: 1.25rem;
  margin: 18px 0 8px 0;
  display: block; /* عشان النص ياخد سطر لوحده */
  align-items: center;
  justify-content: center;
  gap: 12px;
  flex-wrap: wrap;
}
.footer-heart {
  color: #8b0000;
  font-size: 1.5rem;
  margin: 0 6px;
}

/* المطورين */
.footer-dev {
  margin: 10px 0 0 0;
  font-size: 1.1rem;
  font-family: "Cairo", Arial, sans-serif;
  display: block; /* عشان النص ياخد سطر لوحده */
  justify-content: center;
  align-items: center;
  gap: 8px;
  flex-wrap: wrap;
}

/* إعدادات البلاك مود للفوتر */
body.dark-mode .welcome-title {
    color: black !important;
}

body.dark-mode .level-label {
    color: black !important;
}

body.dark-mode .custom-footer {
  border-top: none !important;
  box-shadow: none !important;
}

body.dark-mode .custom-footer::before,
body.dark-mode .custom-footer::after {
  display: none !important;
}
  justify-content: center;
  align-items: center;
  gap: 8px;
  flex-wrap: wrap;
}
.footer-dev-omar {
  color: #ADFF2F;
  font-weight: bold;
  font-size: 1.1rem;
  letter-spacing: 1px;
  background: none;
  border-radius: 0;
  padding: 0;
  margin: 0 2px;
}
.footer-dev-emad {
  color: #87CEEB;
  font-weight: bold;
  font-size: 1.1rem;
  letter-spacing: 1px;
  background: none;
  border-radius: 0;
  padding: 0;
  margin: 0 2px;
}

/* Powered by */
.footer-powered {
  color: #fff;
  font-size: 1.05rem;
  margin-top: 10px;
  opacity: 0.92;
  letter-spacing: 0.5px;
}

/* Responsive */
@media (max-width: 900px) {
  .footer-content { max-width: 98vw; }
  .footer-flask { width: 80px; }
}
@media (max-width: 600px) {
  .footer-content { padding: 0 8px; }
  .footer-flask { display: none; }
  .footer-divider { width: 90%; }
}

.elementary-label {
    color: black !important;
}
/**/
/* */
/**/
/* */
/* Dark Mode specific styles */
body.dark-mode {
    background-color: #121212; /* خلفية سوداء للجسم كله */
    color: #ffffff; /* لون النص الأساسي أبيض */
}
body.dark-mode .education-platform-section {
    background-color: #1a1a1a !important; /* خلفية سوداء للجزء الأول */
}

body.dark-mode .education-platform-section .platform-title,
body.dark-mode .education-platform-section .platform-description {
    color: #ffffff !important; /* النص يصبح أبيض */
}

body.dark-mode .learning-experience-section {
    background-color: #1a1a1a !important; /* خلفية سوداء للجزء الثاني */
}

body.dark-mode .learning-experience-section .experience-main-title,
body.dark-mode .learning-experience-section .feature-title,
body.dark-mode .learning-experience-section .feature-description {
    color: #ffffff !important; /* النص يصبح أبيض */
}

body.dark-mode .courses-section {
    background-color: #1a1a1a; /* خلفية سوداء للجزء الثالث */
}

body.dark-mode .courses-section .section-title {
    color: #ffffff; /* لون "الكورسات" يصبح أبيض */
    transition: color 0.3s ease; /* إضافة تأثير انتقالي سلس */
}

body.dark-mode .courses-section .section-title:hover {
    color: #9b59b6; /* اللون البنفسجي عند الهوفر */
}
/**/
/* */
/**/
/* */
/* في الوضع العادي */
header.header {
  background-color: #ffffff; /* أبيض */
  color: #000000;
  position: relative;
  z-index: 10; /* يخلي الهيدر فوق الـ hero */
 
}

/* في البلاك مود */
body.dark-mode header.header {
  background-color: #000000 !important; /* أسود صافي */
  color: #ffffff !important;
}

/**/
/* */
/**/
/* */
/* الهيدر يفضل ثابت فوق */
header.header {
  position: fixed;   /* يخلي الهيدر ثابت */
  top: 0;            /* يلزقه في أعلى الصفحة */
  left: 0;
  width: 100%;       /* يغطي عرض الشاشة كله */
  z-index: 1000;     /* فوق باقي العناصر */
}

/* علشان ما يغطيش أول جزء (Hero Section) */
.hero-ng {
  padding-top: 150px; /* ارتفاع مساوي أو أكبر شوية من ارتفاع الهيدر */
}
/**/
/* */
/**/
/* */
/**/
/* */
.btn.blue {
    background-color: #8e44ad; /* اللون البنفسجي */
    color: #fff;              /* النص أبيض */
    border: 2px solid #8e44ad;
    padding: 10px 20px;
    border-radius: 8px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn.blue:hover {
    background-color: #fff;
    color: #8e44ad;
    border-color: #8e44ad;
}


/**/ 
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
                <button class="menu-btn new-account">
                    <i class="fas fa-user-plus"></i>
                    أنشئ حسابك
                </button>
                <button class="menu-btn login">
                    <i class="fas fa-sign-in-alt"></i>
                    تسجيل الدخول
                </button>
                <button class="menu-btn wallet" onclick="window.location.href='wallet.php'">
                    <i class="fas fa-wallet"></i>
                    محفظتي
                </button>
                <button class="menu-btn my-courses" onclick="window.location.href='my-courses.php'">
                    <i class="fas fa-graduation-cap"></i>
                    فصولي
                </button>
            </div>
        </div>
    </header>

    <!-- New Hero Section -->
    <section class="hero-ng">
        <div class="hero-container">
           
            <div class="hero-content-ng">
                <div>
                    <div class="hero-title">نبوغ كلاسيرز</div>
                    <div class="hero-subtitle">لكل طالب، في كل بيت.</div>
                    <p class="hero-desc">احضر حصصك الأونلاين مع أفضل المدرسين؛ بمحتوى تعليمي عالي الجودة من إعداد خبراء مناهج دوليين. ابدأ رحلتك في التعلّم أونلاين مع نبوغ كلاسيرز.</p>
                    <div class="hero-actions">
                        <button class="btn-subscribe" onclick="window.location.href='wallet.php'">تسجيل الاشتراك</button>
                        <button class="btn-login" onclick="window.location.href='login.php'">تسجيل الدخول</button>
                    </div>
                </div>
                <div class="hero-figure">
                    <img src="images/نجوي-removebg-preview.png" alt="طالبة مع عناصر تعليمية">
                </div>
            </div>
        </div>
        <div class="clouds-strip" aria-hidden="true"></div>
    </section>

    <!-- Welcome Section -->
    <section class="welcome-section" style="background-color: white !important;">
        <div class="welcome-content" style="background-color: white !important;">   
            <h2 class="welcome-title">المناهج الدراسية</h2>  
            <div class="education-levels">
                <div class="level-item" onclick="navigateToElementary()">
                    <div class="level-icon primary" id="elementary-icon">
                        <i class="fas fa-child"></i>
                    </div>
                    <span class="level-label elementary-label">الابتدائية</span>
                </div>
                <div class="level-item" onclick="navigateToPreparatory()">
                    <div class="level-icon preparatory" id="preparatory-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <span class="level-label">الإعدادية</span>
                </div>
                <div class="level-item" onclick="navigateToSecondary()">
                    <div class="level-icon secondary" id="secondary-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <span class="level-label">الثانوية</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Platform Section -->
    <section class="education-platform-section">
        <div class="platform-container">
            <div class="platform-content">
                <div class="platform-text" data-aos="fade-left" data-aos-delay="200">
                    <h2 class="platform-title">منصتك للتميز والتعلم المستمر</h2>
                    <p class="platform-description">
                        طور مهاراتك واكتشف شغفك من خلال دورات تعليمية موجهة لكل المراحل الدراسية.
                    </p>
                    <p class="platform-description">
                        نوفر محتوى متخصص، تفاعلي، ومجاني بالكامل، بإشراف نخبة من المدرسين.
                    </p>
                    <p class="platform-description">
                        معنا، رحلتك نحو التفوق تبدأ اليوم!
                    </p>
                </div>
                <div class="platform-image" data-aos="fade-right" data-aos-delay="400">
                    <img src="images/pngtree-online-education-cartoon-with-student-and-technology-icons-png-image_16711994-removebg-preview.png" alt="التعليم الإلكتروني" class="education-cartoon">
                </div>
            </div>
        </div>
    </section>
<!-- Learning Experience Section -->
<section class="learning-experience-section">
    <div class="experience-container">
        <h2 class="experience-main-title" data-aos="fade-down">تجربة التعلم مع نبوغ</h2>
        
        <!-- First Feature -->
        <div class="feature-item">
            <img src="images/brain-removebg-preview.png" alt="الدماغ" 
                 data-aos="fade-left" data-aos-delay="200"
                 style="width:300px; height:auto; border-radius:20px; box-shadow:0 20px 40px rgba(0,0,0,0.1); transition:all 0.3s ease;">
            
            <div class="feature-text" data-aos="fade-right" data-aos-delay="300">
                <h3 class="feature-title">تجربة تعليمية ممتعة وفريدة</h3>
                <p class="feature-description">
                    نختار أفضل الأكاديميين والمعلمين لنضع بين يديك محتوى ثرياً وعالي الجودة يجذب اهتمامك ويوسع مداركك.
                </p>
            </div>
        </div>

        <!-- Second Feature -->
        <div class="feature-item reverse">
            <div class="feature-text" data-aos="fade-left" data-aos-delay="200">
                <h3 class="feature-title">تعليم في قلب الحدث</h3>
                <p class="feature-description">
                    منصتنا تقدم تجربة تعلم تفاعلية تدمج بين التقنية الحديثة وأفضل أساليب التعليم.
                </p>
            </div>
            
            <img src="images/education-removebg-preview.png" alt="التعليم" 
                 data-aos="fade-right" data-aos-delay="300"
                 style="width:300px; height:auto; border-radius:20px; box-shadow:0 20px 40px rgba(0,0,0,0.1); transition:all 0.3s ease;">
        </div>

        <!-- Third Feature (الجديد) -->
        <div class="feature-item">
            <img src="images/graduation-removebg-preview.png" alt="مستقبل مشرق" 
                 data-aos="fade-left" data-aos-delay="200"
                 style="width:300px; height:auto; border-radius:20px; box-shadow:0 20px 40px rgba(0,0,0,0.1); transition:all 0.3s ease;">
            
            <div class="feature-text" data-aos="fade-right" data-aos-delay="300">
                <h3 class="feature-title">نحو مستقبل مشرق</h3>
                <p class="feature-description">
                    نؤمن بأن كل متعلم يستحق فرصة للوصول إلى تعليم يلهمه ويقوده نحو النجاح.
                </p>
            </div>
        </div>

    </div>
</section>

    <!-- Courses Section -->
    <section class="courses-section">
        <h2 class="section-title">الكورسات</h2>
        <div class="courses-container">

            <!-- الكورس الأول -->
            <div class="course-card">
                <img src="images/italian1.jpg" alt="Italian Course" class="course-image">
                <div class="course-content">
                    <p class="course-price">2000 ج.م</p>
                    <div class="stars">★★★★★</div>
                    <p class="course-description">
                        أساسيات اللغة الإيطالية بطريقة سهلة ومبسطة، تشمل التحدث والاستماع، ومناسبة للمبتدئين تماماً.
                    </p>
                    <div class="course-info">
                        <span>⏱ 56 ساعة</span>
                        <span>👥 30 طالب</span>
                    </div>
                    <div class="course-buttons">
                        <button class="btn blue" onclick="joinCourse('أساسيات اللغة الإيطالية')">انضم الآن</button>
                        <a class="btn gray" href="italian-course.php">اقرأ أكثر</a>
                    </div>
                </div>
            </div>

            <!-- الكورس الثاني -->
            <div class="course-card">
                <img src="images/math4.jpg" alt="Math Course" class="course-image">
                <div class="course-content">
                    <p class="course-price">900 ج.م</p>
                    <div class="stars">★★★★★</div>
                    <p class="course-description">
                        برنامج مميز لتنمية مهارات الحساب الذهني والتركيز، من خلال تقنيات السوروبان المناسبة للابتدائي والإعدادي.
                    </p>
                    <div class="course-info">
                        <span>⏱ 120 ساعة</span>
                        <span>👥 +90 طالب</span>
                    </div>
                    <div class="course-buttons">
                        <button class="btn blue" onclick="joinCourse('الحساب الذهني والتركيز')">انضم الآن</button>
                        <a class="btn gray" href="mental-math-course.php">اقرأ أكثر</a>
                    </div>
                </div>
            </div>

            <!-- الكورس الثالث -->
            <div class="course-card">
                <img src="images/WhatsApp Image 2025-08-22 at 11.15.20_90ebe6e2.jpg" alt="Phonics Course" class="course-image">
                <div class="course-content">
                    <p class="course-price">1200 ج.م</p>
                    <div class="stars">★★★★★</div>
                    <p class="course-description">
                        طريقة ممتعة وتفاعلية لتعليم الأطفال القراءة والكتابة باللغة الإنجليزية باستخدام الأصوات، مناسبة للمراحل المبكرة.
                    </p>
                    <div class="course-info">
                        <span>⏱ +80 ساعة</span>
                        <span>👥 +50 طالب</span>
                    </div>
                    <div class="course-buttons">
                        <button class="btn blue" onclick="joinCourse('تعليم القراءة والكتابة بالإنجليزية')">انضم الآن</button>
                        <a class="btn gray" href="phonics-course.php">اقرأ أكثر</a>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <script src="js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>

        // دالة الانتقال إلى صفحة الصفوف الابتدائية مع تأثير الدوران
        function navigateToElementary() {
            const icon = document.getElementById('elementary-icon');
            const levelItem = icon.closest('.level-item');
            
            // إضافة تأثير الدوران والتحجيم
            icon.style.transition = 'all 1s ease-in-out';
            levelItem.style.transition = 'all 1s ease-in-out';
            
            icon.style.transform = 'rotate(360deg) scale(1.2)';
            levelItem.style.transform = 'scale(1.1)';
            
            // إضافة تأثير الوهج
            levelItem.style.boxShadow = '0 0 30px rgba(239, 68, 68, 0.6)';
            
            // الانتقال بعد ثانية واحدة
            setTimeout(() => {
                window.location.href = 'elementary.php';
            }, 1000);
        }

        // دالة الانتقال إلى صفحة الصفوف الإعدادية مع تأثير الدوران
        function navigateToPreparatory() {
            const icon = document.getElementById('preparatory-icon');
            const levelItem = icon.closest('.level-item');
            
            // إضافة تأثير الدوران والتحجيم
            icon.style.transition = 'all 1s ease-in-out';
            levelItem.style.transition = 'all 1s ease-in-out';
            
            icon.style.transform = 'rotate(360deg) scale(1.2)';
            levelItem.style.transform = 'scale(1.1)';
            
            // إضافة تأثير الوهج باللون البنفسجي
            levelItem.style.boxShadow = '0 0 30px rgba(139, 92, 246, 0.6)';
            
            // الانتقال بعد ثانية واحدة
            setTimeout(() => {
                window.location.href = 'preparatory.php';
            }, 1000);
        }

        // دالة الانتقال إلى صفحة الصفوف الثانوية مع تأثير الدوران
        function navigateToSecondary() {
            const icon = document.getElementById('secondary-icon');
            const levelItem = icon.closest('.level-item');
            
            // إضافة تأثير الدوران والتحجيم
            icon.style.transition = 'all 1s ease-in-out';
            levelItem.style.transition = 'all 1s ease-in-out';
            
            icon.style.transform = 'rotate(360deg) scale(1.2)';
            levelItem.style.transform = 'scale(1.1)';
            
            // إضافة تأثير الوهج باللون الأزرق
            levelItem.style.boxShadow = '0 0 30px rgba(59, 130, 246, 0.6)';
            
            // الانتقال بعد ثانية واحدة
            setTimeout(() => {
                window.location.href = 'secondary.php';
            }, 1000);
        }

        // دالة إعادة تعيين جميع الأيقونات إلى حالتها الطبيعية
        function resetAllIcons() {
            const icons = ['elementary-icon', 'preparatory-icon', 'secondary-icon'];
            
            icons.forEach(iconId => {
                const icon = document.getElementById(iconId);
                if (icon) {
                    const levelItem = icon.closest('.level-item');
                    
                    // إعادة تعيين الأيقونة
                    icon.style.transform = 'scale(1)';
                    icon.style.transition = 'all 0.3s ease';
                    
                    // إعادة تعيين العنصر الأب
                    levelItem.style.transform = 'scale(1)';
                    levelItem.style.transition = 'all 0.3s ease';
                    levelItem.style.boxShadow = 'none';
                }
            });
        }

        // إعادة تعيين الأيقونات عند تحميل الصفحة
        document.addEventListener('DOMContentLoaded', function() {
            resetAllIcons();
        });

        // إعادة تعيين الأيقونات عند العودة للصفحة
        window.addEventListener('pageshow', function(event) {
            resetAllIcons();
        });

        // إعادة تعيين الأيقونات عند التركيز على الصفحة
        window.addEventListener('focus', function() {
            resetAllIcons();
        });

        // دالة انضمام الكورسات
        function joinCourse(courseName) {
            // حفظ الكورس في localStorage
            let joinedCourses = JSON.parse(localStorage.getItem('joinedCourses') || '[]');
            
            // التحقق من عدم وجود الكورس مسبقاً
            if (!joinedCourses.includes(courseName)) {
                joinedCourses.push(courseName);
                localStorage.setItem('joinedCourses', JSON.stringify(joinedCourses));
            }
            // إظهار رسالة "تم الانضمام"
            const alertOverlay = document.createElement('div');
            alertOverlay.style.position = 'fixed';
            alertOverlay.style.top = '0';
            alertOverlay.style.left = '0';
            alertOverlay.style.width = '100%';
            alertOverlay.style.height = '100%';
            alertOverlay.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
            alertOverlay.style.zIndex = '9999';
            document.body.appendChild(alertOverlay);

            const alertMessage = document.createElement('div');
            alertMessage.textContent = 'تم الانضمام بنجاح!';
            alertMessage.style.position = 'fixed';
            alertMessage.style.top = '50%';
            alertMessage.style.left = '50%';
            alertMessage.style.transform = 'translate(-50%, -50%)';
            alertMessage.style.background = 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)';
            alertMessage.style.color = 'white';
            alertMessage.style.padding = '20px 30px';
            alertMessage.style.borderRadius = '15px';
            alertMessage.style.fontSize = '1.1rem';
            alertMessage.style.fontWeight = '600';
            alertMessage.style.boxShadow = '0 15px 40px rgba(0, 0, 0, 0.2)';
            alertMessage.style.zIndex = '10000';
            document.body.appendChild(alertMessage);

            // إخفاء الرسالة بعد 3 ثواني
            setTimeout(() => {
                document.body.removeChild(alertOverlay);
                document.body.removeChild(alertMessage);
                window.location.href = 'my-courses.php';
            }, 1000);
        }

        // Initialize AOS
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            offset: 100,
            delay: 0
        });
    
    </script>
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
            <span style="color:#fff;">&lt; All Copy Rights Reserved @2026 &gt;</span>
            <span style="color:#fff;">  </span>
            <a href="https://www.facebook.com/share/15w8sZHijw/" target="_blank" rel="noopener noreferrer" class="footer-dev-emad" style="background:none;color:#87CEEB;padding:0;text-decoration:none;">Eng Eman Ahmed</a>
            <span style="color:#fff;">&lt; Developed By &gt;</span>
        </div>
    </div>
</footer>

</body>
</html>
