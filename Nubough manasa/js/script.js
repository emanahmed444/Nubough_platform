// DOM Elements
const menuToggle = document.getElementById('menuToggle');
const mobileMenu = document.getElementById('mobileMenu');
const themeToggle = document.getElementById('themeToggle');
const body = document.body;

// Mobile Menu Toggle
menuToggle.addEventListener('click', function() {
    mobileMenu.classList.toggle('active');

    // Keep the hamburger icon unchanged (don't change to X)
    // const icon = menuToggle.querySelector('i');
    // if (mobileMenu.classList.contains('active')) {
    //     icon.classList.remove('fa-bars');
    //     icon.classList.add('fa-times');
    // } else {
    //     icon.classList.remove('fa-times');
    //     icon.classList.add('fa-bars');
    // }
});

// Close menu when clicking outside
document.addEventListener('click', function(event) {
    if (!menuToggle.contains(event.target) && !mobileMenu.contains(event.target)) {
        mobileMenu.classList.remove('active');
        // const icon = menuToggle.querySelector('i');
        // icon.classList.remove('fa-times');
        // icon.classList.add('fa-bars');
    }
});

// Theme Toggle
themeToggle.addEventListener('click', function() {
    body.classList.toggle('dark-mode');

    // Save theme preference to localStorage
    const isDarkMode = body.classList.contains('dark-mode');
    localStorage.setItem('darkMode', isDarkMode);
});

// Load saved theme preference
document.addEventListener('DOMContentLoaded', function() {
    const savedTheme = localStorage.getItem('darkMode');
    if (savedTheme === 'true') {
        body.classList.add('dark-mode');
    }
});

// Menu button click handlers
document.querySelector('.new-account').addEventListener('click', function() {
    window.location.href = 'register.php';
});

document.querySelector('.login').addEventListener('click', function() {
    window.location.href = 'login.php';
});

// Hero button click handler
const heroBtn = document.querySelector('.hero-btn');
if (heroBtn) {
    heroBtn.addEventListener('click', function() {
        alert('سيتم توجيهك لصفحة الكورسات');
        // Here you can add navigation to courses page
    });
}