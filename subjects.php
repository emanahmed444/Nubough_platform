<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مواد الصف</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Cairo', sans-serif; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; }
        .container { max-width: 1200px; margin: 0 auto; padding: 24px; min-height: 100vh; display: flex; align-items: center; justify-content: space-between; gap: 24px; }
        .header { position: static; display: flex; justify-content: flex-end; align-items: center; gap: 12px; color: #fff; margin-bottom: 16px; }
        .grade-title { font-size: 1.8rem; font-weight: 800; }
        .back { background: rgba(255,255,255,0.92); border: none; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; box-shadow: 0 6px 20px rgba(0,0,0,0.15); }
        .back i { color: #111827; font-size: 1.1rem; }

        /* left image like elementary */
        .children-section { flex: 1; max-width: 500px; display: flex; justify-content: center; align-items: center; }
        .children-image { max-width: 100%; max-height: 80vh; height: auto; object-fit: contain; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.2); background: transparent; }

        /* right subjects stacked vertically like grade-item */
        .subjects-section { flex: 1; max-width: 500px; }
        .subject-item { background: rgba(255, 255, 255, 0.95); border-radius: 15px; padding: 20px 25px; margin-bottom: 15px; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1); transition: all 0.3s ease; cursor: pointer; border: 2px solid transparent; }
        .subject-item:hover { transform: translateY(-5px) scale(1.02); box-shadow: 0 15px 35px rgba(0,0,0,0.2); border-color: #ff6b9d; background: rgba(255,255,255,1); cursor: pointer; }
        
        /* رسالة التنبيه */
        .alert-modal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            display: none;
            text-align: center;
            max-width: 400px;
            width: 90%;
        }
        
        .alert-modal h3 {
            color: #1e293b;
            font-size: 1.3rem;
            margin-bottom: 15px;
            font-weight: 700;
        }
        
        .alert-modal p {
            color: #64748b;
            margin-bottom: 25px;
            line-height: 1.6;
        }
        
        .alert-modal .ok-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .alert-modal .ok-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
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
        .subject-info { display: flex; align-items: center; gap: 12px; }
        .subject-name { font-size: 1.05rem; font-weight: 700; color: #333; }
        .icon { width: 40px; height: 40px; border-radius: 10px; display: grid; place-items: center; color: #fff; font-size: 1.1rem; }
        .chevron { color: #333; font-size: 1.1rem; }

        .c-ar { background: linear-gradient(45deg,#ef4444,#f97316); }
        .c-math { background: linear-gradient(45deg,#0ea5e9,#6366f1); }
        .c-en { background: linear-gradient(45deg,#10b981,#34d399); }
        .c-sci { background: linear-gradient(45deg,#22c55e,#16a34a); }
        .c-soc { background: linear-gradient(45deg,#f59e0b,#f43f5e); }
        .c-phil { background: linear-gradient(45deg,#8b5cf6,#a78bfa); }
        .c-hist { background: linear-gradient(45deg,#f97316,#ef4444); }
        .c-geo { background: linear-gradient(45deg,#06b6d4,#0ea5e9); }
        .c-chem { background: linear-gradient(45deg,#a3e635,#65a30d); }
        .c-phys { background: linear-gradient(45deg,#3b82f6,#1d4ed8); }
        .c-bio { background: linear-gradient(45deg,#22c55e,#16a34a); }
        .c-stat { background: linear-gradient(45deg,#a855f7,#6b21a8); }
        .c-tech { background: linear-gradient(45deg,#8b5cf6,#a78bfa); }
        .c-rel { background: linear-gradient(45deg,#14b8a6,#06b6d4); }

        @media (max-width: 768px) {
            .container { flex-direction: column; padding: 16px; }
            .children-section, .subjects-section { max-width: 100%; }
            .grade-title { font-size: 1.4rem; }
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
        /**/
        /* */
        .subjects-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 15px; /* المسافة بين المستطيلات */
}

.subjects-grid .subject-item {
    flex-basis: calc(50% - 8px); /* يجعل كل مستطيل يأخذ نصف المساحة مع ترك مسافة */
    margin-bottom: 0 !important; /* يلغي المسافات السفلية الزائدة */
}
        /**/
        /**/
        /* */
        .subjects-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* يقسم المساحة إلى عمودين متساويين */
    gap: 15px; /* يضيف مسافة بين المستطيلات */
}

/* للتأكد من إزالة الهوامش السفلية الزائدة */
.subjects-grid .subject-item {
    margin-bottom: 0 !important;
}
        /**/
        /* */
        /* */
    </style>
<script>
    function getParam(name){
        const url=new URL(window.location.href);
        return url.searchParams.get(name)||'';
    }

    function goBack(){
        const level = getParam('level');
        if(level === 'prep') {
            window.location.href = 'preparatory.php';
        } else if(level === 'sec') {
            window.location.href = 'secondary.php';
        } else {
            window.location.href = 'elementary.php';
        }
    }

    // Function to create a subject item dynamically
    function createSubjectItem(name, icon='fa-book', cls='c-tech'){
        const item = document.createElement('div');
        item.className = 'subject-item';
        item.innerHTML = `
            <div class="subject-info">
                <div class="icon ${cls}"><i class="fas ${icon}"></i></div>
                <span class="subject-name">${name}</span>
            </div>
            <i class="fas fa-chevron-left chevron"></i>
        `;
        // Attach click event to show the 'unavailable' message
        item.addEventListener('click', showUnavailable);
        return item;
    }

    // Function to show the "Course not available" alert
    function showUnavailable(){
        const overlay = document.createElement('div');
        overlay.style.cssText = `position: fixed; inset: 0; display: grid; place-items: center; background: rgba(0,0,0,0.25); z-index: 9999;`;
        const box = document.createElement('div');
        box.style.cssText = `background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: #fff; padding: 24px 28px; border-radius: 16px; width: min(92vw, 520px); box-shadow: 0 20px 50px rgba(0,0,0,0.3); text-align: center; font-family: 'Cairo', sans-serif;`;
        box.innerHTML = `<div style="font-weight:800; font-size:1.25rem; margin-bottom:10px;">الكورس غير متاح بعد</div><div style="opacity:.95; font-weight:600;">لم يتم العثور على دورات بناءً على الفلاتر المطبقة</div><button style="margin-top:16px; background:#fff; color:#333; border:none; padding:10px 16px; border-radius:10px; cursor:pointer;">حسناً</button>`;
        overlay.appendChild(box);
        document.body.appendChild(overlay);
        box.querySelector('button').onclick = () => document.body.removeChild(overlay);
    }
    
    document.addEventListener('DOMContentLoaded',function(){
        const grade = getParam('grade');
        const level = getParam('level');
        const titleEl = document.getElementById('gradeTitle');
        if(titleEl){
            titleEl.textContent = grade ? `مواد ${grade}` : 'مواد الصف';
        }

        const img = document.getElementById('childrenImg');
        const list = document.getElementById('subjectsList');
        
        const subjectsByGrade = {
            'الصف الأول الثانوي': [
                {name:'اللغة العربية', icon:'fa-book-open', cls:'c-ar'},
                {name:'اللغة الإنجليزية', icon:'fa-language', cls:'c-en'},
                {name:'العلوم المتكاملة', icon:'fa-flask', cls:'c-sci'},
                {name:'الرياضيات', icon:'fa-square-root-alt', cls:'c-math'},
                {name:'التاريخ المصري', icon:'fa-landmark', cls:'c-hist'},
                {name:'الفلسفة والمنطق', icon:'fa-brain', cls:'c-phil'},
            ],
            'الصف الثاني الثانوي': [
                {name:'اللغة العربية', icon:'fa-book-open', cls:'c-ar'},
                {name:'اللغة الإنجليزية', icon:'fa-language', cls:'c-en'},
                {name:'اللغة الفرنسية', icon:'fa-language', cls:'c-en'},
                {name:'الأحياء', icon:'fa-dna', cls:'c-bio'},
                {name:'الكيمياء', icon:'fa-vial', cls:'c-chem'},
                {name:'الفيزياء', icon:'fa-atom', cls:'c-phys'},
                {name:'الرياضيات العامة', icon:'fa-square-root-alt', cls:'c-math'},
                {name:'الجغرافيا', icon:'fa-globe', cls:'c-geo'},
                {name:'علم النفس', icon:'fa-user-group', cls:'c-soc'},
                {name:'التاريخ', icon:'fa-landmark', cls:'c-hist'},
            ],
            'الصف الثالث الثانوي': [
                {name:'اللغة العربية', icon:'fa-book-open', cls:'c-ar'},
                {name:'اللغة الإنجليزية', icon:'fa-language', cls:'c-en'},
                {name:'الأحياء', icon:'fa-dna', cls:'c-bio'},
                {name:'الكيمياء', icon:'fa-vial', cls:'c-chem'},
                {name:'الفيزياء', icon:'fa-atom', cls:'c-phys'},
                {name:'الرياضيات (البحتة والتطبيقية)', icon:'fa-square-root-alt', cls:'c-math'},
                {name:'الإحصاء', icon:'fa-chart-pie', cls:'c-stat'},
                {name:'علم النفس والاجتماع', icon:'fa-brain', cls:'c-soc'},
                {name:'الفلسفة والمنطق', icon:'fa-lightbulb', cls:'c-phil'},
                {name:'التاريخ', icon:'fa-landmark', cls:'c-hist'},
                {name:'الجغرافيا', icon:'fa-globe', cls:'c-geo'},
                {name:'اللغة الفرنسية', icon:'fa-language', cls:'c-en'},
            ],
            'الصف الأول الإعدادي': [
                {name:'اللغة العربية', icon:'fa-book-open', cls:'c-ar'},
                {name:'الرياضيات', icon:'fa-square-root-alt', cls:'c-math'},
                {name:'اللغة الإنجليزية', icon:'fa-language', cls:'c-en'},
                {name:'العلوم', icon:'fa-flask', cls:'c-sci'},
                {name:'الدراسات الاجتماعية', icon:'fa-globe', cls:'c-soc'},
            ],
            'الصف الأول الابتدائي': [
                {name: 'اللغة العربية', icon: 'fa-book-open', cls: 'c-ar'},
                {name: 'الرياضيات', icon: 'fa-square-root-alt', cls: 'c-math'},
                {name: 'اللغة الإنجليزية', icon: 'fa-language', cls: 'c-en'},
                {name: 'العلوم', icon: 'fa-flask', cls: 'c-sci'},
                {name: 'الدراسات الاجتماعية', icon: 'fa-globe', cls: 'c-soc'},
                {name: 'التكنولوجيا', icon: 'fa-microchip', cls: 'c-tech'},
                {name: 'التربية الدينية', icon: 'fa-mosque', cls: 'c-rel'},
            ],
            'الصف الثاني الابتدائي': [
                {name: 'اللغة العربية', icon: 'fa-book-open', cls: 'c-ar'},
                {name: 'الرياضيات', icon: 'fa-square-root-alt', cls: 'c-math'},
                {name: 'اللغة الإنجليزية', icon: 'fa-language', cls: 'c-en'},
                {name: 'العلوم', icon: 'fa-flask', cls: 'c-sci'},
                {name: 'الدراسات الاجتماعية', icon: 'fa-globe', cls: 'c-soc'},
                {name: 'التكنولوجيا', icon: 'fa-microchip', cls: 'c-tech'},
                {name: 'التربية الدينية', icon: 'fa-mosque', cls: 'c-rel'},
            ],
            'الصف الثالث الابتدائي': [
                {name: 'اللغة العربية', icon: 'fa-book-open', cls: 'c-ar'},
                {name: 'الرياضيات', icon: 'fa-square-root-alt', cls: 'c-math'},
                {name: 'اللغة الإنجليزية', icon: 'fa-language', cls: 'c-en'},
                {name: 'العلوم', icon: 'fa-flask', cls: 'c-sci'},
                {name: 'الدراسات الاجتماعية', icon: 'fa-globe', cls: 'c-soc'},
                {name: 'التكنولوجيا', icon: 'fa-microchip', cls: 'c-tech'},
                {name: 'التربية الدينية', icon: 'fa-mosque', cls: 'c-rel'},
            ],
            'الصف الرابع الابتدائي': [
                {name: 'اللغة العربية', icon: 'fa-book-open', cls: 'c-ar'},
                {name: 'الرياضيات', icon: 'fa-square-root-alt', cls: 'c-math'},
                {name: 'اللغة الإنجليزية', icon: 'fa-language', cls: 'c-en'},
                {name: 'العلوم', icon: 'fa-flask', cls: 'c-sci'},
                {name: 'الدراسات الاجتماعية', icon: 'fa-globe', cls: 'c-soc'},
                {name: 'التكنولوجيا', icon: 'fa-microchip', cls: 'c-tech'},
                {name: 'التربية الدينية', icon: 'fa-mosque', cls: 'c-rel'},
            ],
            'الصف الخامس الابتدائي': [
                {name: 'اللغة العربية', icon: 'fa-book-open', cls: 'c-ar'},
                {name: 'الرياضيات', icon: 'fa-square-root-alt', cls: 'c-math'},
                {name: 'اللغة الإنجليزية', icon: 'fa-language', cls: 'c-en'},
                {name: 'العلوم', icon: 'fa-flask', cls: 'c-sci'},
                {name: 'الدراسات الاجتماعية', icon: 'fa-globe', cls: 'c-soc'},
                {name: 'التكنولوجيا', icon: 'fa-microchip', cls: 'c-tech'},
                {name: 'التربية الدينية', icon: 'fa-mosque', cls: 'c-rel'},
            ],
            'الصف السادس الابتدائي': [
                {name: 'اللغة العربية', icon: 'fa-book-open', cls: 'c-ar'},
                {name: 'الرياضيات', icon: 'fa-square-root-alt', cls: 'c-math'},
                {name: 'اللغة الإنجليزية', icon: 'fa-language', cls: 'c-en'},
                {name: 'العلوم', icon: 'fa-flask', cls: 'c-sci'},
                {name: 'الدراسات الاجتماعية', icon: 'fa-globe', cls: 'c-soc'},
                {name: 'التكنولوجيا', icon: 'fa-microchip', cls: 'c-tech'},
                {name: 'التربية الدينية', icon: 'fa-mosque', cls: 'c-rel'},
            ],
        };

        let subjects = subjectsByGrade[grade] || [];
        
        // Use default elementary subjects if none are specified
        // هذا الجزء لم يعد ضرورياً بعد أن أضفت كل صف على حدة، ولكن يمكن تركه كاحتياطي
        if (subjects.length === 0 && (level === 'prep' || level === 'elem')) {
            subjects = [
                {name:'اللغة العربية', icon:'fa-book-open', cls:'c-ar'},
                {name:'الرياضيات', icon:'fa-square-root-alt', cls:'c-math'},
                {name:'اللغة الإنجليزية', icon:'fa-language', cls:'c-en'},
                {name:'العلوم', icon:'fa-flask', cls:'c-sci'},
                {name:'الدراسات الاجتماعية', icon:'fa-globe', cls:'c-soc'},
                {name:'التكنولوجيا', icon:'fa-microchip', cls:'c-tech'},
                {name:'التربية الدينية', icon:'fa-mosque', cls:'c-rel'},
            ];
        }

        // Clear existing list and build new one
        if (list) {
            // هذا هو الجزء الذي تم تعديله ليقوم بتطبيق التخطيط الشبكي على الصفين الثاني والثالث الثانوي
            if (grade === 'الصف الثاني الثانوي' || grade === 'الصف الثالث الثانوي') {
                list.classList.add('subjects-grid');
            } else {
                list.classList.remove('subjects-grid');
            }

            list.innerHTML = '';
            subjects.forEach(s => {
                const item = createSubjectItem(s.name, s.icon, s.cls);
                list.appendChild(item);
            });
        }

        if(level === 'sec'){
            img.src = 'images/اعدادي2-removebg-preview.png';
        } else if(level === 'prep') {
            img.src = 'images/ثانوي_جديد3-removebg-preview.png';
        } else {
            img.src = 'images/ابتداءي_جديد2-removebg-preview.png';
        }
    });
</script>
</head>
<body>
    <div class="container">
        <div class="subjects-section">
            <div class="header">
                <button class="back" onclick="goBack()" aria-label="رجوع"><i class="fas fa-arrow-right"></i></button>
                <div class="grade-title" id="gradeTitle">مواد الصف</div>
            </div>
            <div id="subjectsList">
            <div class="subject-item">
                <div class="subject-info">
                    <div class="icon c-ar"><i class="fas fa-book-open"></i></div>
                    <span class="subject-name">اللغة العربية</span>
                </div>
                <i class="fas fa-chevron-left chevron"></i>
            </div>
            <div class="subject-item" onclick="showCourseNotAvailable()">
                <div class="subject-info">
                    <div class="icon c-math"><i class="fas fa-square-root-alt"></i></div>
                    <span class="subject-name">الرياضيات</span>
                </div>
                <i class="fas fa-chevron-left chevron"></i>
            </div>
            <div class="subject-item" onclick="showCourseNotAvailable()">
                <div class="subject-info">
                    <div class="icon c-en"><i class="fas fa-spell-check"></i></div>
                    <span class="subject-name">اللغة الإنجليزية</span>
                </div>
                <i class="fas fa-chevron-left chevron"></i>
            </div>
            <div class="subject-item" onclick="showCourseNotAvailable()">
                <div class="subject-info">
                    <div class="icon c-sci"><i class="fas fa-flask"></i></div>
                    <span class="subject-name">العلوم</span>
                </div>
                <i class="fas fa-chevron-left chevron"></i>
            </div>
            <div class="subject-item" onclick="showCourseNotAvailable()">
                <div class="subject-info">
                    <div class="icon c-soc"><i class="fas fa-globe"></i></div>
                    <span class="subject-name">الدراسات الاجتماعية</span>
                </div>
                <i class="fas fa-chevron-left chevron"></i>
            </div>
            <div class="subject-item" onclick="showCourseNotAvailable()">
                <div class="subject-info">
                    <div class="icon c-tech"><i class="fas fa-microchip"></i></div>
                    <span class="subject-name">التكنولوجيا</span>
                </div>
                <i class="fas fa-chevron-left chevron"></i>
            </div>
            <div class="subject-item" onclick="showCourseNotAvailable()">
                <div class="subject-info">
                    <div class="icon c-rel"><i class="fas fa-mosque"></i></div>
                    <span class="subject-name">التربية الدينية</span>
                </div>
                <i class="fas fa-chevron-left chevron"></i>
            </div>
            </div>
        </div>
        <div class="children-section">
            <img id="childrenImg" src="images/ابتداءي_جديد2-removebg-preview.png" alt="أطفال" class="children-image">
        </div>
    </div>
    
    <!-- رسالة التنبيه -->
    <div class="alert-overlay" id="alertOverlay"></div>
    <div class="alert-modal" id="alertModal">
        <h3>الكورس غير متاح بعد</h3>
        <p>لم يتم العثور على دورات بناءً على الفلاتر المطبقة</p>
        <button class="ok-btn" onclick="closeAlert()">حسناً</button>
    </div>
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
</body>
</html>


