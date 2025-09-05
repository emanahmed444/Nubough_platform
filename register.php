<?php include 'database.php'; ?>
<?php include 'header.php'; ?>
<link rel="stylesheet" href="style.css">
<div class="register-page">
    <div class="register-form-container">
        <?php if ($success_message): ?>
            <div style="background:#4CAF50;color:#fff;padding:12px 0;text-align:center;border-radius:8px;margin-bottom:18px;font-weight:bold;">
                <?php echo $success_message; ?>
            </div>
        <?php elseif ($error_message): ?>
            <div style="background:#d32f2f;color:#fff;padding:12px 0;text-align:center;border-radius:8px;margin-bottom:18px;font-weight:bold;">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>
        <h2 class="register-title">أنشئ حسابك الآن <span class="icon">🧪</span></h2>
        <p class="register-desc">ادخل بياناتك بشكل صحيح للحصول على أفضل تجربة داخل الموقع</p>
        <form class="register-form" method="POST" action="register.php">
            <div class="form-row">
                <div class="form-group material-group">
                    <div class="material-input-wrapper">
                        <input type="text" name="first_name" id="first_name" required class="material-input" autocomplete="off" placeholder=" ">
                        <label for="first_name" class="material-label">الاسم الأول</label>
                        <span class="material-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" fill="#00BCD4"/></svg>
                        </span>
                        <span class="material-bar"></span>
                        <span class="material-anim-bar"></span>
        </div>
                </div>
                <div class="form-group material-group">
                    <div class="material-input-wrapper">
                        <input type="text" name="last_name" id="last_name" required class="material-input" autocomplete="off" placeholder=" ">
                        <label for="last_name" class="material-label">الاسم الأخير</label>
                        <span class="material-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" fill="#00BCD4"/></svg>
                        </span>
                        <span class="material-bar"></span>
                        <span class="material-anim-bar"></span>
                    </div>
                        </div>
                    </div>
                    <div class="form-row">
                <div class="form-group material-group">
                    <div class="material-input-wrapper">
                        <input type="text" name="phone" id="phone" required class="material-input" autocomplete="off" placeholder=" ">
                        <label for="phone" class="material-label">رقم الهاتف</label>
                        <span class="material-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22"><path d="M6.62 10.79a15.05 15.05 0 0 0 4.59 4.59l1.2-1.2a1 1 0 0 1 1-.24c1.12.37 2.33.57 3.59.57a1 1 0 0 1 1 1v2.5a1 1 0 0 1-1 1A16 16 0 0 1 3 5a1 1 0 0 1 1-1h2.5a1 1 0 0 1 1 1c0 1.26.2 2.47.57 3.59a1 1 0 0 1-.24 1l-1.2 1.2z" fill="#00BCD4"/></svg>
                        </span>
                        <span class="material-bar"></span>
                        <span class="material-anim-bar"></span>
                    </div>
                        </div>
                <div class="form-group material-group">
                    <div class="material-input-wrapper">
                        <input type="text" name="parent_phone" id="parent_phone" required class="material-input" autocomplete="off" placeholder=" ">
                        <label for="parent_phone" class="material-label">رقم هاتف ولي الأمر</label>
                        <span class="material-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22"><path d="M6.62 10.79a15.05 15.05 0 0 0 4.59 4.59l1.2-1.2a1 1 0 0 1 1-.24c1.12.37 2.33.57 3.59.57a1 1 0 0 1 1 1v2.5a1 1 0 0 1-1 1A16 16 0 0 1 3 5a1 1 0 0 1 1-1h2.5a1 1 0 0 1 1 1c0 1.26.2 2.47.57 3.59a1 1 0 0 1-.24 1l-1.2 1.2z" fill="#00BCD4"/></svg>
                        </span>
                        <span class="material-bar"></span>
                        <span class="material-anim-bar"></span>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                <label style="display:block; text-align:right; direction:rtl;">المحافظة</label>
                   
                    <select name="governorate" required>
                        <option value="">اختر المحافظة</option>
                        <option value="القاهرة">القاهرة</option>
                        <option value="الجيزة">الجيزة</option>
                        <option value="الإسكندرية">الإسكندرية</option>
                        <option value="السويس">السويس</option>
                        <!-- أضف باقي المحافظات هنا -->
                    </select>
                        </div>
                <div class="form-group">
                <label style="display:block; text-align:right; direction:rtl;">المرحلة الدراسية</label>
    <select name="grade" required>
        <option value="">اختر المرحلة</option>
        <option value="المرحلة الابتدائية">المرحلة الابتدائية</option>
        <option value="المرحلة الإعدادية">المرحلة الإعدادية</option>
        <option value="المرحلة الثانوية">المرحلة الثانوية</option>
    </select>
                            </div>

                                </div>
            <div class="form-row">
                <div class="form-group material-group">
                    <div class="material-input-wrapper">
                        <input type="password" name="password" id="password" required class="material-input" autocomplete="off" placeholder=" ">
                        <label for="password" class="material-label">كلمة السر</label>
                        <span class="material-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22"><rect x="6" y="10" width="10" height="6" rx="2" fill="#00BCD4"/><path d="M8 10V8a3 3 0 1 1 6 0v2" stroke="#00BCD4" stroke-width="2" fill="none"/></svg>
                        </span>
                        <span class="material-bar"></span>
                        <span class="material-anim-bar"></span>
                    </div>
                        </div>
                <div class="form-group material-group">
                    <div class="material-input-wrapper">
                        <input type="password" name="confirm_password" id="confirm_password" required class="material-input" autocomplete="off" placeholder=" ">
                        <label for="confirm_password" class="material-label">تأكيد كلمة السر</label>
                        <span class="material-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22"><rect x="6" y="10" width="10" height="6" rx="2" fill="#00BCD4"/><path d="M8 10V8a3 3 0 1 1 6 0v2" stroke="#00BCD4" stroke-width="2" fill="none"/></svg>
                        </span>
                        <span class="material-bar"></span>
                        <span class="material-anim-bar"></span>
                    </div>
                </div>
            </div>
            <button type="submit" class="register-submit">انشئ الحساب!</button>
        </form>
        <p class="register-login-link">
    يوجد لديك حساب بالفعل؟ <a href="login.php">ادخل إلى حسابك الآن !</a>
