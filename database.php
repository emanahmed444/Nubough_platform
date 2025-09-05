<?php
// database.php
$success_message = '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // الاتصال بقاعدة البيانات
    $conn = new mysqli('localhost', 'root', '', 'Nubough_platform3');
    if ($conn->connect_error) {
        $error_message = 'فشل الاتصال بقاعدة البيانات: ' . $conn->connect_error;
    } else {
        // استقبال البيانات من الفورم
        $first_name = $conn->real_escape_string($_POST['first_name']);
        $last_name = $conn->real_escape_string($_POST['last_name']);
        $phone = $conn->real_escape_string($_POST['phone']);
        $parent_phone = $conn->real_escape_string($_POST['parent_phone']);
        $governorate = $conn->real_escape_string($_POST['governorate']);
        $grade = $conn->real_escape_string($_POST['grade']);
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // تحقق من تطابق كلمة السر
        if ($password !== $confirm_password) {
            $error_message = 'كلمة السر غير متطابقة!';
        } else {
            // تشفير كلمة السر
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // إدخال البيانات
            $sql = "INSERT INTO users (first_name, last_name, phone, parent_phone, governorate, grade, password)
                    VALUES ('$first_name', '$last_name', '$phone', '$parent_phone', '$governorate', '$grade', '$hashed_password')";
            if ($conn->query($sql) === TRUE) {
                $success_message = 'تم التسجيل بنجاح!';
            } else {
                $error_message = 'حدث خطأ أثناء التسجيل: ' . $conn->error;
            }
        }
        $conn->close();
    }
}
// المتغيرات $success_message و $error_message ستكون متاحة بعد تضمين هذا الملف 