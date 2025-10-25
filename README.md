# 📰 Fimo Blog — Laravel Full Stack Blog Platform

### 🌐 Live Demo  
🔗 **[Visit the website](https://fimo-projects.lovestoblog.com/)**

---

## 📖 Overview

**Fimo Blog** is a full-stack web application built with **Laravel (Backend)** and **HTML, CSS, Bootstrap (Frontend)**.  
It allows users to create, edit, and manage blog posts with authentication, session management, and database integration.

### Short Video to see features
🔗 **[Visit Video](https://www.youtube.com/watch?v=z51PlsubQ_M)**

---

## ⚙️ Features

✅ User authentication (login, register, logout, forgot/reset password)  
✅ Create, edit, and delete blog posts  
✅ Responsive UI built with Bootstrap  
✅ Secure password hashing & validation  
✅ Email verification via Mailtrap integration  
✅ Database-driven (MySQL)  
✅ MVC architecture following Laravel best practices  

---

## 🧩 Tech Stack

| Layer | Technology |
|-------|-------------|
| **Backend** | Laravel 11 (PHP Framework) |
| **Frontend** | HTML, CSS, Bootstrap |
| **Database** | MySQL |
| **Mail Service** | Mailtrap |
| **Hosting** | LoveToBlog (PHP Shared Hosting) |

---

## 🗂️ Project Structure
Porject1-BLOG/

📁 app Application core (Models, Controllers, Mail, Middleware)

 ⚙️ bootstrap : Bootstraps the framework and loads environment settings.
 ⚙️ config    : Application configuration files (database, mail, session, etc.).
 🗄️ database  : Migrations, factories, and seeders for database structure.
 🌍 public    : Public entry point (index.php), CSS, JS, images, etc.
 💅 resources :
       📄 views : Blade templates (e.g., welcome.blade.php, login.blade.php).
       🎨 css   : Custom stylesheets.
       ⚡ js    : Custom JavaScript files.

 🛣️ routes   :Web and API route definitions (web.php, api.php).

 🧱 storage  : Framework-generated files (logs, cache, sessions, uploads).

 🧰 tests    : Unit and feature tests.

 📦 vendor   : Composer dependencies (do not edit manually).

 
---

## 🚀 Installation & Setup

### 1. Clone the repository
```bash
git clone https://github.com/A7med31fimo/Porject1-BLOG.git
cd Porject1-BLOG/project1-BLOG
```
### 2. Install dependencies
```bash
composer install
npm install && npm run build
```
### 3. Configure environment
# Duplicate .env.example → rename to .env Then update:
```bash
DB_DATABASE=blog
DB_USERNAME=root
DB_PASSWORD=
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
```
### 4. Generate key & migrate database
```bash
   php artisan key:generate
   php artisan migrate
```
### 5. Run the application
```bash php artisan serve```

### Access it at: http://localhost:8000

### 💻 Frontend

## Built with:
✅ Bootstrap 4.1.3
✅ Custom CSS
✅ Blade Templates for dynamic rendering
✅ Example UI sections:
✅ Home page (post listing)
✅ Post editor form
✅ Login / Register / Forgot password
✅ User dashboard

## 📬 Contact

#### 👤 Author: Ahmed Fahim.
#### 📧 Email: ahmedfahim5435644@gmail.com.
#### 🐙 GitHub: @A7med31fimo.
#### 🌐 Phone : 01004860997.

🏁 License

This project is licensed under the MIT License – feel free to use and modify it.

⭐ If you like this project, give it a star on GitHub! .
