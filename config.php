<?php
// Configuration for Pico Attendance System

// ✅ کلید امنیتی (باید با کد پیکو یکی باشه)
define("PRESHARED_KEY", "KEY_1234567890");

// ✅ تنظیمات دیتابیس (XAMPP پیش‌فرض)
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", ""); // خالی بذار چون XAMPP پسورد نداره
define("DB_NAME", "attendance_db");

// ✅ لیست دستی از IP های مجاز پیکو
$pico_ips = [
    "192.168.11.20", // Pico 1 (IP پیکو رو اینجا بزار)
];
?>
