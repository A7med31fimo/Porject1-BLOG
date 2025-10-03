# Project1-BLOG

A modern Blog Application built with **Laravel**, **PHP**, and **MySQL**.  
It includes authentication, CRUD posts, and password reset via email.

---

## 🚀 Features
- User authentication (Register / Login / Logout)  
- Create, edit, and delete posts  
- Password reset via email (Mailtrap)  
- Responsive UI with HTML & CSS  
- Database migrations and seeders  

---

## 🛠 Tech Stack
- **Backend**: Laravel 10, PHP 8+  
- **Database**: MySQL  
- **Frontend**: HTML5, CSS3  
- **Tools**: Composer, Mailtrap  

---

## ⚙️ Installation

### Prerequisites
- PHP >= 8.0  
- Composer  
- MySQL  
- Node.js *(optional, for assets)*  

### Steps
git clone https://github.com/A7med31fimo/Porject1-BLOG.git
cd Porject1-BLOG/project1-BLOG
composer install
cp .env.example .env
php artisan key:generate
Configure .env for DB + Mailtrap:

### env Copy code to .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
MAIL_FROM_ADDRESS=hello@example.com
MAIL_FROM_NAME="Project1-BLOG"

### Run migrations:
php artisan migrate
### run server
Start local server:
php artisan serve

### 📌 Usage
Local URL: http://127.0.0.1:8000


### 📜 License
MIT