</p>


    </div>
    <div class="register-side-image">
        <div class="side-box">
            <span class="side-title">  يلا نسجل سوا </span>
            <img src="images/login-security.gif" alt="تسجيل دخول آمن" class="side-gif">
        </div>
    </div>
</div>
<style>
.register-page {
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    margin: 120px 0 0 0;
    min-height: 80vh;
}
.register-form-container {
    flex: 1;
    max-width: 650px;
    margin-right: 60px;
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 2px 16px rgba(0,0,0,0.06);
    padding: 32px 32px 16px 32px;
}
.register-title {
    color: #d32f2f;
    font-size: 2rem;
    margin-bottom: 8px;
}
.register-desc {
    color: #888;
    margin-bottom: 24px;
}
.register-form {
    width: 100%;
}
.form-row {
    display: flex;
    gap: 18px;
    margin-bottom: 18px;
}
.form-group {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 6px;
}
.input-icon {
    position: relative;
    display: flex;
    align-items: center;
}
.input-icon input {
    width: 100%;
    padding: 10px 36px 10px 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 1rem;
    outline: none;
    transition: border 0.2s;
    direction: rtl;
}
.input-icon input:focus {
    border: 1.5px solid #00BCD4;
}
.input-icon span {
    position: absolute;
    left: 10px;
    color: #00BCD4;
    font-size: 1.2rem;
    pointer-events: none;
}
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 1rem;
    outline: none;
    background: #fafafa;
    color: #333;
    direction: rtl;
}
.register-submit {
    width: 100%;
    background: #9370DB !important;
    color: #fff !important;
    border: none;
    border-radius: 8px;
    padding: 14px 0;
    font-size: 1.2rem;
    font-weight: bold;
    margin-top: 18px;
    cursor: pointer;
    transition: background 0.2s;
}
.register-submit:hover {
    background:#7B5AC8  !important;
}
.register-login-link {
    text-align: center;
    margin-top: 18px;
    color: #888;
}
.register-login-link a {
    color: #ff9800 !important;
    text-decoration: underline;
}
.register-side-image {
    flex: 0 0 45%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: 0;
    min-height: 0;
    height: 85vh;
}
.side-box {
    background: #9370DB;
    border-radius: 28px;
    padding: 32px 18px 18px 18px;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-width: 340px;
    width: 90%;
    height: 100%;
    box-shadow: 0 2px 16px rgba(0,188,212,0.08);
}
.side-title {
    color: #fff;
    font-size: 2.3rem;
    font-weight: bold;
    margin-bottom: 28px;
    margin-top: 8px;
    letter-spacing: 1px;
}
.side-box img {
    width: 80%;
    max-width: 350px;
    border-radius: 18px;
    margin-top: 18px;
    display: block;
}
.material-group {
    margin-bottom: 0;
}
.material-input-wrapper {
    position: relative;
    margin-bottom: 32px;
    direction: rtl;
}
.material-input {
    border: none;
    border-bottom: 2px solid #bbb;
    outline: none;
    width: 100%;
    font-size: 1.1rem;
    padding: 12px 40px 8px 8px;
    background: transparent;
    color: #222;
    transition: border-color 0.3s cubic-bezier(.4,0,.2,1);
}
.material-label {
    position: absolute;
    right: 40px;
    top: 14px;
    color: #888;
    font-size: 1.1rem;
    pointer-events: none;
    transition: all 0.3s cubic-bezier(.4,0,.2,1);
    background: #fff;
    padding: 0 4px;
    z-index: 2;
}
.material-input:focus ~ .material-label,
.material-input:not(:placeholder-shown):not([value=""]) ~ .material-label {
    top: -14px;
    font-size: 0.95rem;
    color:  #00BCD4;
    right: 40px;
}
.material-input:focus {
    border-bottom: 2px solid #00BCD4;
}
.material-bar {
    display: block;
    position: absolute;
    bottom: 0;
    right: 0;
    width: 100%;
    height: 2px;
    background: #bbb;
    z-index: 1;
}
.material-anim-bar {
    display: block;
    position: absolute;
    bottom: 0;
    right: 0;
    width: 100%;
    height: 2px;
    background: #00BCD4;
    z-index: 2;
    transform: scaleX(0);
    transform-origin: right;
    transition: transform 0.2s cubic-bezier(.4,0,.2,1);
}
.material-input:focus ~ .material-anim-bar {
    transform: scaleX(1);
    transition: transform 0.2s cubic-bezier(.4,0,.2,1);
}
.material-input:not(:focus):not(:placeholder-shown):not([value=""]) ~ .material-anim-bar {
    transform: scaleX(1);
    transition: none;
}
.material-input:focus ~ .material-label,
.material-input:focus ~ .material-anim-bar {
    color: #00BCD4;
}
.material-icon {
    position: absolute;
    right: 8px;
    top: 14px;
    color: #00BCD4;
    pointer-events: none;
    transition: color 0.3s cubic-bezier(.4,0,.2,1);
}
body.dark-mode .register-form-container {
    background: #18191a;
    color: #fff;
    box-shadow: 0 2px 16px rgba(0,0,0,0.3);
}
body.dark-mode .register-title,
body.dark-mode .register-desc,
body.dark-mode .register-login-link,
body.dark-mode .register-login-link a {
    color: #eee;
}
body.dark-mode .material-input {
    color: #fff;
    background: transparent;
}
body.dark-mode .material-label {
    background: #18191a;
    color: #bbb;
}
body.dark-mode .material-input {
    border-bottom: 2px solid #444;
}
body.dark-mode .material-bar {
    background: #444;
}
body.dark-mode .material-input:focus {
    border-bottom: 2px solid #00BCD4;
}
body.dark-mode .material-label:focus,
body.dark-mode .material-input:focus ~ .material-label,
body.dark-mode .material-input:not(:placeholder-shown):not([value=""]) ~ .material-label {
    color: #00BCD4;
}
body.dark-mode select {
    background: #232323;
    color: #fff;
    border: 1px solid #444;
}
body.dark-mode .register-submit {
    background: #9370DB !important;
    color: #fff !important;
}
body.dark-mode .register-submit:hover {
    background: #7B5AC8 !important;
}
body.dark-mode .register-login-link a {
    color: #ff9800 !important;
}
.side-gif {
    width: 90%;
    max-height: 70%;
    object-fit: contain;
    margin-top: 30px;
    display: block;
}
</style>

