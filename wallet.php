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
    <title>محفظتي - منصة نبوغ</title>
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
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .wallet-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            text-align: center;
        }
        
        .wallet-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
            margin-bottom: 30px;
        }
        
        .wallet-illustration {
            flex: 1;
            max-width: 300px;
        }
        
        .wallet-illustration img {
            width: 100%;
            height: auto;
            border-radius: 15px;
        }
        
        .wallet-info {
            flex: 1;
            text-align: right;
        }
        
        .wallet-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 15px;
        }
        
        .wallet-description {
            font-size: 1.1rem;
            color: #64748b;
            line-height: 1.6;
        }
        
        .wallet-actions {
            background: white;
            border-radius: 15px;
            padding: 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .charge-wallet-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }
        
        .charge-wallet-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        }
        
        .wallet-balance {
            font-size: 1.2rem;
            color: #64748b;
            font-weight: 600;
        }
        
        .back-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.9);
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .back-btn:hover {
            transform: scale(1.1);
        }
        
        .back-btn i {
            color: #1e293b;
            font-size: 1.2rem;
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
            .wallet-content {
                flex-direction: column;
                text-align: center;
            }
            
            .wallet-actions {
                flex-direction: column;
                gap: 20px;
            }
            
            .wallet-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <button class="back-btn" onclick="window.location.href='index.php'">
        <i class="fas fa-arrow-right"></i>
    </button>
    
    <div class="wallet-container">
        <div class="wallet-content">
            <div class="wallet-illustration">
                <img src="images/نجوي-removebg-preview.png" alt="محفظة">
            </div>
            <div class="wallet-info">
                <h1 class="wallet-title">محفظتي</h1>
                <p class="wallet-description">يمكنك متابعة كل عمليات الإيداع أو السحب من خلال محفظتك.</p>
            </div>
        </div>
        
        <div class="wallet-actions">
            <button class="charge-wallet-btn" onclick="showPaymentMessage()">
                <i class="fas fa-wallet"></i>
                شحن المحفظة
            </button>
            <div class="wallet-balance">
                رصيدك: 0 ج.م
            </div>
        </div>
    </div>
    
    <!-- رسالة التنبيه -->
    <div class="alert-overlay" id="alertOverlay"></div>
    <div class="alert-message" id="alertMessage">
        سيتم توافر وسائل الدفع قريباً
    </div>
    
    <script>
        function showPaymentMessage() {
            const overlay = document.getElementById('alertOverlay');
            const message = document.getElementById('alertMessage');
            
            overlay.style.display = 'block';
            message.style.display = 'block';
            
            // إخفاء الرسالة بعد 3 ثوان
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
    </script>
</body>
</html>
