<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تفاصيل كورس اللغة الإيطالية</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Cairo', sans-serif; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; }
        .container { max-width: 1100px; margin: 0 auto; padding: 24px; }
        .card { background: rgba(255,255,255,0.95); border-radius: 16px; padding: 28px; box-shadow: 0 12px 30px rgba(0,0,0,0.15); }
        .title { text-align: center; color: #1f2937; font-size: 1.8rem; font-weight: 800; margin-bottom: 18px; }
        .subtitle { color: #374151; font-size: 1.1rem; line-height: 1.9; text-align: center; margin-bottom: 24px; }
        .section { margin-top: 18px; }
        .section h3 { font-size: 1.2rem; color: #111827; margin-bottom: 10px; }
        .list { background: #f9fafb; border: 1px solid #e5e7eb; border-radius: 12px; padding: 16px; }
        .list-item { display: flex; gap: 10px; align-items: flex-start; color: #374151; padding: 8px 0; border-bottom: 1px dashed #e5e7eb; }
        .list-item:last-child { border-bottom: none; }
        .dot { width: 10px; height: 10px; border-radius: 50%; background: #8b5cf6; margin-top: 8px; flex: 0 0 10px; }
        .meta { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 12px; margin-top: 10px; }
        .meta-box { background: #f3f4f6; border: 1px solid #e5e7eb; border-radius: 12px; padding: 14px; color: #111827; }
        .meta-box strong { display: block; color: #4b5563; font-size: 0.95rem; margin-bottom: 6px; }
        .back { position: fixed; top: 20px; right: 20px; background: rgba(255,255,255,0.92); border: none; width: 54px; height: 54px; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; box-shadow: 0 6px 20px rgba(0,0,0,0.15); }
        .back i { color: #111827; font-size: 1.2rem; }
        @media (max-width: 600px) { .title { font-size: 1.4rem; } .subtitle { font-size: 1rem; } }
    </style>
    <script>
        function goBack(){ history.back(); }
    </script>
</head>
<body>
    <button class="back" onclick="goBack()" aria-label="رجوع"><i class="fas fa-arrow-right"></i></button>
    <div class="container">
        <div class="card">
            <h1 class="title">كورس اللغة الإيطالية للمبتدئين</h1>
            <p class="subtitle">أساسيات اللغة الإيطالية بطريقة سهلة ومبسطة، تشمل التحدث والاستماع، ومناسبة للمبتدئين تماماً.</p>

            <div class="section">
                <h3>محتويات الكورس (Modules)</h3>
                <div class="list">
                    <div class="list-item"><span class="dot"></span><span>الأبجدية الإيطالية ونطقها الصحيح.</span></div>
                    <div class="list-item"><span class="dot"></span><span>عبارات ومحادثات يومية (السلام – التعارف – في المطعم – في المطار).</span></div>
                    <div class="list-item"><span class="dot"></span><span>الأرقام والأيام والأشهر.</span></div>
                    <div class="list-item"><span class="dot"></span><span>القواعد الأساسية (الأفعال، الأزمنة، الجمل البسيطة).</span></div>
                    <div class="list-item"><span class="dot"></span><span>تدريبات استماع مع مقاطع صوتية.</span></div>
                    <div class="list-item"><span class="dot"></span><span>تطبيقات عملية مع مواقف حياتية.</span></div>
                </div>
            </div>

            <div class="section">
                <h3>المدة وعدد الساعات</h3>
                <div class="meta">
                    <div class="meta-box"><strong>المدة الإجمالية</strong>56 ساعة تدريبية (محاضرات فيديو + تدريبات)</div>
                </div>
            </div>

            <div class="section">
                <h3>المستهدفين</h3>
                <div class="list">
                    <div class="list-item"><span class="dot"></span><span>المبتدئين تماماً.</span></div>
                    <div class="list-item"><span class="dot"></span><span>الطلاب المسافرين للدراسة في إيطاليا.</span></div>
                    <div class="list-item"><span class="dot"></span><span>الأشخاص المهتمين بالسفر والسياحة.</span></div>
                    <div class="list-item"><span class="dot"></span><span>أي شخص عايز يبدأ تعلم لغة جديدة من الصفر.</span></div>
                </div>
            </div>

            <div class="section">
                <h3>مميزات الكورس</h3>
                <div class="list">
                    <div class="list-item"><span class="dot"></span><span>شرح مبسط وسهل الفهم.</span></div>
                    <div class="list-item"><span class="dot"></span><span>تطبيق عملي على المواقف اليومية.</span></div>
                    <div class="list-item"><span class="dot"></span><span>إمكانية مشاهدة الدروس في أي وقت.</span></div>
                    <div class="list-item"><span class="dot"></span><span>شهادة إتمام معتمدة.</span></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


