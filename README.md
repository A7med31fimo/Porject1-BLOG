project:
  name: "Project1-BLOG"
  description: "A simple Blog Application built with PHP and MySQL as a demo project."

features:
  - "User authentication (Register / Login / Logout)"
  - "Create, edit, and delete blog posts (CRUD)"
  - "Display posts on the homepage"
  - "Forgot Password feature with reset link"
  - "Simple and clean UI design"
  - "Mailtrap integration for testing email functionality (like password reset)"

tech_stack:
  - PHP
  - MySQL
  - HTML
  - CSS
  - Composer
  - Mailtrap

project_structure: |
  project1-BLOG/
  ├── app/                 # Backend logic (Controllers, Models, etc. if MVC)
  ├── public/              # Public files (CSS, JS, images)
  ├── resources/           # Views / templates
  ├── routes/              # Route files (web.php)
  ├── database/            # Database migrations, seeds (if any)
  ├── .env                 # Environment variables (DB, mail, etc.)
  └── README.md            # This file

setup:
  steps:
    - "Clone the repository"
    - "Create a MySQL database (e.g., blog)"
    - "Configure the .env file"
    - "Start MySQL server (XAMPP or MySQL)"
    - "Install dependencies"
    - "Run migrations"
    - "Start Laravel development server"
  commands:
    clone: |
      git clone https://github.com/A7med31fimo/Porject1-BLOG.git
      cd Porject1-BLOG/project1-BLOG
    environment: |
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
      MAIL_ENCRYPTION=null
      MAIL_FROM_ADDRESS="hello@example.com"
      MAIL_FROM_NAME="${APP_NAME}"
    run: |
      composer install
      php artisan key:generate
      php artisan migrate
      php artisan serve

urls:
  local: "http://127.0.0.1:8000"

forgot_password_flow:
  - "User clicks 'Forgot Password'"
  - "System sends reset link via Mailtrap"
  - "Link opens Reset Password page"
  - "User sets new password"
  - "Redirects back to login"

test_mail:
  command: |
    php artisan tinker
    >>> Mail::raw('This is a test', function ($m) {
          $m->to('test@example.com')->subject('Test Mail');
        });

screenshots:
  - "Posts listing page"
  - "Create/Edit post page"
  - "Login / Forgot Password page"

contributing:
  - "Open an Issue to report a bug or request a feature"
  - "Submit a Pull Request with improvements"

license: "MIT License"
