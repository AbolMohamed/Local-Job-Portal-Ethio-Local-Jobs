# 💻 Ethio Local Jobs - Portal Management System

An open-source, multi-lingual **Local Job Portal Management System** designed specifically to streamline recruitment workflows. Developed with a robust **PHP, MySQL, and Bootstrap** stack, the application features full localization support (including Amharic and English translation directories) and granular dashboards optimized for three core roles: **Administrators, Employers, and Job Seekers (Employees)**.

---

### 🚀 Key Features

*   **👥 Three-Tier User Architecture:** Dedicated, authenticated control dashboards for System Admins, Corporate Employers, and Candidates.
*   **🌍 Complete Amharic & English Localization:** Fully modular code architecture featuring parallel language directories (`job/amharic/` and `job/English/`).
*   **📄 Dynamic CV Generator & Parser:** Candidates can build profiles, update academic qualifications, track references, and output certified PDF resumes utilizing the integrated FPDF engine.
*   **📈 Job Posting & Application Lifecycle:** Seamless system enabling employers to publish openings, track application queues, view attachments, and triage incoming candidate pools.
*   **🔔 Real-Time Notification & Messaging Core:** Built-in asynchronous alert handlers (`notification-count.php`, `all_notifications.php`) keeping all profiles updated on application status changes.
*   **🔐 Advanced Asset & Token Auditing:** Secure authentication flows accompanied by structured third-party plugin integrations such as PHPMailer and automated dependency unzippers.

---

### 📂 Directory & File Structure Blueprint

The system is organized into modular paths separating database logic, assets, and localization directories:

```text
├── job/
│   ├── amharic/               # Full localization path for Amharic users
│   │   ├── admin/             # System admin controllers, CSS overrides, and layouts
│   │   ├── employee/          # Candidate registration, dynamic CV builders, and profile management
│   │   ├── employer/          # Recruiter portals for workspace routing and job posting
│   │   └── mail/              # Core mailing workflows and dependencies
│   │
│   ├── English/               # Parallel English tracking environment 
│   │   ├── admin/             # Administration modules (User controls, metrics tracking)
│   │   ├── employee/          # Candidate application paths and profile managers
│   │   └── employer/          # Recruiter dashboards and applicant triage pools
│   │
│   └── Database/
│       └── job_portal.sql     # Database structure, schema relations, and indexing targets
```

---

### 🛠️ Technology Stack & Dependencies

*   **Backend Engine:** PHP (Structured Object/Model Architecture)
*   **Database Hub:** MySQL Relational Database (`job_portal.sql`)
*   **UI/UX Interface:** HTML5, CSS3, JavaScript, Bootstrap v3, and Font-Awesome Vector Suite
*   **Document Generation Engine:** FPDF Framework (`fpdf.php`)
*   **Communication Subsystem:** PHPMailer SMTP Authentication Suite
*   **Async JavaScript Controls:** jQuery v1.11.3, Ion.RangeSlider, and Waypoints Engine

---

### 🔧 Installation & Environment Configuration

Follow this sequence to instantiate your local development server:

#### 1. Environmental Prerequisites
Ensure your local loopback stack (**LAMP**, **XAMPP**, or **MAMP**) runs **PHP 7.4+** alongside a **MySQL** server instance.

#### 2. Repository Synchronization & Directory Placement
Clone the target system directory into your web server root path (e.g., `/var/www/html/` or `C:/xampp/htdocs/`):
```bash
git clone https://github.com/AbolMohamed/Local-Job-Portal-Ethio-Local-Jobs.git
```

#### 3. Database Instantiation
1. Initialize your local access controller (such as **phpMyAdmin**).
2. Create a clean database bucket named `job_portal`.
3. Locate the SQL schema file within your structural stack at `/job/Database/job_portal.sql`.
4. Run an import command to populate your database with the necessary tables, keys, and structural indexes.

#### 4. Establishing Connection Strings
Update the parameters in your environment config files (`DB_connection.php`, `dbcon.php`, or `db_config.php`) with your matching system metrics:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'your_database_user');
define('DB_PASS', 'your_database_password');
define('DB_NAME', 'job_portal');
```

#### 5. Launch the Application
Fire up your browser environment and navigate to the application endpoint to test access configurations:
```text
http://localhost/Local-Job-Portal-Ethio-Local-Jobs/job/English/index.php
```

---

### 🤝 Contributing

Contributions make the open-source community an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project Repository.
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`).
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`).
4. Push to the Branch (`git push origin feature/AmazingFeature`).
5. Open a well-documented Pull Request.

---

### 📄 License

Distributed under the MIT License. See `LICENSE` inside the repository paths for more information.