<!-- Google Fonts: Cairo -->
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">

<footer class="custom-footer">
  <!-- المخبار الأيسر -->
  <img src="images/download.png" alt="download left" class="footer-flask footer-flask-left">
  <!-- المخبار الأيمن -->
  <img src="images/download.png" alt="download right" class="footer-flask footer-flask-right">

  <div class="footer-content">
    <div class="footer-social">
      <!-- Facebook Icon -->
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

<style>
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
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
  flex-wrap: wrap;
}
.footer-heart {
  color: #8B0000;
  font-size: 1.5rem;
  margin: 0 6px;
}

/* المطورين */
.footer-dev {
  margin: 10px 0 0 0;
  font-size: 1.1rem;
  font-family: 'Cairo', Arial, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 8px;
  flex-wrap: wrap;
}
.footer-dev-eman {
  color: #ADFF2F;
  font-weight: bold;
  font-size: 1.1rem;
  letter-spacing: 1px;
  background: none;
  border-radius: 0;
  padding: 0;
  margin: 0 2px;
}
.footer-dev-eman {
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
}

/* إعدادات البلاك مود للفوتر */
body.dark-mode .custom-footer {
  border-top: none !important;
  box-shadow: none !important;
}

body.dark-mode .custom-footer::before,
body.dark-mode .custom-footer::after {
  display: none !important;
}
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

.register-title, 
.register-desc {
    direction: rtl;
    text-align: right;
}

.register-title {
    display: flex;
    align-items: center;
    justify-content: flex-start; /* يخلي النص يبدأ من اليمين */
    gap: 5px; /* مسافة بين النص والأيقونة */
}

</style> 

