<?php
// logout.php
session_start();        // نبدأ السيشن الحالية
session_unset();        // نمسح كل المتغيرات من السيشن
session_destroy();      // نقفل السيشن نهائي

// نرجع المستخدم لصفحة تسجيل الدخول
header("Location: login.php");
exit();
?>
